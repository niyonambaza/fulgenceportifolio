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
define( 'DB_NAME', 'project' );

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
define( 'AUTH_KEY',         '<NT|+we]`$7e=<;dft`/.T`!Nyhf@k()6Q$1#rt/3L~ViLBBOIT?U~w(S8:S}ne5' );
define( 'SECURE_AUTH_KEY',  'VmYA/o9~``2v(vv72_2eTx]k.ow|MSGP.$=g_sdDgaNz#s /.MK.+}da(BnIcdK7' );
define( 'LOGGED_IN_KEY',    'Tu+a{ *Mx4-O06+)4$W0{6V0pfh0wTriVC4}L-b$g_A&S#)1uNzA[yC:8bJX@YIY' );
define( 'NONCE_KEY',        'u`Zcd>n)4;,)Ml?D~}ty2mk-H6#G6LHY 68n(@9e:*S7UesN!MBL?vKlC4/tm}qf' );
define( 'AUTH_SALT',        'MB)4whKLNk@oE5MPST-Q:6X9T?PR^.Ttg{G6}!}gzCma&1O_Rx|^P~f|W?dG YP>' );
define( 'SECURE_AUTH_SALT', ',*Y{J:!%3wj[~3G8ZXUKDx:fh>np73K9L|{|MS1~.6maJR*)G`-3yCDxrA{d6Hl4' );
define( 'LOGGED_IN_SALT',   's#A]^<CMR4!1QRbOb0DT<vP=!hgDMy0z!o&KA!+PNb(IA[[c3knBSh`tt{<vPmV[' );
define( 'NONCE_SALT',       'MQBpRWg._N(eNP7yR,xn)n0V6|)G=k,8E6QmQIi898ZejZh20CRGjWo]B^fL5h}I' );

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
