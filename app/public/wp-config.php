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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'x{7->*pH9K&f<~OKZLH.v>sp4}fK/JI]j!(>n};*!u}+DMYq*uLx,vW/OE!keCp2' );
define( 'SECURE_AUTH_KEY',   'p6@.#DeFGOE($qQ%m_Z<jx+J3K(,DF~FH<(@f^*w1?.}%V(vx~c~V,}d4)7!|-SC' );
define( 'LOGGED_IN_KEY',     'snJ ~KqpS[gek*B7nN|d(lQ+K)Td|_&233mBUbuat3(}2k]>Z,T8qHXjaW_ac(F1' );
define( 'NONCE_KEY',         'M;?A+lVil~>#.#~)4/)(o;P-&^(,nPv<wddR84xX}[%#@=~{&330U|LZTmz*K~Qm' );
define( 'AUTH_SALT',         ':q7ckw;Mj(RiUFjOU>}kwX;45MxjUiTuN+u-IH,@P{RXOV*-K AZeb*?#0#e[VIF' );
define( 'SECURE_AUTH_SALT',  's74U}=V3D.I8A`J%X:CBBO0{x-f1Z;7j}3~I+bIk=d+*kgV)-^/zB!A-bo-Rz4]y' );
define( 'LOGGED_IN_SALT',    '` dt_QXt0P=dY[hO:*,6cSG&yX` L{t]Fh?I$dwgc/%07Y$ETNPDGXH:pDp/Tr:~' );
define( 'NONCE_SALT',        'ex3mGF)J.fOSVL!Dj9ZerWItv~edfh[}!)gbTBQKhydnFn8=YIuwyv$KY|yl6 $&' );
define( 'WP_CACHE_KEY_SALT', '(GsxI.[fH{Ad2z$rDv{h;]*o>]5^I2gP(o.YjqJl 4H9/_?Y!q4`!LK$_4[s0bqr' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
