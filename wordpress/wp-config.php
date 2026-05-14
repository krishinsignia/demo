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
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         'Btr`aB_U(1&;,M&lOu<]f7fr=#W+|569?H-GLxVL#:;hzS@E6DaLv_rd=!3SAi7:' );
define( 'SECURE_AUTH_KEY',  'o(FZ-sWpA?qkcDgi^HzAj>MQ4b#{dw;`D %<z@bi}[8YHkqq5*n}zu0|{D2_Q=pI' );
define( 'LOGGED_IN_KEY',    '?-<7*x|ZKr|X:eAYJ>5}elbW|t^O[[l&mct-:|ttSN96<)F_9A%QXFgh2k 9Fb. ' );
define( 'NONCE_KEY',        'Op+p~}Lpy6GCh7eEPNVr0@ShzGOf_~6G8w04b%YL#oW@En<VS+oCTG`.yRQ`~#iP' );
define( 'AUTH_SALT',        'E78%tR(0~S`Y*W&(Q6xd#~t/>AGnjewu0r2myY<]k@GMQrTlV5jLYdj3jkockx<r' );
define( 'SECURE_AUTH_SALT', '^u/&@N_-lv(KxbrqNaf(Lj9}7JxN_jndfB(B-B=XghDtp^s[aHPOO;)&&Rlp_^BD' );
define( 'LOGGED_IN_SALT',   'fIhH4SfVUkn=D _[t)nf=;*tE:U:oG;zVrPEEzusd{L$9VK<9f:4`vSl1#XVrm>Q' );
define( 'NONCE_SALT',       'x97Kj{zZz[vu.,wF_B]WXaCwXhbqnKk2g{d>9{f<!|ppP^h!?}Wo?`C-%;K-d*s5' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
