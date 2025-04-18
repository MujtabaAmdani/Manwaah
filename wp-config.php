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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'manwaah' );

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
define( 'AUTH_KEY',         '?;e_RH]q^E6VYRY;M-a@sV^S_t[XI?f{~Y7_u0=;pYh#Iq4P.N;880[>tm*x5e!!' );
define( 'SECURE_AUTH_KEY',  '=+8;4qV;ddz=3ZUo<v9[*_BUMU}=zx99|DB(caMP8ChW164w/IrW?k[>>nBN:Y`u' );
define( 'LOGGED_IN_KEY',    'B>Q[4w!K#/:`imDNL9VL?A`qKI]7TQ&5sS2Vsez7B 1tAu3++L;ewQW@2Xc|]?ro' );
define( 'NONCE_KEY',        ']fAM]ulpj9K3&j?~|:98fJ_ h+I&QSxE@V59mY@;t}I9;xugVRql+&@f^j+e.5;)' );
define( 'AUTH_SALT',        '[x.#&OPz:ej9JOyoEVO.h#eU?TD qg{YkGR<O`77[+1LOf8]RI*Y0p1Gy]~W~L|*' );
define( 'SECURE_AUTH_SALT', 'N#80!q7lz8()Pa>{pEEGS3~*e?(>(rk=kkYnA1,tluT<+yPiqg_;CO3C#YT}nv<q' );
define( 'LOGGED_IN_SALT',   'r@mjZcxo)c30,;Ovwh;Q/]gi4GCbScyBAt-LiLEt82h5q3ZqT1dPm{e43;N&t0nq' );
define( 'NONCE_SALT',       'c^qefm%j1G$DW)Xfe@cj<Gn?y%)!==LBPN?tXxQM3p%kftg:Pla)-Y<Zu[9EW10z' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
