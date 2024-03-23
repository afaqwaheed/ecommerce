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
define( 'AUTH_KEY',          '0<j%K[VYG_-Od;~TJKa^!F:j:Ap,t{e7PtPk!q`i-s5,Oh<cMTbh*Q@:onDljP1+' );
define( 'SECURE_AUTH_KEY',   ' Q@%8IA7|D&kBi_2mi#H<kz?ZrfrDx{_eozs2`SDERE/o}JWz(q[aM28QU=w7zN-' );
define( 'LOGGED_IN_KEY',     ':A[to] 6(PY+mR%|Uf#6$[ bE&J9Cm>Zs{Sm3!z o:Z3/b~S`464iU=Y|Pm-hZcC' );
define( 'NONCE_KEY',         '@im=p~H;@^>`Pjgf< K(m[6u^-vw2RmMG5!E@S)va`4WR5Rjq7#hN,34c#JL{7$-' );
define( 'AUTH_SALT',         ';&,:SqxBxf%hiHOx6rSe%]0zv{Y$O}yEj{ACaYC#*6Cp&8v>j[&dkiCmPo[CY1O9' );
define( 'SECURE_AUTH_SALT',  ')^a&:Wv5@4UQK3m7]ttjhAP3nLuS%DTTnxr>Mz![c7Bv`%IYL4bujSy]k}I1j34.' );
define( 'LOGGED_IN_SALT',    'dTt.)H6iIjfro%fE5;SN#$tO&!bYo:3>E.&t3K6fh^za~^J<z$6I@Zl=M 5Tm0ab' );
define( 'NONCE_SALT',        'c4D~H!RNWE*}R`p#473~6mBkO]zl43EV2=No5BVw|,nBP(3WnEZ8CpQq:Yy=h1[f' );
define( 'WP_CACHE_KEY_SALT', 'HuNi-T~l=YoFvTqX}nkOBtl(w3YvK]S`t.$L+,c| Qm217*?6NN<Kh_}j~$u@K.3' );


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
