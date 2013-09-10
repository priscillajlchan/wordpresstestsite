<?php
/**
 * The base configurations of the WordPress!
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
define('DB_NAME', 'wptestsite');

/** MySQL database username */
define('DB_USER', 'wptestsite');

/** MySQL database password */
define('DB_PASSWORD', 'emd2013');

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
define('AUTH_KEY',         'K/MT=|ZXY6h}19j$TUv=`3C](28|Q[O|1!4RmEhf(tQfC|d~Lvn9<2vSw7RA.6,&');
define('SECURE_AUTH_KEY',  'x~Dd=kEtZ#@+fMO|gzaA<H3bM$qOzmzh|E<7c#s@Z0f@_^zmXk-!qC%Hj0O~&-vA');
define('LOGGED_IN_KEY',    'EyZ]45H~isz;{1il|>-9eCl-[q-|y[+a-2l7UC[dD l2NloYpxSI^g&+I<GXxaQa');
define('NONCE_KEY',        'M>@9B*|I3rV)>^q% yFF$Vooq5Wt_cv>7aU4z[LoC=AS;k_R_ehYeDP`nQ]yElrB');
define('AUTH_SALT',        '-corAcCH;LJ(#Ffc6,Mj8J d,86%3_-2&zTk?oUmnuZ4I0^*y]#n#kvv6PYH$Use');
define('SECURE_AUTH_SALT', ']5(|( Yh,=rgPDO_D-<9ch75T,?6AWVF3F5Eg0Dw0h]}3kX/fQY[FC>H7?+SY+Tq');
define('LOGGED_IN_SALT',   'y2I;+1B_NMz_`kg|QTEeU:[.K];#LltCqe+zi-OUX>W~ZXydL*CF|x>,jIAJRzJa');
define('NONCE_SALT',       '`>^ZhVc5&X.vZQYWO4|wBVm2FTa@dadTMhp$Pc|d=)Mny^~Q7qa0>{h?E{|vmv5-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
