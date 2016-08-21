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
define('DB_NAME', 'db1572932');

/** MySQL database username */
define('DB_USER', 'U1572932');

/** MySQL database password */
define('DB_PASSWORD', 'madisongribouille4769');

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
define('AUTH_KEY',         'OLLTvuK=}cHp;Ue*wdye7mWVPTl8ZX*qVU]&qujx~4-:{d)1~7^4K&h[LpgqA)ZZ');
define('SECURE_AUTH_KEY',  '{K~:FiTpwUIvE{W/JqW.84pr{$xo,SK}u]EUdcnn1C*yT_Iwj(_Kb0!UY{K/`kuZ');
define('LOGGED_IN_KEY',    'Hu!v d>&_D`t]Ccu1ci^VJIU^#~aiFb>V>{P]^,`]l9uSC1[hy=Rtj+@Dc]WrAfg');
define('NONCE_KEY',        '[^JI=C6XS<aw(7u>W.{cB2R$i]@?ylJYwIn(6>.BEI(rN+~}BqS&h.Qi_EE?:1g!');
define('AUTH_SALT',        'mg]kHq)_M]jttSCc^w]62<r_-z%bF#D$r 0hBp<q9%4!:0v[]BeomRZ_]E||LUGy');
define('SECURE_AUTH_SALT', 'u8~uE?pjye9{hu&;9U{J,vk#*]+Fz?`mlRb!6p2%BC#o/kc-_jKjH2IGaaVGBjeN');
define('LOGGED_IN_SALT',   'S4|k?No*HozMIO 67w 364k hWZLl[&vC!Gd{brl0Yv*pP6YCM^]66oQ^Hn<6][!');
define('NONCE_SALT',       'CrfyQW~Y5vlsa5|9g>JI-!A!-+[^PqWOristQJyp7)rw86JZ!~W-oGijB/R^`=@x');

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
