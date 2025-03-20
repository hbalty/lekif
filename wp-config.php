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
define( 'DB_NAME', 'lekif' );

/** Database username */
define( 'DB_USER', 'houssem' );

/** Database password */
define( 'DB_PASSWORD', 'Batta470...' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         '~A9iz,&h<25tyYR =][4_@;;-BVMG@^>SBR=Lm?-`-gfQ`E}%9@2Cj6osv6}yOKP');
define('SECURE_AUTH_KEY',  '[<sCnC4rY#/$/b&7!<vI}bac[KMP@*qmLU[qPc{zmfyXMOGM3-7K<)hhqcE0f^Gk');
define('LOGGED_IN_KEY',    'H=&>HC<o@f@$+:U+pjKH:XQF3H %{`v,-j+l:mw.@CC@3-[+A)K2!Oa& 6nmGU+y');
define('NONCE_KEY',        '&ywCqVo^r9p+N^hehE!Ua/f/OlkqP0.G2oVp>q&Fk |8|Di{H}IV2tM-)`2u*B|f');
define('AUTH_SALT',        '7DU?;,y)tgFSmqNIVdoC-9mf >#[>BWvZ6p>-vK~/+~oiRfG6$u-skfSkO(w3q(%');
define('SECURE_AUTH_SALT', 'F1^o&-]6XL+3X`L&_wIzq05-XW|Bt]_ E[$L{|+UAHd?pIt]+vJst:/{i@+i|)zm');
define('LOGGED_IN_SALT',   'V)T:ucjCs)u<Z+O%&FqZGPGqasqdXr75oE@Eck-k4Ns&qGK#;4j3T2&C:Xiv/$WW');
define('NONCE_SALT',       'drvwI5x<ljKZ^lXuM1N[-Ot(gKK|P}G|{Po|^SqSxyxK DN;Q1=:+A*Nb?*32]0_');
/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 
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
define( 'WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
