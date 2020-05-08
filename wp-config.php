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
define( 'DB_NAME', 'cv_vjpb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '}aR+KFb+A`AU:+Axjq5C.f=S(mF6Ct]/B26>=j`*j63D/ Hk};c4?(q_1{)~T*(;' );
define( 'SECURE_AUTH_KEY',  '(MrZR8LM)9Jw1!fPG_X:=lZ#%=wY#bsOjF,f{Lu2TmeNAeCR[t00A<o(}4A}d }3' );
define( 'LOGGED_IN_KEY',    '>2xd1MReTkb%5<J#PS`HPsS?a?Z.HZHG}s!$TLUvggq1)yFoL>}wDvU6}.Hmt]oS' );
define( 'NONCE_KEY',        '.$!V&$yzCRH+gGwFL~[hUZ*3L4>i~H|gIIN#1ESF4Dvt>58gJ*mZ<uMu,{O/<E|T' );
define( 'AUTH_SALT',        ':JuKVRNEDwEZ~Iv.ktz8!g(~Ph:M&:{{zj#%E$zSdN+r>8h.-jx8TKZ#1V(|6%$C' );
define( 'SECURE_AUTH_SALT', '2D{[^k7Acv,+?hMqIq_ZP_-U9(>Ema+1s5fUA]o~13D>:+[d7::q3ka,6#bd:NaD' );
define( 'LOGGED_IN_SALT',   '#1iZxQJzU~!Py0MPf,oPmri0NlQZ4Tg}nESmvR%k,k&J;*<Ku? NpUn+M*]]e*x3' );
define( 'NONCE_SALT',       '#L#f%l?uz!o:ChBy[|JJ]C#=5Wej6Q%}-9!LplhJ_fRV%nE2(KS8=afjLWf062FE' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cv_victor_pedroza_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
