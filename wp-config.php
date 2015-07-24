<?php define('WPCF7_LOAD_JS', false);
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tbttt');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/* remove contact form 7 plugin scripts unless needed */
define('WPCF7_LOAD_JS', false);
define('WPCF7_LOAD_CSS', false);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'oxy(u$L%DON]5D@WEtk|Fe~y1y;.hUo29L-*n4tQ>kzpt+=S58]!dMUM7z:<jkq|');
define('SECURE_AUTH_KEY',  'kdV3M{0ES#?)0%r_Rq+N-]h_nc$kNh,AT@9l}g5P/.+c[ZVf.hO5~6UXU?xYj?iR');
define('LOGGED_IN_KEY',    'JF/e-2 #$WHnL]vW/BD)+0ME,x+$:jIWjFFp]:^rPZ-P8CIE+F@leG[D tSZ%4k{');
define('NONCE_KEY',        '6eJi^6t.~Er+{YTK]W*-+-qQs,4EN!VSCyY@7*6y}HJ.)IXt%Ds$AbyGV-@/AZ:C');
define('AUTH_SALT',        '|LF1|M]#ml+L`~~iQEl<$&iZNCFt!@:9Q{M*M<-9^|?oQJ2:,Bp=//IP9@ix7+=Y');
define('SECURE_AUTH_SALT', 's%sWBmyxYl|5A7c,tTCqCwMp|v#WD]-/p?Qnh&{PO-LGpp{M-99wC^woysRYg<0l');
define('LOGGED_IN_SALT',   'bh-N=[+|%w `QQZ6|Q-+Nq&{e0A 6lk%~:^~-ID(!-Y[o@me*U,Yn5i{RT9W_Q:N');
define('NONCE_SALT',       'p,HidTRy[ -;(+I_c_T1yTe;qth*<kowNq%R7 h:`Co,mAEW*> UE,+3g*/kEMCa');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
