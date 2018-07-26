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
define('DB_NAME', 'wordpress01');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'HL/S^,6T;K`*jkWjo|~aPe05=IBDG$k Y3d-|*,BNUX|uF(h HK~U>18A:n=c1:t');
define('SECURE_AUTH_KEY',  'MfMM(36Sl?*bvX$hEU,j}nky:,L g0<:j07^KN34H-a MS}8O(L^aLchw)YP?;Y4');
define('LOGGED_IN_KEY',    'Nw~d}%-+O4dn }P1:CupSF)EJ&QaWjP-SJj:OR@sUr7a~<|| .{}~%iD=wMe Nd!');
define('NONCE_KEY',        '?OaUL3[7)*D^mtMkyb0mSVO*/p[e,SD6$#FGjgE4@RHT~pbfB_^wQx[i}cH`mxEZ');
define('AUTH_SALT',        '-qKq*PnnDQ*S?dLv[4L{9%=B~._2oYNgEbM)_mOiify[7!V4v=wk*)JzA&54-wr4');
define('SECURE_AUTH_SALT', '_9Q7|*D-@i ,,Vw2^EQ$=,Bjp>Ot1|;:B~Z@amiSM<__=f|%m8WF2XjM}PLc:UJn');
define('LOGGED_IN_SALT',   '-<l /;;k+<k{OR(qW;mA-1lVT}V2hxL22@%[H/xpUO?n @`Lrrijj)y2F#HeTy)n');
define('NONCE_SALT',       ')|oo,.3*FASE&}w+> 0HRT-K$vP9DBs|tK97y+mIF+|VFt|5@+^|N_fw?.F .*3g');

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
