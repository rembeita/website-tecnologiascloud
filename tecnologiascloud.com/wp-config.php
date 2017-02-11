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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'Panas0nic');

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
define('AUTH_KEY',         'd1{/V_RU%VIO&;^.EEgBVG5|7e!,+%41US[2j;ifED#+3ZtzI4Z.^g$evxU<mj[1');
define('SECURE_AUTH_KEY',  ',*cd k4h)[NcW72VI~zMWg+/9uU>@Ib>X6J>~n9<V=0361r Y:4WPZ#ZM|<(:XH;');
define('LOGGED_IN_KEY',    'h6]NT>Z_&?:D@:Z`Ove}Rpdb^{}}~<!3Y3oT}i=oe-q]702m_exy`vo$zcppB9$|');
define('NONCE_KEY',        '-y~xe[WBN?8/FI5d{oluA0#61Xj2qC%].ONFSFnUtZz6kB^|o1}y&r9EvjX9+(k(');
define('AUTH_SALT',        '1&KA4?3mHNo =N ZlWHQXoDv]g[Ao~4niVs8nQHE7TgRyR@AR$ ;2ysX%/9iV.9?');
define('SECURE_AUTH_SALT', 'Q/tlgSEbj:>hO9u@[Pw3;4@|RNV0Htz8sG,zVWbk[0:u#EVO#:1j/9 F)-Feu5Pf');
define('LOGGED_IN_SALT',   '/r`-#:]AP@C/,He(GG`e+5#3b>ths-N4?Z+g.sy!Cf]mAt4G*Z]|oI9`8uH:/aq4');
define('NONCE_SALT',       'ow),I)22m+@dV9OoQkqu>F@]-4_AgOQs|97f|`S1{Cg<Fi<o7vCW-uEPF(6O~L^9');

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
