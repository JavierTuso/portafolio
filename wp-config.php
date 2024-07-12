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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         '@Ac.p1XfUmJYXu*Q0{4]^oX];+{@-XV3$7`H3<.-f_pddH1:x` 06;WY44<D.f7&' );
define( 'SECURE_AUTH_KEY',  '@3-XtfpzDJb>T&Sa]XN|7~)9RF2WZ(oj~P>*FR~?].]muROy1QmBCV6*P1H#k Vb' );
define( 'LOGGED_IN_KEY',    'wfO!N1tqbN~S:uNfs}+U{x?xlmV>4(#2}FKAQsQ|0}8Cx{BLE5C`My:dFL2@#)f(' );
define( 'NONCE_KEY',        '^Tw4YlMgy9rb2aNN3.:(&Fe(f4xNL|ep$y2sMc)iZ^XpU)2E%>|__aIp%*| g{RW' );
define( 'AUTH_SALT',        's$zIiS3t@_Ax+{j0k R@/>`LR{F!Wbwt -?sVw:Zvm~{4!JbCPb+5TY{KQYbUG_z' );
define( 'SECURE_AUTH_SALT', '0[`>`kuyO_woyaqNw)8cF$N&.E;UB?,}p.X3O#mO3?G{s4T:*n30Y@;0@M%PRyuq' );
define( 'LOGGED_IN_SALT',   '9-m3hL{U }{BQ,MMn+w|Qx5_CHQ.v$z^b4@$J+p7}GT)Mhq!+{-j{?KHXwT3`/vW' );
define( 'NONCE_SALT',       '-p8<E)bUEa:0Qc.tQVGKJ+/z~?4vEuzqM`;XPYB)OCI2g?{9A}!Xw3tFLAZOlaWx' );

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
