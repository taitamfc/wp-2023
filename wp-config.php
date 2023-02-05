<?php
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
define( 'DB_NAME', 'wp-2023' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'H3GrFg72vvRezrDnnNE0HKBky6w7lccMwDwcE4HpgK83wZGSbSmkguGCWBkh19V6' );
define( 'SECURE_AUTH_KEY',  'eCJ5BQsNC2y0NYda7pJ4av4nguTxDn2BqCTyTrQwM5sRc5VNcxg9UUUjYxbDMviL' );
define( 'LOGGED_IN_KEY',    'd6XvLquZPnzWUMPma7pG0puS9zZ9e7v7ikN8qQHAfjXYNahHhM9S4aqZR9wzTA7L' );
define( 'NONCE_KEY',        'hcS6IidB94oVA2UM9Bb3q475kUESJej5128IJ0XTIhtdeMnOfIiz20kmdA65m8G2' );
define( 'AUTH_SALT',        'kkNFFbVdrJcUfgZd77XpHHHhxgjDdm92HIqk3rdcbe1tEnuWcEsf19eKA3EAQEfh' );
define( 'SECURE_AUTH_SALT', 'xBpACiRS2GXSLBeLkEvCHIgLAiThZuhBtQLvkqq7GY9AaPYFRPRjwVzUaEk3LNLG' );
define( 'LOGGED_IN_SALT',   '5bsdySeE0cFNZ8Oy4fAwbsHOiHgIhF7qmO9QAOAebitpPUdBSvL8blNBdAbpxa9n' );
define( 'NONCE_SALT',       'zV0M6OKdc4Y8qqaIlr75vly1PXQz8DfxQjjFqfxeHgiE7eApYk1sUplW26qYDP8q' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
