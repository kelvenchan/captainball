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
define('DB_NAME', 'captainball');

/** MySQL database username */
define('DB_USER', 'root_boss');

/** MySQL database password */
define('DB_PASSWORD', 'DontcincaiAccess!');

/** MySQL hostname */
define('DB_HOST', '43.252.216.213');

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
define('AUTH_KEY',         ',O+5-f4$/kum?>Um|F} 9E5Uy|_jGI%KQK?$OvO`wC*+^P2~Dcq<+O7m^0Mu*Z]M');
define('SECURE_AUTH_KEY',  'O6a.uq>*7`%mWW!@s.yJeRz#k]&^0<6R6>GhYI|pnu<V,G,!f-bQo.s4k|<XA+jC');
define('LOGGED_IN_KEY',    'grwJEI_m[GgP)0zOs*nU)x-8E,Yz[Ua-7lg^@h9XA9zq;yQq|[[mh7 bPoV<S[Qc');
define('NONCE_KEY',        'pPW:}rmfU2htpdrzc^_;nKduG?J[o9?jc|s~%gR@(C4$@vS[JW@g1|~}$q}Mn1[&');
define('AUTH_SALT',        't3!<#qcu>R^De}ZKrB)x~4%vl<in[J~Tcy<+A1T*cqpH?L1&a{>V`KR$U|O0pV+R');
define('SECURE_AUTH_SALT', ';`yF0aK8r|eVg-GW@X{4/~}+w%W>2>A,(v@~r|Px!wrOm6Nlm^8oG<J@9s@14O[F');
define('LOGGED_IN_SALT',   '!NVp_/Xge{/r ;X[m<F3Et*mRPV#z/>,iw6%wfEmu|pbr*4[>.AU}1c?,bV-6Q<Q');
define('NONCE_SALT',       '1lAgyss~w? {9v_DI_)jc(u8Ifyl:l:S<c2VyvT^%aB){W+2jLM@,woh5ai|n,{u');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cb_';

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
