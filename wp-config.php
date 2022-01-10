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
define( 'DB_NAME', 'wordpress_formularios' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         's})yHhI:81TM;jkHgScwpZuhL>eS86cnNHJ<EIT/D;T;eVLQd~G?dg^Jbh+eLVYA' );
define( 'SECURE_AUTH_KEY',  '8v^gYepo+RZEpg5.w3Q3rt/mkR`*[2S@!|Q5jfcx( @S}:$N 8(DB>CI*-r/M2v%' );
define( 'LOGGED_IN_KEY',    'dq|!heXX66GlL*PCPu~$s,:o${v[#.rf9r4YjX#;%CTBd t-17LU`Jf^i.Z`]xV,' );
define( 'NONCE_KEY',        'zI!Bz<I>x_,%I5yP@Q#$|W1[ij8F:7Bm09Sx_sKN*lGwc88Tfbannn(<F<`Z~(6c' );
define( 'AUTH_SALT',        'f1+l2k0F#;Mu.:8N?dJ&:0oIJ?&SKoF|`l]%)LgLe/KHWw(9)=N]V/3E1,=0xyCQ' );
define( 'SECURE_AUTH_SALT', '7}GGG v,+`J= Z3pL)}b(R(e[!N}~2bhKQ%<W,t8M[4ON!}E)7p/2AAnCnTFvgtz' );
define( 'LOGGED_IN_SALT',   'QvKi;P5I<y?^@_`Re1^,.m![MYZBD1sn>Siv((=%N}4pLZF?~L.u&U&8p K#T;Yt' );
define( 'NONCE_SALT',       'k7LV5-5*8p77-ARzy Y}Cs!NJ6/fLg^;rA}]arFzA}jfW<_@:kzS~_pmo4NOp2|R' );

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
