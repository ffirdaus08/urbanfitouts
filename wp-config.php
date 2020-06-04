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
define( 'DB_NAME', 'worknation' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'v=SHdU~~Vu @B LY=hJ+(CdO*y{mj?P)a@{ClAzsLM:/5t<cxnd7dl/s!eTF>++O' );
define( 'SECURE_AUTH_KEY',  'X5f!M8[Xm IHhe b#}3L.*?5Kw?gus_h7}6{D$C%5T7!8!TjKg)}177u/usz{0-O' );
define( 'LOGGED_IN_KEY',    'vB>2?Jv/N VFTN[eL.qX;6^yVUn,04>uV+|ib 7W=Tx[IfTL`r)#9<CoS7qHzA8v' );
define( 'NONCE_KEY',        'DJZ-epe!l,; ja=u?H<#9>helT|@GIb9mx+H{5|u%h-(Sx)_n}`I4Gl0z[bTJrCw' );
define( 'AUTH_SALT',        'l0}-jkJQ-#!H9AU]o;gaeYU(ZT{wa80=%tv/3T9F<?#*.@a1Zr|g`5Zrknr4!|0]' );
define( 'SECURE_AUTH_SALT', 'd~Zo%W$><U4Oa_/H&SL}GIw#hmHN}{{G%NZc^BD.*r7in[$oP#Q:Y=L&GhEz8b =' );
define( 'LOGGED_IN_SALT',   ']]FW[k2{l5x2u+YL`g):MR{7&Roj~YCHqt;Y94N>|m25976&fXO)EKBQ<vz=tD#@' );
define( 'NONCE_SALT',       '1W0A-3Ru$j~nYM@u)3/lLjg?@2iAI>VBmwx*tI<%N9Yr=;^^:V-bd`I=kC^POO%Q' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
