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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\project1\wp-content\plugins\wp-super-cache/' );
define('DB_NAME', 'project1');

/** MySQL database username */
define('DB_USER', 'project1');

/** MySQL database password */
define('DB_PASSWORD', '0123Hung');

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
define('AUTH_KEY',         'wrJ*i[F-k:RK{oUsTq&zZ-j1lwX !X(GWs(B5c`-NDC.^cr9!m{1VZi1BrPS$F@/');
define('SECURE_AUTH_KEY',  'fDKS-gjzv`F;l8XE2T[T?#yCzaM?oQ%71j%0:+I dvtk2oHF+cp+ CY[,KR39on,');
define('LOGGED_IN_KEY',    '^QD#/b*qO<fGAYA,!E:m_MPvxVvt.%96o4#y>`S)p/t*pS;j3`6==*9=Vk3 V6MV');
define('NONCE_KEY',        '&(EuLM(`kY@M[k;hb=As~]h&:3As|1G*=-asA%4TkA>*AIu+}<<4HT3pA/+e@_)D');
define('AUTH_SALT',        'dN3@dz|uB*V3UFPQWH_FH@g_PoprM+1Ey1F$V=3LvTd,7Nb7Nm^xj+L8%.BJFV(H');
define('SECURE_AUTH_SALT', '>7+k;CXrcAE}VeH1L OLo?K9kQ6W+t*3M$MqpEpGn,fEpO9]l)xw|&L*vd&l]TdB');
define('LOGGED_IN_SALT',   '-)6[vzrFDE9b|YSig%kSTM>.fu8Fd!Sdcqs6Nx<FTk1pJ;YV@x-2n!B8&%.FkgFs');
define('NONCE_SALT',       '_(p=rjzd*i oI{~nCMtG^Lu&n3}du^~$8o7?ug?}V?X=+Z&-yDxKyT~Oqa--/xV{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'qh_';

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
