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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'gX7/Te30o<Q_JbuxYtt(pW*q8d3_g[ [b;bR;m3FbL-g&v$g/}|-+$M>0*_P>0LN' );
define( 'SECURE_AUTH_KEY',  'x#O QuQcdIstI@#;0Lm@2Uy{F[MpEuo9`y3gFg5%NuO)hY;=2JR$U>;.f3i>0O:q' );
define( 'LOGGED_IN_KEY',    '7X^g]ABkWa(W]_td?}.tJ pPPI0$3a_Updvth#2PJ:btJAWAkMPF@{60_B{=I+.+' );
define( 'NONCE_KEY',        'c8h?:2C+?FIZ1% {F$eJ?obs# q</G^FLRW=;x>v4WA_fq5Z]-9B%S,58e>w4UMo' );
define( 'AUTH_SALT',        '2KZn4N|HBed./bDu?=tz[jMXmS?hly8H{5t{pq)zx{&iLpdLmJR4]Hm}=S@SSbol' );
define( 'SECURE_AUTH_SALT', '#+}gTK}Z0|4,NI@PU0RV^#InR|cE_[z[Iw9:ufkyJKFKzUt~BAS|?zmW[LX=T}A{' );
define( 'LOGGED_IN_SALT',   '[#N/eg>qEj(v>IuS~x?(j+2;`qi(v|7/5E;yEh+Q>ln{8kM- GJ[-3~MfF;p]FPf' );
define( 'NONCE_SALT',       'GmZ{A`H:*JZX:L%$<$L@a<A!3]?g)z_ukc%,mX(SH9)bgG1M8*X]O{!n_^8uslxn' );

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
