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
define( 'DB_NAME', 'u755149882_TQhxU' );

/** Database username */
define( 'DB_USER', 'u755149882_i32Sw' );

/** Database password */
define( 'DB_PASSWORD', 'j78DTQBFl3' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '!,0a55mNMG2mozw_=u~h2?[&~RiRD~?lOk=z&^X=MX8?0LP:XBCs;Z.kPf7(grAZ' );
define( 'SECURE_AUTH_KEY',   'mv9>-otUy#77p!sF_Y kSIHKG1$&2=|21HEN~?:%f|nU<iXEwS7n~`Xu$3+Lj7zO' );
define( 'LOGGED_IN_KEY',     'nir~bplAaM;FnVJ#vy=HqBs3@(~{3oS#}|#O?(]rX:#{f$.ChwwzA-b8fc-R;,s}' );
define( 'NONCE_KEY',         'Z2LaxlZ`V<PLIU4`$s R^6}MlmRJKaD]389Kk)n;+:.,5Z$k06?y_56>`F$+e_^.' );
define( 'AUTH_SALT',         '6{(W-Nh0iA_h%pLIy=/f8lf9@hXX^(yc5t[QD`gubQ:K#P3w*fLO)u@E)^[HM=/S' );
define( 'SECURE_AUTH_SALT',  'BB{]J>h[D:K2aR+7(2sHy%bAM]AZ*lg>LWe)*-HsOYbsvPNF:/[w:!8INB}JN+n<' );
define( 'LOGGED_IN_SALT',    'XDJHkl`)4P%gFnDqQnrQ6yD.{dQq$$jD5P<&o@oHv]?kC&9U}I|F yd$/%Vif3`0' );
define( 'NONCE_SALT',        '`pm:#hK`fe5v#xMSt2?q>2(4X7 :w4^<Ds.g0Z[jH4m/_:C3Ur&.ea1~_XH`;ItO' );
define( 'WP_CACHE_KEY_SALT', 'HlF>s2/SsCFUR^^UwAO]_QPrC$8Ug~i0FI=#Ia0P4zqi,9s+!@,AP*<7/D+l[e{;' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
