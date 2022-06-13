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
define( 'DB_NAME', 'suzuki' );

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
define( 'AUTH_KEY',         'to5e lmChPVK5S6O,g>>N1m 80u[>HYI!10lcp<$47o5|0-W(04v !T<k{.4Kevr' );
define( 'SECURE_AUTH_KEY',  'MI(T/tA10%~&S4o =qwRIsB%@ta)xEnW]lFC~yA(OX7mDQ`6P^kx0;MtFA~%f4<&' );
define( 'LOGGED_IN_KEY',    '5lsPy*%c/jmIER,f*VS;[CUI%DX_RV)]T>Z=|RG{5`Tj#nl{s1#4#|AD?@ M_$6%' );
define( 'NONCE_KEY',        'Xd`2kF3m$*23UFv*$O!fnLOc:7sYTEv[YAoR /6O|D4V+F^y^MXw-u5Y[?3k2+p7' );
define( 'AUTH_SALT',        'bdIimy*L|7[u;JODLWIyPNV5FEuK(,+k3^y?1{`9al}T#u7]O<R5M#|rsh@!LKp1' );
define( 'SECURE_AUTH_SALT', 'j?fn+ts+f6(V!U*6#scoi&&`!7WCoy@^io`(apDr}z1>s:cG:7sm0YL1mlC+[vN1' );
define( 'LOGGED_IN_SALT',   'vxM +g|1ZDZ]gGr9p}KX:N.y9+ua]9m;@&xQ3>SYW1h{.SkOd>pEK`Fg%;n+=OSF' );
define( 'NONCE_SALT',       '6[%iyoslqFd.u$t6ok{0Hlu*D{,>Uv1(%fIZ:Q{#hM/+*vNnQI*jC>MD!Y(|&NoQ' );

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
