<?php
/*
* BACKUPLY
* https://backuply.com
* (c) Backuply Team
*/


if(!defined('BACKUPLY_PRO')) {
	die('HACKING ATTEMPT!');
}

// Cron for Calling Auto Backup
add_action('backuply_auto_backup_cron', 'backuply_auto_backup_execute');
	
// Auto Backup using custom cron
if(isset($_GET['action'])  && $_GET['action'] == 'backuply_custom_cron'){
	
	if(!backuply_verify_self(sanitize_text_field(wp_unslash($_REQUEST['backuply_key'])))){
		backuply_status_log('Security Check Failed', 'error');
		die();
	}
	
	backuply_auto_backup_execute();
}

function backuply_premium_init(){
	
	// Check for updates
	include_once(BACKUPLY_DIR.'/lib/premium/plugin-update-checker.php');
	$backuply_updater = Backuply_PucFactory::buildUpdateChecker(BACKUPLY_API.'/updates.php?version='.BACKUPLY_VERSION, BACKUPLY_FILE);
		
	// Add the license key to query arguments
	$backuply_updater->addQueryArgFilter('backuply_updater_filter_args');
		
	// Show the text to install the license key
	add_filter('puc_manual_final_check_link-backuply-pro', 'backuply_updater_check_link', 10, 1);
		
}

// Returns Backups Locations for PRO Version
function backuply_get_pro_backups() {
	return array(
		'softftpes' => 'FTPS',
		'softsftp' => 'SFTP',
		'dropbox' => 'Dropbox',
		'aws' => 'Amazon S3', 
		'onedrive' => 'Microsoft OneDrive', 
		'webdav' => 'WebDAV',
		'caws' => 'S3 Compatible'
	);
}

// Handles the http request from Custom cron
// TODO: This function is not being used
function backuply_custom_cron_action() {
	global $backuply;
	
	if(!backuply_verify_self(backuply_optreq('backuply_key'))) {
		backuply_status_log('Security Check Failed', 'error');
		die();
	}
	
	$backuply['auto_backup'] = true;
	backuply_backup_rotation();
	
	if($cron_backuply_backup_information = get_option('backuply_cron_settings')){
		update_option('backuply_status', $cron_backuply_backup_information);
		backuply_backup_execute();
	}
}

// Adds a Wp-Cron for autobackup
function backuply_add_auto_backup_schedule($schedule = '') {

	if(empty($schedule)){
		$schedule = backuply_optpost('backuply_cron_schedule');
	}
	
	if (!wp_next_scheduled( 'backuply_auto_backup_cron' )){
		wp_schedule_event(time(), $schedule, 'backuply_auto_backup_cron');
	}
}

// Initiates auto backup
function backuply_auto_backup_execute(){
	global $backuply;
	
	//$backuply['auto_backup'] = true;
	backuply_create_log_file();
	backuply_backup_rotation();

	if($auto_backup_settings = get_option('backuply_cron_settings')){
		$auto_backup_settings['auto_backup'] = true;
		update_option('backuply_status', $auto_backup_settings);
		backuply_backup_execute();
	}
}

// Rotate the backups
function backuply_backup_rotation() {
	global $backuply;
	
	if(empty($backuply['cron']['backup_rotation'])) {
		return;
	}

	$backup_info = backuply_get_backups_info();
	
	if(empty($backup_info)) {
		return;
	}
	
	$backup_info = array_filter($backup_info, 'backuply_filter_backups_on_loc');
	usort($backup_info, 'backuply_oldest_backup');
	
	if(count($backup_info) >= $backuply['cron']['backup_rotation']) {
		if(empty($backup_info[0])) {
			return;
		}
		
		backuply_log('Deleting Files because of Backup rotation');
		backuply_status_log('Deleting backup because of Backup rotation', 39);
		
		$extra_backups = count($backup_info) - $backuply['cron']['backup_rotation'];
		
		if($extra_backups > 0) {
			for($i = 0; $i <= $extra_backups; $i++) {
				backuply_delete_backup($backup_info[$i]->name .'.'. $backup_info[$i]->ext);
			}
		}
	}
}

// Returns backups based on location
function backuply_filter_backups_on_loc($backup) {
	global $backuply;
	
	if(!isset($backup->backup_location)){
		return ($backup->auto_backup);
	}
	
	return ($backuply['cron']['backup_location'] == $backup->backup_location && $backup->auto_backup);
}

// Returns oldest backup
function backuply_oldest_backup($a, $b) {
	return $a->btime > $b->btime;
}

// Add our license key if ANY
function backuply_updater_filter_args($queryArgs){
	
	global $backuply;
	
	if (!empty($backuply['license']['license'])){
		$queryArgs['license'] = $backuply['license']['license'];
	}
	
	return $queryArgs;
}

// Handle the Check for update link and ask to install license key
function backuply_updater_check_link($final_link){
	
	global $backuply;
	
	if(empty($backuply['license']['license'])){
		return '<a href="'.admin_url('admin.php?page=backuply-license').'">Install Backuply Pro License Key</a>';
	}
	
	return $final_link;
}

backuply_premium_init();

