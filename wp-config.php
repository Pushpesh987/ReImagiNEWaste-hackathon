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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '5<1z{[jnRhq>2EN)&T=>0jC5tTM.a9JL=Z:M9Qq;W9924 uM32,6<`@vAd1Oym6$' );
define( 'SECURE_AUTH_KEY',  'fXxvdWTq:hX!0D0;9W^4r1TrOpM`wFG+UPu5<w#pf!Q$Xs#deYhJxAc+im.4f7x:' );
define( 'LOGGED_IN_KEY',    'QfL{j+a1I_psI6.mY/J]ktq,sset~.IT|7E2@x^v8zGTktz0_!&$&Hkh4oiwd]i9' );
define( 'NONCE_KEY',        'K:Gdep~q%Y)+^*)YmlNpKDN@_x2bMr*|e;x1x>dqZO3E|fs|dMn,}}{*GsP?o/ta' );
define( 'AUTH_SALT',        ' OD6orMrSyKvY%w`N*Kso,|7+H[k)]6brB%frk>yqe&d4x^nyR5{=H2pYjV+6[&e' );
define( 'SECURE_AUTH_SALT', 'JQ2l<h/,U!3MoiiemA;x4>kh1z#mO69lAK(#=(:SEHy8$}e6AbgG,hfs>0wM5a>U' );
define( 'LOGGED_IN_SALT',   'OnU;V!v{pG|g|)dV>H3}K;)?I1Ga(F%xH_AgR1jvRV_O}:Gzg3+jbg$q>$,%C,-p' );
define( 'NONCE_SALT',       'a2] G|-M/GjoaL:e`0.6/*r7>vCAtfEP.szYUm17G=u(oNA@}Cl-]c,nE#B3TFF_' );

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
