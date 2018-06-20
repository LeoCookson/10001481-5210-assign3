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
define('DB_NAME', 'db5210');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123');

/** MySQL hostname */
define('DB_HOST', 'wp_mysql_5210');

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
define('AUTH_KEY',         'mbTyr3dYBxV5s Af^nN!n_gMc+RnG*:1Akia&,FBOQ9z|1dt^jI8}RT|[m<bnj~V');
define('SECURE_AUTH_KEY',  '9(=PkbT%@oS#SEaD~P20]}w0;~?hF+4dVff5lDjcms|Vfd#:/>Ig8Ff(^;lr) =@');
define('LOGGED_IN_KEY',    '-[iW%O]{_%Gy-*!h,;GM#ekp:Mfj+}@|?AoN6|abDT2_l|aEx>3ufI?U6qkdxPZ4');
define('NONCE_KEY',        'Po zI8y7*TNEQ.@Zk</)v9rM^YBKK$k`;t<<J@_z0fN$Cczk!|3S=xPY AwTMhlR');
define('AUTH_SALT',        '8*s`:>8#ar>BARdT8q=vZA0$&:Is<}Fa6wwoB/r`$ 4+$1MAvL^X*q:sveb}fd$W');
define('SECURE_AUTH_SALT', 'B,V$gWwEIfOnc{9c?@GmJNmop--LPu#;pLYNH!(o0@*/Ew2{e?_i?={PS:Q@el-t');
define('LOGGED_IN_SALT',   '+V*=!6T)EL*t<.R$H^3`x0BKkcp*Mj(ql30,Be Q-%?^)Oq_=P51o~oYe&nF-ayN');
define('NONCE_SALT',       '].T81%&XL^evZ<Sl&ZiF4*U.A@4&2sF3WUw1rY!}kT}0z9r&bU`zr-r<I[i2,KjL');

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
