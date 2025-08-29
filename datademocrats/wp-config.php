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
define( 'DB_NAME', 'datademocrats' );

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
define( 'AUTH_KEY',         'qL*k263On:#V+@#JpO_tj~W;zN,u8}0MkuV=v$n:{csg*Yd#)BudzF%C#zO3<LK>' );
define( 'SECURE_AUTH_KEY',  '9W?Z|ub5D3b%#35L)aQ:k|i<.T!~7ez-2P]9O-;yB8%AZa9}{+<^.;ZH<2*4jRh4' );
define( 'LOGGED_IN_KEY',    '5]-qe.wnHViyL0#7&^NJ-:.FgGth_q^eC&/e$WzZ0oC9xq`[adpuI4j5-S{ pJHE' );
define( 'NONCE_KEY',        '}|)-8wie1< +#on4yk:b7VD^=rS<6>k{(yNXdAFN#^&74K2c3>oL[oe[Ib1%1:.L' );
define( 'AUTH_SALT',        'gOv^LiO]8l6/zMvEs|ZHx2:k0]G&4?Jv&zYfKxL0y;bWT+TrW,4!]Viu=l4XTQRf' );
define( 'SECURE_AUTH_SALT', '1b9Er`OV`N197csC@mE#* q>$|H?tL 7iu~+ep3FDV2I Eu5Pl*inz?n6~uX)Qt`' );
define( 'LOGGED_IN_SALT',   'IuP(gf27#G.8%IQ6T`7S-39&|eqA_4<yD@^XDe%(}<lpg;FX4A#Az}VoU9HOgWs^' );
define( 'NONCE_SALT',       'Px.!aKNg(B?%Xxg-74d/389d<#}St0n1r=|^z{)*0~Zf#Y)D0z<Pd[e|ex?hbXqV' );

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
