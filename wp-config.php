<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'graphic' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';y}l!5k1~m{&{bKWu{Ly<TisxXwQ@Rc48W6cY(|/$q@sw,#roc}lk7D1?~//TLkB' );
define( 'SECURE_AUTH_KEY',  'lU[nlv1SdedYJB~,{xa&&Hl4NL!fcAK1N|7Q>L:@?LYMU9u##iRb:M$&Wx})>>X}' );
define( 'LOGGED_IN_KEY',    'yBCPM GZh=hvBeJ&:S=D3C)S`#M$Zi-()v,CQ|J:_l618[w6.R~59#zE=s|!u8c$' );
define( 'NONCE_KEY',        'svwEzRctg{Y7{qQt%u=8xb >Hx^r(n](VDr.rh6cj)u~]BditFZnu{0vSj5LWJs!' );
define( 'AUTH_SALT',        'VhsuG7Cm_P2~=Nrr_rA5nKo>-DtbJEG5FLC3P7VUtO!jm_Yz(s%5.nR+a:mqU4Pk' );
define( 'SECURE_AUTH_SALT', '#YIc)!gfMTD$^H:<>,4^UZ-~OpPqtxGTD`9:3!YM-DW77<&eOuGMiwG!^Hm~jtr8' );
define( 'LOGGED_IN_SALT',   '(sA?xI&s<*W4y$#xSF8%[d74/:{Ym3?BgtPW.Y9p9)i=ir9?Ctrke@F%:WwDbn/K' );
define( 'NONCE_SALT',       'hqo(-VJ<:.q@96L;Prq<-]2;G6Km_G:{u9c&>XJF`{N+]*N5iyhF_6-a2dqw-$]D' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
