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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'theearlyDBwchnf');

/** MySQL database username */
define('DB_USER', 'theearlyDBwchnf');

/** MySQL database password */
define('DB_PASSWORD', 'K0KTt0QWz3');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-t5~P*l6#S#tDte]+L+i2.T.qA<b{yIj3.T6qA<bIFvc0@N@k4|V|sG:d:-K4kV|');
define('SECURE_AUTH_KEY',  'IrX,UEvbfM^n7>U,vFvc}@N@k4!V|sC>Z}zJ0g4!R8oC[ZGwK1hS~S9pZ#aGwd1h');
define('LOGGED_IN_KEY',    '~x5~Lx2a#T6i;aEIn7f{uEvb{yIzf3^Q^n7nU,rBrY}zJzg0!N!o8[R@KwZ|Kwd1h');
define('NONCE_KEY',        'GH]W_p5i;xDt9_T*i2e]tEqT*L+e{X.m3jT.Q7qX<XEyf^Q^n7>Y>vJ0g0@Q7nB,');
define('AUTH_SALT',        'Bg0gN!o8[V[wG0h1~O8o8|ZGwG1hO~O9pW#aHxe;eO~l5pW#tDte;+PO9pa]aH-h1');
define('SECURE_AUTH_SALT', 'p6_T.pD]a]xH2i2*TAqE<bIyIjQ.TAuX{bI$f3jQ,r7rY>zFzg0^N!n7>R@J}V|v');
define('LOGGED_IN_SALT',   '88!K-G[Z_O1h5~S9p9#W#xH;e;+L2l6_TDpD]aHxH2iP*PAqX{XIyf3fM^m7qX<uE');
define('NONCE_SALT',       'h#HH]W*H;e2*P6qA<XEuI;eL+L6mT.TAub{bI$I3jQ,rBrY>yFzf3^Q,nB>Y>vFvg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
