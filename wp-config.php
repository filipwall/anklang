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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'anklang_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'f$?Oc5W[ctCmu3r~lNDV=0-.i*ebu[tOW5Y(=ck;^I4ttw6XtAzCaQ?42[Sy!)[ ' );
define( 'SECURE_AUTH_KEY',  '9WK}b:@+L!=LQZqGFf#Zs^_EfZ74t=eP:0?6@W.=Jp^h9)zv#CZ[r_o}em&mMi6 ' );
define( 'LOGGED_IN_KEY',    'r<K3v:7b~33KZDTSwGVjL0c2YBwpu#@!QJnFbmrdT]^N80BZ23*&)0&E7HM:JfRu' );
define( 'NONCE_KEY',        'By~R.gT_-41Ch..hTPV(`Hnf%97X}lW,kA:sN^Ylm@.X|IR^F~}Uk!{:f,38]-WU' );
define( 'AUTH_SALT',        '&/|r@0/&;)4<QbaKUJVU@JGhwvl `lIo?V3%dq2],ip]=kR={2A_8B?by|mkN:!$' );
define( 'SECURE_AUTH_SALT', '/;qWS3|A?2ZP/4w(ndZ:t;DXoAUI!8 fgli~Er/6C]/tyJ3ZV[R%4`lMq6E@.|{R' );
define( 'LOGGED_IN_SALT',   'pk0P=#O] #)kJB3cs/o~bSG>8-d].*^-|@ab8vf#/Zdt]]5jTXOzPX@^!Y1R<cc}' );
define( 'NONCE_SALT',       '}wJFVmD{I4-Q)t3e|$pk@ZI[6R%9|eeiYd:!b4vj|k_6z`By4]-;SAqPucg^00~$' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
