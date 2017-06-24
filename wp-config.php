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
define('DB_NAME', '3TElectronics');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '14GUY:XfmnyMAdRpl!@ ot 6ul<Mz.)>|XYNBs-4W$E<YT%!SM%FcLsp%ty;,2[-');
define('SECURE_AUTH_KEY',  'ws#7t)^LSuwungLlDjKNeP~$13EqNisM#y[L*`@[ci;|@G@5?k%c)))Yq$xY7GcN');
define('LOGGED_IN_KEY',    'F+cuyXBw/k:R`!](WsM ca&M@HTbBRt`9qA)j&<?_d<o0[|E2X`76&C?,ur]1lB8');
define('NONCE_KEY',        'di%La<NBNG(;xGP ne2oY}/mr!jMewC[+cv(3)[ B;T[5c4:a?~K~FD_^danj%;d');
define('AUTH_SALT',        '=t*rgE|wJ!&*g?&7swr<Z$y*I&<?zBta8^jS6=^1sxW~=hFU8?K%JAquGfSvyO#K');
define('SECURE_AUTH_SALT', 'TH=cPwr/-VaihEmVBe;~Gpj.}dh! dcg_~:shtak154Nhd4zy.?@?jYT-yLkSUhy');
define('LOGGED_IN_SALT',   'g#hiRt&hY~[_C6iJrvkFkT59+*:#F^P+>Knt6@iwQkMd5^|s)Iw=i88o;BlKKPM1');
define('NONCE_SALT',       '*V%:d+~t<39,{95O3aMnbQYx>CRB>-CKk$o(&<doHcYqCujLP=otKl6jzWkieS1M');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
