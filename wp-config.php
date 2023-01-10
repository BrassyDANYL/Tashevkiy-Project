<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'tashevsk_wp_4xgvg' );

/** Database username */
define( 'DB_USER', 'tashevsk_root' );

/** Database password */
define( 'DB_PASSWORD', '1Ji&aozG3lblEb3k' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 'Pt5#+L6)@98~Q(nYP75(zD(59eAY5y2igVKL&_XMTf!982Q~67:hy@hnk_|E8L5C');
define('SECURE_AUTH_KEY', 'Sy)5S4]2qV1r027pwY]3_8|qg95%_7]5h[9YQ#i64;ZA(P5wKxH4e-+39/L]e1r2');
define('LOGGED_IN_KEY', '-*qVO%)_5Nk6h@/21Mnm)NV+E~A:9SE@#~v]%d3-s1T&h2bp93Y-P~vm5b|4Z3aN');
define('NONCE_KEY', 'g(a6~s_6@JN90D[Bj#3WY7;#y+N/D+j8ZM6I7lEC7U60l+mPm_5&63)y-(@E7H)g');
define('AUTH_SALT', '-qGiR]:88hjT0-1E_N(5F-]#|30~]0Vg@8:+3@_1GU3A5b9/uq*d|[@!wn&k&QUo');
define('SECURE_AUTH_SALT', 's_e5Ohr4sY(@3|bj|/h9H&Eigk&V32!kF[OGc7Xyz&Op#z|:Rw@4*T7_;:Rrj51~');
define('LOGGED_IN_SALT', '2Utyqfu~;WChqaiy-(1v7kl2Sd*38p#XZl)Gz5;@jk+8R606c++yMzu!)7+U~m]%');
define('NONCE_SALT', '_Jx827-+GAG/Jtf|k!7#p0|2UNpYgl3&@Y/6qatn|2qC6o0&-(Gw4_@*)WWW2v_:');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'au3TVz_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
