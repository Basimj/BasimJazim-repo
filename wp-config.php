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
define( 'AUTH_KEY',         '3:Hc?:nB.w(nj(APv*)C4DKS[|^0N(KxyVIn|NaL$qo-g%DIb%m<=7F(*pZ08*D?' );
define( 'SECURE_AUTH_KEY',  '%qcLgJy2@hipf1G`t?*kf=n:d)#.{ oWV_nDaxW($)b0W;;Qi<vEj;5WYvzr&haJ' );
define( 'LOGGED_IN_KEY',    '5EAZBWtpL$Es[YU^dmimc*h1h^sJ+`~B DKj^>xMc95>Eoy4RbyD8K05[kNK=<w;' );
define( 'NONCE_KEY',        'bMtLlu<<NG{H-NOxO#-C#[;m#v>#2:iz|-@(t#S0r_|GBdvOB4jy8W3`j@Xp,G.)' );
define( 'AUTH_SALT',        'OhY>8eRiTOd!xg~tPbc8(l1#4lP|YrLS5S,525qU,-CZU-i-JZhN{!@<a)^4[!WJ' );
define( 'SECURE_AUTH_SALT', 'q-uR?(W/xuUk))h:X^1fKl^m:6z7~_UaMd9c!| ##<FpUIT_nWS-9gmo{BUiRq::' );
define( 'LOGGED_IN_SALT',   '~tOaO+vm][GaxeTN+tp^mNLr~*><X68e!3!r*gC =J6F;8_jyLOuw*a)~lH{%My&' );
define( 'NONCE_SALT',       '2J_UX+&?6bNN3~=j,zW7Q~hq<#h1<>tCkADSasux.n<R1rRBSE9tp,Raz8u$_ptU' );

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
