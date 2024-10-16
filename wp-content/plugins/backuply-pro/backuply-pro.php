<?php
/*
Plugin Name: Backuply Pro
Plugin URI: https://backuply.com/
Description: Backuply is a Wordpress Backup plugin. Backups are the best form of security and safety a website can have.
Version: 1.1.9
Author: Softaculous
Author URI: https://backuply.com
Text Domain: backuply
*/

// We need the ABSPATH
if (!defined('ABSPATH')) exit;

if(!function_exists('add_action')){
	echo 'You are not allowed to access this page directly.';
	exit;
}

// If BACKUPLY_VERSION exists then the plugin is loaded already !
if(defined('BACKUPLY_VERSION')){
	return;
}

define('BACKUPLY_PRO', __FILE__);
define('BACKUPLY_FILE', __FILE__);

include_once(dirname(__FILE__).'/init.php');