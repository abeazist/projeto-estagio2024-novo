<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'projetoestagio2024' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         ')B[sC>@}z:LkmhhH8(vrG/0X|:b~``>os:%.[LXt<iKw8AzM-I32C|#W`[OwDU@c' );
define( 'SECURE_AUTH_KEY',  '/ZHbU=kd~t#)u8Z7@Ooa-_nT;~X>Z:m ?E7B7$1fTRb!}J`+YlYUC]TOVyoRm}jP' );
define( 'LOGGED_IN_KEY',    'G&|s T{%af7AC.qJ$`d#e?m<li.A2H*bxGh5RC*c0!%,7XC(dSaXmx/e)B>NscR3' );
define( 'NONCE_KEY',        ':T)8xJ+VvI$^EhrF+I$[aWxYg4CLda5:}>oAu{I2_lWwt=_g^tFL1/ba2liH[Nrq' );
define( 'AUTH_SALT',        'e^iVPC!`g_.+uDdu i;oVK/L!._G8waOFV3i((=11=-c3=Y;NSB$&@foMA%j%yfH' );
define( 'SECURE_AUTH_SALT', 's+UNYQ2) ^2)/w0B>9sa7Q/Xsa?b87mVe7-gdAtmW]l9bO$gn3}mcy+FMU4R[X,t' );
define( 'LOGGED_IN_SALT',   '`OWZp*5y!Sk3{,zbE>Tkqg9}6f[HL-nZa}_Sz)9M<u,&n2<(,,EU{Ro>,--1!MNj' );
define( 'NONCE_SALT',       'wwt9_E[V}!/mK(;!u?#B7~4/]6Aipj*+ms[h(f:&j&J#3J~VRt/cZI[|H+5z7VWi' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
