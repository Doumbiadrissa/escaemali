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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'escae' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'kC-)iJruh(V;$Y&@^e{yDzmM5~XmVq$w2gyHHb93ii!rK|%[43WRyd3F8Y|W {QC' );
define( 'SECURE_AUTH_KEY',  '!L:Eg:4NZgsS^Xj8J^GY/)&C4hi5M#~vH#R#$Pf/9|dJ4K3u1OdttspsF94c=/mJ' );
define( 'LOGGED_IN_KEY',    '1$~1:Y(;d=jUymP?F7q(qBj{<z]|=Xw~Y^:.3zapQ*y4 qArMZR{zaF,u~f|N2O:' );
define( 'NONCE_KEY',        'xMx)o#D(`>Bj|(#7u#&n]y{UW4dg,!{U/:M}zUI<*K%#HF_ahq{#dF3<22V%781[' );
define( 'AUTH_SALT',        'p6)ZKs)a(cIqw8+B%fU2tRi,pZ]@p?=q!p,x]Of(8n;+rb$Ke8X{cIqo-~/:M AT' );
define( 'SECURE_AUTH_SALT', 'siCb]UFK.DdTkz)FyeVcLxm|mDV-J2vPRJmKJzUGu{V@*z$=v|?]u.9+F.KLJ6?9' );
define( 'LOGGED_IN_SALT',   '>Ov+p<GDFg-?0,jydTz8/QXVGD)RDArN,iMO%y.y-98#i@zpQ5 Cd.6P/rL)XqYJ' );
define( 'NONCE_SALT',       'MeB~uk[ZC? hu#B!mm(6Gi&Ou7J6OE$=xu+-t@IHf6JV1dz* EIO526.4 Jf)!>_' );

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
