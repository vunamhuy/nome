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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/everon2nv/public_html/demo/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'everon2n_demo');

/** MySQL database username */
define('DB_USER', 'everon2n_demo');

/** MySQL database password */
define('DB_PASSWORD', '12101989');

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
define('AUTH_KEY',         'JiF_5JZv:q;ze5yqwAry)5_U:|mI%_1KvU|WGx8R8i3OGS48xRT={`MJ^mUnA<ra');
define('SECURE_AUTH_KEY',  '8:u`PS!sc:Ne9Hf-&i+g3xei&3?,q#^v:<}bO;[PvSE7Q,U@& yqQl[/|<wz@7[t');
define('LOGGED_IN_KEY',    'HKZ#YH;)XK)PAs_|ad5t2{bD`0n0&6- 4j2S(Pq 3T%E50T[Ktm>VB#E2V{b|fw)');
define('NONCE_KEY',        'Xpx/.5qW5B*XycYQ=s>L.~jqjO71VB@jtQK2L*c(8~~HSbpW yW~p~C[D@y-1NtU');
define('AUTH_SALT',        '@EnY(nK+;/xStP+ ZArtH7RnTM`a#f;ORm2K![4+{EVrO1J|%r~a0e7q=KPraGJ-');
define('SECURE_AUTH_SALT', '_3mvI&!*Fh_F0Ih]%RJIPVLC)-ZjLiP|C>||tPZ#:VZY:a6Uta!n&ff{x G)w7`P');
define('LOGGED_IN_SALT',   '_hl|[lw9p*Vb[vo_q1{baS?z0GKtDi+R_V<lZoxq#D?oa~<5EEZuK<b]6~.$=cxa');
define('NONCE_SALT',       'wb#=(0GRG`hd.b3F#{~[L!LBkf957}|,*:y?j`nn%guRO3AN[S`H7@c4&Tu`ts,c');

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
