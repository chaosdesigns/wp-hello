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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'gG;`A7CQ PQ2it7+w@UG%b_w+-Z)$c^W?Z:F^,FE[8vp`.NV~E<3;5c`bW_3hBOe' );
define( 'SECURE_AUTH_KEY',   '6KO^n[@`ctxkuGf[$6%)uq]v.X;l!:w?m(|kAu?5$6zjCg*hT#L.QLl1aY^kuahS' );
define( 'LOGGED_IN_KEY',     'w(P)uZ]i@8a@Yzy?<MpsXW{9iceXA(|1=; _<M,Fp_QV5Y%T[4< K~as <)UhVfx' );
define( 'NONCE_KEY',         ';wJ,;Bk0#D^e)IVG_jhR92GFH9au{FBG!@O#g$a><BbwV%Yn1BVEpU]ZH%a5SwaX' );
define( 'AUTH_SALT',         '/]xdu.H*X08O/0ksn2:|h_h&p/&|MvNd72Hx60gYL8,r!4)mRw;+@eZ$#s{j/Ww?' );
define( 'SECURE_AUTH_SALT',  'QUQuv>Qo5){DkZ`Ox0f!78CS6KSqEdhN4ban,1`y+(ZnQO[2g~(-?K*cjTZD~|Ms' );
define( 'LOGGED_IN_SALT',    'jUFCyr9W0vHM4*FyHcf46SQu)YC&g5zg3L1t%bl8Yp7cm40>dfU$|qjdo+G$i-3t' );
define( 'NONCE_SALT',        'ndD7dy4l9^}@.7S;v<;jbN8*qmMK*`j15|!!VPBBt!kdY|s=i:cO7z-gG2K3*(qJ' );
define( 'WP_CACHE_KEY_SALT', 'g^@G1%8Dfx?U/HcUKP7f}.W*oGf&0Rh+@^pVmt?-}4> K*X(t&7!.?@q/UEVudG7' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
