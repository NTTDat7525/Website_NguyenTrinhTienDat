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
define( 'DB_NAME', 'WordPress' );

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
define( 'AUTH_KEY',         '7hO:l;7e<J-tUD8di*)DpbgPlH]q=Z9U9MvEiX_EhEDsE#elyO>!5`TL$g6;!&Bk' );
define( 'SECURE_AUTH_KEY',  's%j&7lq~9z<J;uJmzM{^c2:_*1@-h:[@DyT$JoTuN6yg&^bA!p<6 oH6jni2xc< ' );
define( 'LOGGED_IN_KEY',    'N%FEsAq&{0cZmw$wQw{rkPh})V0{k?!0z2-,WNxUT=RF*nyV72G]Z[>K$AG4AxZf' );
define( 'NONCE_KEY',        'VE|o~BOgHP%c}JfA?kHHyOA4XDliXV]xsHpSy!{Ln[C9eR{nuJ)$kn,.%y%7?eyc' );
define( 'AUTH_SALT',        ']eW6M73on.9!zkIAz@D;&zm!V.UCs^?d-venuHALxBdlL+lQE!=mE19myj:eHN.H' );
define( 'SECURE_AUTH_SALT', '9U{RfG-`dNK8Lw2+eYLJ=QENEbBr#J}3HJ(n[:c.la-UzCtU[r5N+OK|S^I;rmHf' );
define( 'LOGGED_IN_SALT',   '[^?!(bgPbb`PQ|M~zHA}3!H1FGZ@WqpUP0o]SG(lO=]VQ{3fV1#+CDtG_A)}aGN<' );
define( 'NONCE_SALT',       'uixS3tR{1NusKFw>i|Ntt#xqS-Gh2Mi ?UZ2R=|[+ |%9JhOw(QA0@.;Q(dQ1G;e' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
