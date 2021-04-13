<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'nHO!j>v0/WQT;WwTdKpA5k7fmFJ,;E_#Ru|AHgBUz*aHfE?G(Oa)H]/@SH&TaKh,' );
define( 'SECURE_AUTH_KEY',  '~eYO8GG@2RAmu-#<Z}+WipQOVU^qE~Z*R+K$6mz9(UX}vjaFxbQababWWx!-3GBB' );
define( 'LOGGED_IN_KEY',    '0^7nQdj5:|krR*z]QN.F0]`GRg-X+e^KN/$s[W,u$>P/8vtYwRLQFx#U |lM:hLO' );
define( 'NONCE_KEY',        'xYT%T$<%{7z(*i]/Lii7%t,^$dXdGV,k[i <0.Q>U4:/V%4Wk@><jkX/R;;X];4j' );
define( 'AUTH_SALT',        'E,u6nCMS)Ei)_Rp}tvd[[(,Li5XeEb#x~cl/Ik4p]:kQ/~b U2RP@8ZDi,L.8M-D' );
define( 'SECURE_AUTH_SALT', 'c60&B*z24&w&l6eOgIz]Zz.{>e/qaQfidfyz-/s-.~*)w*.n8!j<*s^Mv$:4B8}x' );
define( 'LOGGED_IN_SALT',   '](HbDxmDq]h>,S28@}q:gd?:5VR41-(HTrO,LF5>nn<h.C;~AB+}r8Z`uZ!0hWRz' );
define( 'NONCE_SALT',       'kN2!pk$d}fm]3SdK7i$7yAq@YI1WcRQHuL.Gsg~pexfd2)7ZUOS&6.F@Of#LUZn;' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
