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
define( 'DB_NAME', 'wp_tuder' );

/** MySQL database username */
define( 'DB_USER', 'wpryuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wppassword' );

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
define( 'AUTH_KEY',         'yY;}k*yEnz0}*;;[{Of4jZ=E>Vq+Ja%fgzwYzcJT8L~~n|5I:cy|<:I^])nLk5oO' );
define( 'SECURE_AUTH_KEY',  'i5_%U,j]f]V{wFJ[V:GlSrV[$takGcyEHw[AoInJ`K3^[6^o8h}g` 1{kiU7Ag5M' );
define( 'LOGGED_IN_KEY',    '7}f l`H[qxXa mv<,T#`J$7<q(W{+4jRK<.Vwj;c.u9Lsq{U7%ECe_CyC~Yshp&=' );
define( 'NONCE_KEY',        '(;Ar1(kb/sCnrra2<#XAU:G&TFaje340]CYa2gOUbO{6}9V/`wDlOFE}(il1]9WN' );
define( 'AUTH_SALT',        '@0ODNojT7M%M#*z*RG|SUH?SM6^+?@RK@S|J?@bN-IH@=ehu}GWvpi/m%P=u7e#w' );
define( 'SECURE_AUTH_SALT', '8*-Ru}|*h`tm/|V${Z~=j!)VU$5<e/gcH1LmcEa@we$p?O`Jh+C0ald]F|=r.#o/' );
define( 'LOGGED_IN_SALT',   'l|Z8 dho.!j]p) L,@@AS;p=BF-(F>wyJ.$%f&R-Hhe+^#ewTWm~TA3#6}mL{,<H' );
define( 'NONCE_SALT',       'wPcCmMU:tL6n@P%mz#bJqo7O<94UbXP1?$Hq[()_81R<[ujlfAqr3m8xFMLlPS^H' );

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
