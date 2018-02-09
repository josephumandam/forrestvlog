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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'usbw');

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
define('AUTH_KEY',         '#nI:fNSvOS1`B-&w`j:NVr://xF[V+]0/B]Sxf.~X7gmkAzM^:gL&q/# g*2tR6@');
define('SECURE_AUTH_KEY',  '6:8%}p81.T?+tXMwYBp{q5#<g))F|lmb<UdS;}P59l&B V(bo]71.9Gs_lUmxrZs');
define('LOGGED_IN_KEY',    'Kjn-(%(r.Z+KX_(2F-Ccy*|q$.#3W,t)tB;5k`[WZqZh33LF6HbT)u1N}vFOe4{H');
define('NONCE_KEY',        'wj+jwIOWW,D3uh:WL<J<,q:R|}-U8v8F=nHLly,2%[57S!xDvx9,C5knt_FMR!5:');
define('AUTH_SALT',        'U5`bBKXC<h_^JQr! ]ohAA$!i8<QdB%:5U^3MVh@l:&i6I@lQV?j4swlqcU0&|w]');
define('SECURE_AUTH_SALT', 'PD=K/_3ybCP1=FPCGg!tde!X,yL7]t%3[99aOHB~z]7Uh_o5UI[v)p77aq6.SCF@');
define('LOGGED_IN_SALT',   '!9e9QKk1E;;dh!!G{kMn6`kH],!MzI wCuR`^)+.m[)na,%/dt44hWzkb`_=a3F}');
define('NONCE_SALT',       'S+?FOZtI$g[C3$^[ZPxoR}3@u#FkjyD[74OLueBL.)t*>p2o>66wNk6 .Spn,`<i');

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
