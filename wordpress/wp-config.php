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
define('DB_NAME', 'lsi');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         't{Dw8W*WqQse/!TWcb6ELRI oE8wxo .Tz,D:IsF9)*$(~(N7@L}4vNRh7B}M{B>');
define('SECURE_AUTH_KEY',  'h(]pl74c^JEvYi,%TETH?*`;?-@rknb%fSLZtb=O,{gJVm:(aO_<>64S;aLE@vyT');
define('LOGGED_IN_KEY',    'X p|d]c7F ^8[pbX/gt7-)|xwPJah8{nZv.}pYFW+h.FV-Hzj<n8Ho:4o^-|D7%9');
define('NONCE_KEY',        '][[m{0[!uKjdu{V=Pav&9y>&0}ZK_xZlHG*&3$Zc7w4>,JE.=:u?{n5REW@K}DML');
define('AUTH_SALT',        'N<$(zSc:DLfLazlNU.p(9gzyBqB|PkDQK{rzez-[C*o,R6oLYbR!L2p/r[Yk_n)j');
define('SECURE_AUTH_SALT', 'lScTT=;?XRl>P!NMI7pK5B5z;-Bh6o7C =_-:g#Qxt-rJ-+X1@k l^e1QgQybW/8');
define('LOGGED_IN_SALT',   ';^)Im[OR=`Im[?3ZrjtcSriK*40)7wZ%*KfCmc0dL4-ptCH$NE$cHrq)qqcXoWF8');
define('NONCE_SALT',       'x1nCpwy/|y^VQ[A-74f*6;I( Wwa)0EN?Q.~2(<7#G8is0rb2_70X|T=6ux}0Ok=');

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
