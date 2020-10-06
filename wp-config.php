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
define( 'DB_NAME', 'e-throw' );

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
define( 'AUTH_KEY',         '^ 4q[Q-4f1~=N8Xv<L7_vi@Z{R)WC_fe|tbk8|Vo0086O|Le@k4ZpU)SR{6udyxs' );
define( 'SECURE_AUTH_KEY',  '$N/sFkg%ii2,mnoxRrdczKb:&pd=UesL(xA`{{Ec2bJ>G<wd}kf/|^V?)EM68QVb' );
define( 'LOGGED_IN_KEY',    'Mc*wRdfE[^=?*/J3Hh(4FTY^;p?*9lY1=jSGHF!jYZ/<Tv.N#`S]Qd# {z.uVN7P' );
define( 'NONCE_KEY',        'Pb_m%2$h.Y{)+y%o7/>YDXF|dy=*Wn N,.Wri1NI0T8{LLsqJ4bUd 1$30[nMA`b' );
define( 'AUTH_SALT',        'NrEo]SBu=)~]/TcOCpzXT.eKFAL9791=!*^89NO!rveA+vH:B66lV~F7(bP^{ubM' );
define( 'SECURE_AUTH_SALT', '>;b}e_/@sgD&Kd=0~CMuBQ@xrfw_t-q2 +|?$1ifB+9uww;=fd4Cdl^TXaFe77|2' );
define( 'LOGGED_IN_SALT',   'OT<-=HTSD(1GQE@z| hUnN0G}S, _IVLw^^[kv|VRzNL`LK*qb&De@ANL86!geK;' );
define( 'NONCE_SALT',       '5<3Xy#kG)@-RXTMt+GRt_^4==&F+#Ue%1sYeu_7eT2dwc0C,y^X*n$8<k0@?d~)-' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
