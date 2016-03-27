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
define('DB_NAME', 'bootstrap2wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress_admin');

/** MySQL database password */
define('DB_PASSWORD', 'q1w2e3');

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
define('AUTH_KEY',         'pguz]Yzt;sE50qq?ZO2%B|@beHFUr5B:_Mu+?wdjh+2=o$pFJQzQjWkz2?:+pFZ}');
define('SECURE_AUTH_KEY',  '4{=F&(+{.Uf,<[d9,lOT-xK+G^$xocI;[e{|V*awVdBFPV-A=k b/x+X=$0*S/j^');
define('LOGGED_IN_KEY',    '6cmGSWTA8|yc1p!n v|$1RcZ-&9|t]rqS#DlitRZIR!w+@Yc_%^x]zMw^QP-=UR+');
define('NONCE_KEY',        ')WINr`1EaE&z$N>R/g@{w=F8l<C+|t8-#fmXq8X[1ljF9{W`#4Ltg~L~;wc4W/mt');
define('AUTH_SALT',        'XU R_R01(PS1+4B7=K@Y9`l3wP!K^m+|M69W|Sk=ptqnZ_l;NIvN}0Cu#A_<[q8@');
define('SECURE_AUTH_SALT', 'fA|C+<y@-n9Ir+%R!:)+[&pyfg&`GPh:|9YE8,n2l-|jJVOS5hHUQBt9+L|wv[E=');
define('LOGGED_IN_SALT',   'd}_m2G|FN,!%}ME9_{0R})a^8QiqH|zcCE3cj3d-sXb6;-!v_5Vm$ds%Uu~4iqRo');
define('NONCE_SALT',       'NnSAhr?Yw+U,4!FF[~GO*i4`nw7|4g+jR9)V(4}6):!O2-^Z[Y>ehVu&ae<x:C~h');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbbs_';

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
