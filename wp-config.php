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
define( 'DB_NAME', 'mrx8tc4mwkgwl7gj' );

/** Database username */
define( 'DB_USER', 'ukuslpv98x01advl' );

/** Database password */
define( 'DB_PASSWORD', 'wls4ts6jcetr13kj' );

/** Database hostname */
define( 'DB_HOST', 'bv2rebwf6zzsv341.cbetxkdyhwsb.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'Fq*ZXe!,WZ:y5m>USO,SV%Ms%r/u@c<aVl7fu+@g!{XtKbK_$FI$lPczIw6p`kM4' );
define( 'SECURE_AUTH_KEY',  '@rSdeJmj4qId*W?;4xkL}7c~GVBz).|`C`y|/CfQz+XJ>{Ioho-WC^N9y&z-/{u>' );
define( 'LOGGED_IN_KEY',    'eiW<0Vwx~Q1}wqnIGdHZ4Bd;dt+w^etUj$/16k-*6JiFXTjtcigT<),X4e La`![' );
define( 'NONCE_KEY',        'zp,0w~JJ+(f7kyBo=bRB0.nDo5<l` $gSx^oIm6(nG:lc~U<@`E*A5[J1}Jw!|:J' );
define( 'AUTH_SALT',        '}f`y 4obnOCc0PuMDI_!9zkts;z&^<]`1U,sALj[Q99+KolY(9a)T0c|p.pvT&l*' );
define( 'SECURE_AUTH_SALT', 'NjOu%DQ],b^zVRVX;,Fv~Bx%6, pf?&M biIuZP?yuFWiS:)Nt^<5:[;AbWf1$7y' );
define( 'LOGGED_IN_SALT',   '9}~k9lsPt-QBu>fRw6]4;F<PFl&&k77D!I=RLVq`{7Y-v2kYP[WSSTYB({-;@NFa' );
define( 'NONCE_SALT',       'jpl-Oq@).K=(,S!v5|>qjx75QpWVjxh#{%_190/]_U/aP~M(Z~>~oY-Nr[(Ksc3-' );

define('JWT_AUTH_SECRET_KEY', '453467478468fr464rer');

define('JWT_AUTH_CORS_ENABLE', true);
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
