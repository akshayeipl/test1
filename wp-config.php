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
define('DB_NAME', 'awp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'o2C0i3pUDTH=,5@j7&<!;m84n3+u-[w__2zpyc^e!c!S:d5lN2d0RzT.>}Fu!UY&');
define('SECURE_AUTH_KEY',  't8i++d&-HE;_8DrO!z2rRsKq;Kl:H&JIabQj+4vy?vpp~JG?57`{S0<F)z%izLO-');
define('LOGGED_IN_KEY',    '>|aCcF#sAT`d4BR)/3VXp.>n)iW{-W9Z*461?Sq~*|h]yV+#~NzlFi+^-P}k?f?P');
define('NONCE_KEY',        '|G^[@3f:`RKV2,W:u@Q$Nob!=wMvnv3>1h&1+a;= :6a#YE N+6n|HAvr.#IB9s9');
define('AUTH_SALT',        'jK5I-shWr6)IIA:$h`jXkN%qmeh>3Sk:V|+-3_5Z{j`90V3[w2pJ-uKv|$ub!6-+');
define('SECURE_AUTH_SALT', 'lixHo$^iTDrp8%U%o&i.qbadb{1s5!|R1.6(/?S#{6tSEx]:QlkSs+$p/AkCi=OY');
define('LOGGED_IN_SALT',   '@$=YO|K^$/}WpWh,G|*U ,6-*|G9-i86H:zj15R7721-7jt8)cUG:y)IN]r<3lfj');
define('NONCE_SALT',       '#5orW&G|R.hhh~BuF^>:]|d-%V^R33g6FV[+)^FN}>%o.,Nw8^wUT-sa=5)_Si&,');

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
