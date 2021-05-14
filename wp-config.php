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


$cred_env = ($_SERVER['HTTP_HOST'] == 'organic.loc') ? 'dev' : 'prod';

global $cred;

require_once 'credentials.php';

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', $cred[$cred_env]['db_name'] );

/** MySQL database username */
define( 'DB_USER', $cred[$cred_env]['db_user'] );

/** MySQL database password */
define( 'DB_PASSWORD', $cred[$cred_env]['db_password'] );

/** MySQL hostname */
define( 'DB_HOST', $cred[$cred_env]['db_host'] );

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
define( 'AUTH_KEY',         'NP E^qH57ZMHr/O8(+3PdYt::[=.(UA2/{-)vZPp+Yl86}PB1U&=YfL Oj>ge?iB' );
define( 'SECURE_AUTH_KEY',  '-Rrt5/_xcC_{S?GcJs-T:/~Fr;PakN9w$,OD0!C~7|MNe7~nS;7Bx>jDMLewviyr' );
define( 'LOGGED_IN_KEY',    'KaP+5bvmYIOh*K01O^Ur5<sv/EahCZ]-xO-[o2HZ9ZG^a4RaEJL9}=}^w#c@<M,{' );
define( 'NONCE_KEY',        '0YpJ@4+<H)g6jZuNCT3<{^fnk|nAG8aH+B;?U~|zi;&DvXBn!^3Q*}AHFU;Wsxdp' );
define( 'AUTH_SALT',        'p1!bO]Q/fR:5a0p)3@NnWn+tiy?d1IX4&brE}54 q@ J@>{TvVZ0n;/RZj`=ht:3' );
define( 'SECURE_AUTH_SALT', 'giz9Hs^+FdgAem$t?*U?h)S[G[6X>c$8fRa*taqL40Rm=]<Ph]?1#glx#_>41(xn' );
define( 'LOGGED_IN_SALT',   '9q]GF~e~%Jis3-v3oL#43gWzQzJ(<KpJH]C5VUn?W`dku?|rIK6R&yI.D$nuCSp2' );
define( 'NONCE_SALT',       '6J-|-,q7OQ~,0!GY;0qu?x/rXD$kSs)T|lSSwN%7s`g^*U(FxTV@~Pa|?}g^&[=:' );

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
define( 'WP_DEBUG', $cred[$cred_env]['debug'] );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
