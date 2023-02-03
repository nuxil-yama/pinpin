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
define( 'DB_NAME', 'kikinuxil_web' );

/** Database username */
define( 'DB_USER', 'kikinuxil_web' );

/** Database password */
define( 'DB_PASSWORD', 'zxUcG0;kj_ES' );

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
define( 'AUTH_KEY',         '#[]SkUBU[CRvx/~rLGI%H~av0K34TihswQymVEv^xq3/u&(jjZIP,<LQFbjw!KKs' );
define( 'SECURE_AUTH_KEY',  'G@.KRk]>Bu,1-b{!uX#<ldX8uL%c0L^3GA-BWA[0R}}e/z 01-h#` OSP*BvL}I ' );
define( 'LOGGED_IN_KEY',    'w.sk|3TlR3|^5`GPx|vh!N/xq9o,FLXG+[WJ@CQ<}yr).OW( h&naxeR``Z>K9TD' );
define( 'NONCE_KEY',        '(,SI|I>k{l(l :L{vtrb-d%6qi$C]=_4yRY(-^vh1?Wv&Pw$PMsiauBkzWqjw8iM' );
define( 'AUTH_SALT',        '=IHB*CR6jZ?U3}(-? ,l3SJ[z!S12}S@-:KYPrW9{Z2]H-HZ(l|jYxzil*iN0y=?' );
define( 'SECURE_AUTH_SALT', 'Y;qWSaY0g!U9|E]t1ZJs36sEgVwqVC=WIa9V1Ye0!:>#pC>Pd%?A<.qHIp;!x+0_' );
define( 'LOGGED_IN_SALT',   'i.GBDt_<q`b72%,C/-(*{ 9`T5kj#sw[vhFk%_.5W%Eu6Ma2kN!{Z53i-bn=&7Th' );
define( 'NONCE_SALT',       'E^$6f9YZyd0zvl7-L7eN83|~19oh1XvCT1<`w24=c^+RC5m-li`)f[Z5/(m=.1Un' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pinpin_';

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
