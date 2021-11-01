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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'newuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'p>@_Bbg)|M.Z.Y.g2>{idJ&YZufJs2~|&`aHDZ_1z#`:RRVdt/4g;K_Uv5y[r:)1' );
define( 'SECURE_AUTH_KEY',  'T0|UwSGI[iCKW|0tzv1</LW}P4QF+7CV2{oU+s[3zvXDo|6t+>K!nu>z|$>~9G7D' );
define( 'LOGGED_IN_KEY',    '}<u{D.D4xxO/5ivD@2]HP|;[zMHb5gNpdbLR%vtoUI:mv_7d 4M,2KWWaM[DYe=3' );
define( 'NONCE_KEY',        '>,H~)d+n|;UeB`@hZ%zgAOpqf=m1_^t=Q~<y=LViaL-~0hE9fXT7lTQ{y$JnY};N' );
define( 'AUTH_SALT',        'kSEbEUz?#]LDE$ Bji{X1/JwE$YpKR[L3GOMY@Bdv[&<Lm#t9b[2p?V{p^=b.VnI' );
define( 'SECURE_AUTH_SALT', 'Vx>VdLS]F]Ma n)7{(4Fd]Dfso6mro;%HzH]LYs|dSz@4i3V=h]Qs)]Sg`@dgMM{' );
define( 'LOGGED_IN_SALT',   'Pmtim3MK1~V.0<HYqf}dy]>[[~@T*m=zX>N&fS+jId!pc8P;FBCsf4tuBG|5A}TG' );
define( 'NONCE_SALT',       ':%tz8.~/X,pe,%RF?1RhTs^NpH.K+rwwj>+A4RN0d0e&@2)i&lubagaKzzDrg1Z5' );

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
