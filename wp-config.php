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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'dev-restaurant');

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

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'nfJ(dYWXo)wo2982B6S&C?=j<KJhc!.52~_P)=P(*kf!.e+,&vVL9DWG.h} Xx/,');
define('SECURE_AUTH_KEY',  'NDmoMG+<F`7jzPE(E5ggHl5:73Bt<Ia1]cRp%=$UbcXht6}RxU`wN%;h4)uz|i9s');
define('LOGGED_IN_KEY',    'E/Z7kZ`Mb{T,>,Lp~9s@*AW8/g4P=dG(u^3gnETOB*!(cRBp4._SCH3eD2>~zV){');
define('NONCE_KEY',        'D} [W5s,ZzD)6n:8UaCb{Hb9~q{P/,PoEWLvZoMOm|yUR`Pf^7qos1PVFAKb.Zov');
define('AUTH_SALT',        '}vME>}E5>pZGnzt2L%x31R<:-20CrU[Hf1Y(Uz3Z;f46!PtRH}.POT|wIqr|N?4X');
define('SECURE_AUTH_SALT', 'e.mZK>*wkSO!cb2hmtP+89/?.>egSw`>mFH!a hZ8gk6;07B Qth$0-cC[VmtkaB');
define('LOGGED_IN_SALT',   'k[;<8TApVY-v`M9wmoJHEy!8p0((S2]x&n7Z,g50R,w9`YaM(_4 ewb|/:[Od~GZ');
define('NONCE_SALT',       '-->:~1fa.ru^^ :>sMy`8xt&#4/*Gc#q]A5@Lknd}2b6GP7l]-=c}jfunb]&.AYe');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
