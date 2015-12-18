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
define('DB_NAME', 'fairysolution');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '~ 4[p5g7h$=$qJz/n0KssVV{ov:q+@(J~4 xlm!QU`Dt0>9t&8HAW@Om(vT-,y&=');
define('SECURE_AUTH_KEY',  '>j1wo*@4o-q0+=q<q)P)FTM(j(#d7FH25wy#BKv`[;9_sc$.o(&{PvCvAfdL(x<c');
define('LOGGED_IN_KEY',    'S+84*#ylDIKe--,T*i-kL)WJM9cX*J>d*B)C#H)d|]D>aRf>4^Cu<1T7D=U||>-.');
define('NONCE_KEY',        '|?,^hPD4{>~k!oT+Cr9o$$%(u+J+l`fG]6@GPbEJh{=v}HA>{H$Fn`{*`;@- ?+b');
define('AUTH_SALT',        '}%mWjT+)_&8Ug$?8]5Et~;myV*,>~@9fT|<AZ@I}Zu~#QJpsZ7;}K](%YS?ls8sO');
define('SECURE_AUTH_SALT', 'dWbeh&3iYK@YyH!#SVh(M>5a];HebK+#h3q4qLvnHP9IY{#q0RuE1yRP*h^,NvPE');
define('LOGGED_IN_SALT',   ']J?]nJI=2Ts`8w3vQ#jsju`+O11xok$+`GyoE<0uT<8ZL#B0m%Z=W$J|y|]o_hHw');
define('NONCE_SALT',       'mK[s>.wVg,y-9c?+czNUxvT:y^!cp,oj-t[XQ]hkj(v8*+xl4MV:d5FK`+xFx2o9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fairy_';

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
