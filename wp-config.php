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
define( 'DB_NAME', 'plugin_db' );

/** MySQL database username */
define( 'DB_USER', 'plugin_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'BSAFVrGOkCyoSJNgxEnZ' );

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
define( 'AUTH_KEY',         'NUQ>7s2 &+( L2I95D:jw*2cScT(iR@J; 4N+w5#KL-_-5?0UN>n3&.q*C>K|]1A' );
define( 'SECURE_AUTH_KEY',  '4=YJZ9l^s?H Qc_(lHpe$_/cZ~CzGx;>$^xiD4Bwfu9$1GULxqf)R@0,~G=%?Sh/' );
define( 'LOGGED_IN_KEY',    'pX,8C[pHP8;crZjm)}[)b/?6}-zHU$,?xdbD`a#+ry;L7*{^#:@i!@qe<i_?*g*t' );
define( 'NONCE_KEY',        '~~Lr`S%/%]Y& l#;y(J|$HGwzJ4]q8WM9&K<Gky d@sg:eVYkyn1L&7MxQ,1*AO|' );
define( 'AUTH_SALT',        'NA+Tg k;3a(0X^oRVFr]4dVW,k$)UP@TYq1sRjVy2r6tS,l*wI6.~(VXf!mE/6sU' );
define( 'SECURE_AUTH_SALT', 'K1wFvvW}DJEV5dZ>,X<[e7S#F=;&uIjcx?A9FFtj&CuA[>)L9Y|g@]@&Oj(Z-It`' );
define( 'LOGGED_IN_SALT',   'M;+On4#I) >V(1f+|<cuNpO~JM9=T*yB-!4w:,x>-6VZ#e#X u6H`-)J[L,Qzh/y' );
define( 'NONCE_SALT',       '38Hp<RG3:_7G`YO+mqPW?(Ts` H!3*<AwDBl/^7rv5]x/4@;;/*Ps>RZ.1XT()yS' );

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
define( 'WP_DEBUG', true );
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
