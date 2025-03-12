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
define( 'DB_NAME', 'classof26' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'a%m Q6M&/rnnj&B%KN{R=</eJa]f|k&|iY?>Xq(|KH~nYBm]rV30>IQvkuE7>dIC' );
define( 'SECURE_AUTH_KEY',  '?zF.aNoUy.;sY6*y%s}UHe.a@ZcYR(c.-C7~|Q[Ji^8HECl8F70L8BLc8}z74;?1' );
define( 'LOGGED_IN_KEY',    '6zfjB+JV]fU:VBg-**_)f-b+OsYn4_x%iv:yXqhpJLDg1~;oO(Z)+&0Z#M5uXQ28' );
define( 'NONCE_KEY',        'Pfr`xKgn,E[;2C/n@c<Z4X4G,j!B!Qn3E(-)W^Td^0ls1iYItYH1[MCODQi7 !(/' );
define( 'AUTH_SALT',        ')} PxjBJb*8;F^Cn[1tvc~Lr4y,g)SJ{:N1=r/(G%QOkfx6dcd&16a_ayJ#lvF22' );
define( 'SECURE_AUTH_SALT', 'BVAtL?kpY;R3DjgWl#}8K|Dx?N_/2:MyeqrZD1Go3$E~yr ]mFY| MR{l3rrRzx~' );
define( 'LOGGED_IN_SALT',   'MSmR3e|Vd)E#Rp!PH,pDtLlgV^UL2wO~6@)rw=^e%dF,<h[gWGp$<O@Ln%f~ePxS' );
define( 'NONCE_SALT',       'n`>xp6n!c-,!u?p.j!Ez+f:t7Bta:SQ^?*})q(&<`LV|*a;uTpN--@G7CrQDut2_' );

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
