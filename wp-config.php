<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'soufiladelfia');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'Pl-p^m9zjjoXy2(/J$i9PwTtP3DFn9{-&DK?1k_i-|z$z`bL<`c,bs-{|81}lsZ.');
define('SECURE_AUTH_KEY',  'C/`!:uuZYZ]iX|1rWi.S@3}uw4Rvh{B7i#ILzcp7V|ovIKn1#{mN2dx>B-$4vl_{');
define('LOGGED_IN_KEY',    '64~>{b`kjsoy zL}tpKY+/-H}J6)oo`pu[q|E|]Ru#&>6Db~jol+t{^]cLbq:s4A');
define('NONCE_KEY',        'f.9T$+GY//a$@?{8j*{hSSZ6GPWk1ZRWBHv+E~S5Ti<43`SPsu|Hpzo>9*-+}N7d');
define('AUTH_SALT',        'G}[DXM)e+||Bjw0w8P: L XrA>)$M+|I)|caS)FkBW4GS;AIu}nTmi$[/a}n%6;S');
define('SECURE_AUTH_SALT', 'd6cN~6GW2LXFGNOT0F54D^Gx0pt<]RpJ e4Y.JyD$q|/]R[/0d$v$Zry*ov56R_&');
define('LOGGED_IN_SALT',   'PzuIW5Y.=B|4jfSeT4:Gmfc}D.<BbJQ0x+ ~AB~Xe*A/<=yv }(vjIRKHGWcAion');
define('NONCE_SALT',       'NDTCuD>ydE6.m(h.s$I<`p}^Y_5j`YWWN^*3X4c/>T@U4[a2;a@#Lh*$r%RulT#w');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
