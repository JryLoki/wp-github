<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gitwp' );

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
define( 'AUTH_KEY',         '#=-P50_pESbt>dk_wExKT*@Qli^:bqe{K|C8rm&K,sUn%r=qobNRm%w]^)yx4z`C' );
define( 'SECURE_AUTH_KEY',  '+7-0l5;w5Jr[&F]gS2rfpXEXF@HrZZ8?G8)~Tt=_&HoTtQ!XrEe5peG&^*]6u>@4' );
define( 'LOGGED_IN_KEY',    'Elx5:)Ujy):kmCA}suDqE2lAaH&DeF_VpJ(>]x<YVB#^1;2PCD[ 0.v|/2(qh*@8' );
define( 'NONCE_KEY',        '026QycgMC96sN=rYY@WB+jPRZ[!`7+Ca@[UKX>iWnz,FDaS5G#M2Nl6x8<>0>mOo' );
define( 'AUTH_SALT',        ',wvbPgJC^[BYp(@R7)yi]Mt^qjWhAi70&)EbW}_00X)W4<mx/35oyzsq {~taqCN' );
define( 'SECURE_AUTH_SALT', '-$2Z)B}!=cjm?nO?HCE14?k)P|(2{XzZTqqc{YYJu>U@1`($d*oFxQy5xtLwPg.h' );
define( 'LOGGED_IN_SALT',   '`nx`zmyHk 3 #-UGT#R &-5Ft{|.,B]z$_YwV`1[8=2%(:oyv;B,vu0.[B~h?.W^' );
define( 'NONCE_SALT',       'w!=&aE8;-*!`~<@G,hR0`.#di{aUV>6[#`(!bc0L&{WD%*7fZY8Obii0>%gHFQah' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
