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
define( 'DB_NAME', 'gym_db' );

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
define( 'AUTH_KEY',         'kBm_B4qKezy>`.=:EP:jTjXfpD<E&m wJovL$(iiM cJ~U  S1.f4$x^X1,3n;tZ' );
define( 'SECURE_AUTH_KEY',  'Ph]Pq|uPr^C{`</k&wZzS/rnyo2*Oq0!/WvcnL*9CaJ&]GdD8 `R2-5,<@B,<Z5B' );
define( 'LOGGED_IN_KEY',    '&X8K;XU@)FL_BHfNul#wH}&F%nkb^=W~z!%}xb0+)wMyEq-(wDQ(GJR(2+-}/Qa<' );
define( 'NONCE_KEY',        'wDGwZ_!Vt$5?qAO*Bm]BwP{F:k7DkeEP@T}=M+:AfsL<kp:mLj~49=~GAOT*7esU' );
define( 'AUTH_SALT',        '=+^_SSKu3IR*o[l:6RnA#(V-WSTug0K1IZ}Cl)X:>ld7P33^s7<-1{sxqJ]X6uW{' );
define( 'SECURE_AUTH_SALT', '#~!![E`d7(DbvI.vdA&jYl9gUry70)|e{ v)%fD)t*WuIQs7LeQFGB.8W8 VInJy' );
define( 'LOGGED_IN_SALT',   'A4|CLTWB}SyeK)DSX$n=,Lu03_P#dKy7M8]_L(<kPbNomCZFWkTt>]hcj!AnbQo<' );
define( 'NONCE_SALT',       '+<{<**qq{3,$Q+ViWS=XUs&l9&,1^60yCAXEq6dJS do9}J_[hoa9}jW.TCH21uH' );

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
