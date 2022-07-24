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
define('DB_NAME', 'golfshop321');

/** MySQL database username */
define('DB_USER', 'golfshop321');

/** MySQL database password */
define('DB_PASSWORD', 'R!;8t_dyCt0(');

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
define('AUTH_KEY',         ']Fhi$ONsTX#rWd)kG]8<oC|r(+YN8Au1LUSWpeUsT]/PiAN$qh(+a3l8TpVSk:8x');
define('SECURE_AUTH_KEY',  '4$-JWxt1(4CO~lq..cS*%7P^>u &?3nx_i)f]$Jm(m=U(`W U! h5HUZlep+frn{');
define('LOGGED_IN_KEY',    '=|n0:9qJ|PHyeC)a=!mOHHurEB [KT+0/U-|a5OX=*qJ)rJvrX]wEMgc5;_>&/%F');
define('NONCE_KEY',        '_<NOqHg2p?4<tP&[15% yB8o]T6cI T;*M=0d0)JJHov.|VPnhh,61E3SG`{9!SR');
define('AUTH_SALT',        'a7OzoGek>5&e)y#& e1`U`J-9)/q6a(XE c$=?m8EXL,#%=7J;HlCxzLKWeZ(RY_');
define('SECURE_AUTH_SALT', 'FpgXe|X`v7].n&[DAhE4l-hq$]:_9);L$V2%}]KNo|E3mtu8C=KC#%tZwko4&xec');
define('LOGGED_IN_SALT',   'ADGf 9va}qaQ3PY%+au@7ScHaW:&Uphz%>4|r|RQf0Q7W5p1,(D|qmAssP,V|led');
define('NONCE_SALT',       '0<iv5-QTWxq4d@$NkOugutF^W:3hN,bo)EW{&UwLN%TQ-AiBKlLd8{Tj34PPS%dn');

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
