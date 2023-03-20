<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u755149882_XRQfC' );

/** Database username */
define( 'DB_USER', 'u755149882_11YSv' );

/** Database password */
define( 'DB_PASSWORD', 'fnmoPGazrk' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          'Di}{;GtM,:rQ+/zzBOVq|;nIre+_f$4ptoR)e#yB}JlILxZk /so*vLeh:!BkSr{' );
define( 'SECURE_AUTH_KEY',   'rfLWq,BPZiR#u]O73Y~={Kom(?LX3giU&l{.}v=0ki#2QKF0K%L<KdGx}OF<EPUs' );
define( 'LOGGED_IN_KEY',     '8Bnr/!)Gr+*N)p;:M|<Y8Lw>F:3&]9nc5W1@y/fQMb0=_j3Tn=bW!47| 37f7&T=' );
define( 'NONCE_KEY',         'WE,k:tEo$&w9VD B +)mgzz4/;hL;Ii0Hoa@g$nLRFor9V7N5MZ8#yW$D-uMA=~T' );
define( 'AUTH_SALT',         '}uLx1;; :~_GX!-#zYLs#:Hu&.s*o~1fQ3{jRTIY2/!|lk^o$V_xPpkK>FcqgrVy' );
define( 'SECURE_AUTH_SALT',  'Bcz2};-)<=%b|,aM$Q`zI} the-_B6VZ5)~Boy>J/1u.vt=X:wjnBT2?h)OMFct~' );
define( 'LOGGED_IN_SALT',    'Am7GzYG@}EyHpLe6A89K,20x[3uxsyeO(.v.Dpj<2UN9DzF0_Jj8BxO,55>]Ovvu' );
define( 'NONCE_SALT',        'Ibao`vJFudW>u%NOg:M]Q6:wsb$]E`p:EL[id|zQXt#>-M(!0NdXZQ~:HZGsugJu' );
define( 'WP_CACHE_KEY_SALT', 'Qu 6eG[:[AQ@^Cq3Lf)Nh#^ `E0?pDv,mPy?#?{@hFf.jqQi^~I%jF^;3<l@ItK8' );


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



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
define( 'FS_METHOD', 'direct' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
