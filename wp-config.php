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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_svarogtheme_db' );

/** MySQL database username */
define( 'DB_USER', 'wp_svarogtheme_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp_svarogtheme_pw' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '?@N3Rh(;?dR~r*wt%exfy%+jeCpFzo8f1$ILkQ8&1jb~vm#^*:+V8JJ3iV}K0Gj~' );
define( 'SECURE_AUTH_KEY',   'b]O9]U~O>lOuNMRNM8*%JzcEj5FSeq6xvCQ*=!:eNf%01sxoxM$bk[b_dbn=%@74' );
define( 'LOGGED_IN_KEY',     'AWOy`4XSIj=;?Ts>[<W`$<+Z&--iI.BL,H4wG?b#/e|7}D(cs9e;t8;1eKqBsvuY' );
define( 'NONCE_KEY',         'fQ?=O)/=#laIs_O56QsU k|TlH|g1%[B1)Ig[>#@FkVOsX9LfVwP^wO+HpEF322K' );
define( 'AUTH_SALT',         '.Nozrxhi-j!kzliKL0oMp7khH`[W^Uo0YG7>oHQ9f(@gJF)>d#<7]CTA7YO0k.Yj' );
define( 'SECURE_AUTH_SALT',  '=TEfEf?AKgo9;r5~AT1Gy1HBVMcMIZ1Izcj_b=G#EQlx.6b)!$n?Q`7%z`G2=+TE' );
define( 'LOGGED_IN_SALT',    'KO7B1^U:.l9#Tm+q;5=05o=@gX#RR1ShIE@5)Za#WKY)~y>`; B}p!z$GE^/h6LA' );
define( 'NONCE_SALT',        '1H;O@A^ekc{Y>G]&p@LvO@N5P>^9FSJ`]pT7wQ9}kpy_L6S{1 (->|b`HyEQqZ~J' );
define( 'WP_CACHE_KEY_SALT', 'prG{{P>Sb-}i{$N>ZM%:O6jFyu_QW+d~7o<t+=!S3uCadl#odwfhB]S wulHCL&F' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
