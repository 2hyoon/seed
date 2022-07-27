<?php

// Load Composer’s autoloader
// require_once ( dirname(__DIR__) . '/vendor/autoload.php');

// Move the location of the content dir
// define('WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content');

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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'database' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );






// Set the WP_CONTENT_URL to the non "wp/" folder
// This points us back to the absolute URL withou the extra "wp"
// This fixes plugins like ACF that need to get assets from their plugin dir within wp-content
// $s = empty($_SERVER["HTTPS"]) ? '' : ($_SERVER["HTTPS"] == "on") ? "s" : "";
// $sp = strtolower($_SERVER["SERVER_PROTOCOL"]);
// $protocol = substr($sp, 0, strpos($sp, "/")) . $s;
// $port = ($_SERVER["SERVER_PORT"] == "80") ? "" : (":".$_SERVER["SERVER_PORT"]);
// define('WP_CONTENT_URL', $protocol."://".$_SERVER['SERVER_NAME'].$port.'/wp-content');


// define('WP_HOME', 'http://seed.lndo.site');
// define('WP_SITEURL', 'http://seed.lndo.site/wp');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'fCKF:O.9iX1YS?+}7OlSXK*/2T_i*z8R5swY*^-R$(Pkjkq)fHYn-5E3Gq,:s+O_');
define('SECURE_AUTH_KEY',  'L1R*x,A~Y*?_*Z<!.e.dhq^8v,+.k?YqD5Onc(om.w&$*HXQPkR=?N`#H@-n4*-C');
define('LOGGED_IN_KEY',    '_C-Q(-(q@7IfjN4)*91L3(-=[W%n|y@J3`$j^tuVM-_7GS1aE+Lx_GPK3tDqad|S');
define('NONCE_KEY',        'Y]kOsO)B|5Y+I2r7_CY=KP(vjum/~/>`v^$+rh?<E&0VMw&MX$c9Ow5kW<A&0:0L');
define('AUTH_SALT',        '+6f.C<K+dY4h{nclZ?HWh]g#hS2rx39JU.I Q2SE!&9*P8@~My4ICBs?+51GUtrw');
define('SECURE_AUTH_SALT', 'XHZow6a{-MGpzr1V(6Jei:,F;LLK2J:(bGKx+E_2|dcZZd[1:Fw0;}_AZgkjmAM}');
define('LOGGED_IN_SALT',   'lS7++aX])UQjP,Ub`@hP-X+|T~0t*IzK X6V9x1+NQY3*!-+Z&-!S(BZS8*vFle{');
define('NONCE_SALT',       '?jC;i,`_tM-Li24@Fu&HU5MY2H1||IebXD>C+m;{,=-$$svbW U}>6AqFU_vx(W,');

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

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__DIR__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
