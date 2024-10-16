<?php
define( 'WP_CACHE', false ); // Added by AccelerateWP
 // Added by AccelerateWP

 // Added by AccelerateWP

 // Added by AccelerateWP


/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'moneyhus_wp919' );

/** Database username */
define( 'DB_USER', 'moneyhus_wp919' );

/** Database password */
define( 'DB_PASSWORD', '6gCpZ)Snp-D7.2]-' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'hxhnwgw7play3zakurzfrojdyuf5qyuv234zkruysckg0kjebpetsmbr1rlgmjib' );
define( 'SECURE_AUTH_KEY',  'g2kutmlcce5ecukwxslnizz2qsu864uisclo4gt7h5ixosqnsu8rsvh7sl27ja7t' );
define( 'LOGGED_IN_KEY',    '8u3oqnp2z5vvwdc4kajzkc1kewenfxngfr4rbppfgbv4gtwn84ktrz8bjb99hpkv' );
define( 'NONCE_KEY',        'azdoiepusyed9zt5mwb2pcderhbpzcc2dp8rquoa40ehzw19uht1bxegx6r6kok9' );
define( 'AUTH_SALT',        'vmrh9ucyv9sa7jduxr5t2gvozrtdw0bdrovoajzqqsrf5usio1xfmqer0sbjqmpb' );
define( 'SECURE_AUTH_SALT', 'fisfq1fit8ifbkcpyyijo5pvwz8kd7qjycqqc0bolvrb90akzc9h0tcrynk7gfhy' );
define( 'LOGGED_IN_SALT',   'lqzqp70qdb2dbzvovrrucp3ipxpcm7lxzsue5xatunoqcjmyjlf61cfawcfumgtx' );
define( 'NONCE_SALT',       'beigfo7sj9p12gcqdyz5hguw92y7tdpyjl9oi3zzpjonf2kawiv92ipz9aab70vc' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp5g_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
