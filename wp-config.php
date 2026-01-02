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
define( 'AUTH_KEY',          'J~O!/Mcr-|r}##;ETtW/(Cg9Vl8L>p/Jc&wW2X+}$F,X?-5F|Y9C)$]6xA ne2%@' );
define( 'SECURE_AUTH_KEY',   'Zg/D0r5$iK7}lN3HY!rlIQ$:K*#8}18$`j1|{rcbbB3u4cSJ~M6:/(ESR|J~>~/T' );
define( 'LOGGED_IN_KEY',     'FdTm]V*wXu|m)NZ0u~sqXypPVkJ++Gwpfsxza7vv(Hj0z@]gaD65 z,VxN*EsR6Y' );
define( 'NONCE_KEY',         '{}qy[dHZyj/^v=t<F+{<H0n~K+~hn7Qt&tUJ]Red(+{F6<:F)d;$|EF$n{-lI~Ha' );
define( 'AUTH_SALT',         'vT>3J~FSCWO_0MY;l5~zxXo[.+RO.mi)`UX:I{zdkO!4DUR85yyox0{kfr/xXN#f' );
define( 'SECURE_AUTH_SALT',  'f}gqF??!)ZxaXz;U:,p*ct)El/}8Kg]+;[JY^gNgiOnK-EG84um^vu7Fb!}Rsz{&' );
define( 'LOGGED_IN_SALT',    'u@Rn>DgtT=LXeqdf@*ep.s-j`jx~0XjsyI>a]I.MIq2)p&/UctS`,jEb4/y>EE;0' );
define( 'NONCE_SALT',        '3Ucc;/j.U0cQt<^xNL!$_}KHYt5ZKDw9syj&[I/3eO^xi9~pAAHw?e=Y28O)g*L8' );
define( 'WP_CACHE_KEY_SALT', 'cedP!+BgiEi[u)Ej_M@,,X@{)m@pDOo#g<xO5k].IO@Y<(2vk@S0%|<~`T)h~>OP' );


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
