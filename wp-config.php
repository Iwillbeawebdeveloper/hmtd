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
define('DB_NAME', 'hmtd');

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
define('AUTH_KEY',         '%Z6y-vG<p*Y/]:V50DN 1{`H`jwe]]?uQf.duS+s0bwd@GTO)*48n``n=oGG{(?A');
define('SECURE_AUTH_KEY',  ']q&R<g5&b(BEO6e7]Lr`20F@ c.@uL/2QiwL(Lf~{v#2^a,R~G;nv9Vw)@U`4.[s');
define('LOGGED_IN_KEY',    '<m#@>jk/.4pyc_Nccqi2xdXwrHl:`)#ZmA&tg{+6l$?d<J-lw)Nn}-7@i[[5-(x4');
define('NONCE_KEY',        'LY]_FEgh>r)@&_b%e2pRX}U7Av{[&Hr1d,S.LrvRUiS)D-v+Pl%Gv#(Z,;}=q@ZY');
define('AUTH_SALT',        'Aw.iJ_M[M^t:RF0dve`sG%krRI<Js?O0fkIqS{-RDPevX?bt(Y,@|uf1b~hOw|v5');
define('SECURE_AUTH_SALT', 'E~DbKV.Cuf5_#Aw0A6G(Q-I1 }p5PfPpl*Yl;Qj$u7@W,gC{I *aGU&zvR[Rc|}^');
define('LOGGED_IN_SALT',   '8#-1S)K[6|-A$Z{Mj2Toi,AucN-,D^jr.~ZTqCVBs6uk}IQ%O9>pt~Oq_&1_Uw;y');
define('NONCE_SALT',       'W(vuQj)TJ;#KV%/vK#Ra~%_^s^l6_vszzslia[^vBeD{k$9*ogRA%O1S+w)gRu+!');

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
