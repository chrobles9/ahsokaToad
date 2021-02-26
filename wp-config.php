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
define( 'DB_NAME', 'ahsokaToad' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Robles919' );

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
define( 'AUTH_KEY',         'r<>#Np!]hMslZuxl{&~*,[N~4{vJ|x1`1G?$T0(%,m0_&i_$hm8oCj$*z<{=:*u}' );
define( 'SECURE_AUTH_KEY',  'U_$tswj3ln^O$D*]{5fUA5/fMj^g$22Em*9z0DE|r xDq~aoPt[~^$76)t+7ymXm' );
define( 'LOGGED_IN_KEY',    'u_H3EBdH>r0Oj{9.~FVrsS.p_wxS^/$NX~_t6(!<(&$Ym=|t<|, z*[Kx|~`g5$0' );
define( 'NONCE_KEY',        '*#OqO>OB-t5G0FKN}54TkM2RaIsFtd,W9FeSu6QFKW<n.%,-l2WeC3m6:yYNknQ[' );
define( 'AUTH_SALT',        '7~j-7c)u(T2w5R}9rnO*O0+D7YRGMIQp6b_rThpbSz+sLF+k~8d)jc<;jqQ4`&zo' );
define( 'SECURE_AUTH_SALT', '48|s>juw=qj,q>y$*~yHGpm6Z+.&j(@W!R&%k2-Yqn#LrPv,#BYh:CWZfZs_I<YC' );
define( 'LOGGED_IN_SALT',   'uUiV|gKZ,3tA2-2y[JK68;!Heu_uxUeulAr(m}S^Gr@mxoj?gEKDR!9%5X|i/?c.' );
define( 'NONCE_SALT',       'b#aKR|HMpS%VY^_e@u}CB3YXk1QmzeNZ%bOFQ2(h}D=6UUyLbM+/ym_2LJ&tet|x' );

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
