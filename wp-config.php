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
define( 'DB_NAME', 'afiamunn_adventure' );

/** MySQL database username */
define( 'DB_USER', 'afiamunn_root' );

/** MySQL database password */
define( 'DB_PASSWORD', '15303003@' );

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
define( 'AUTH_KEY',         '=~J!mW^/3DaD-Wt_TOuSEg:!_`wQr;UHF7Pi?W_Qk;q1tmy lipqG.=#@YSNC4TB' );
define( 'SECURE_AUTH_KEY',  '-Kx3Bb}!En*)O9M#` J(2bmLL),BTV.zOF-mI!MG9^$=4w>rN~V-sY:IuMT2d2H[' );
define( 'LOGGED_IN_KEY',    '4DRSkNe2|PZp=:cezY3k?D#eVt!Vk<4 C#,Go[WM$%]4 !+r!oTfmqe;;Nj:/Bt*' );
define( 'NONCE_KEY',        '4Lqso{(7^y)?] *{P]MiY ~q .q0/KUqI~~b]/34JLWl,jZ&O@e.Mb:@#1S:0DRo' );
define( 'AUTH_SALT',        '.VQ2J0#s6tA{_-ofT$Qgme(M_4a;]gJ4{/|C#5_cmY6^pnTD3UIQ-:4.Y: X(s__' );
define( 'SECURE_AUTH_SALT', '$HcGQ,T*P.[sr./dU G^LD@g:(f29<ebh|tV<zxk{i{HJSl;p<L3zH1Pz!p!5tI}' );
define( 'LOGGED_IN_SALT',   '$H vg[v9^w&OAC:ICZ^U$L{cH6=(Ra*M!4MUZp[44Q2;vFQm9bi_PH0I-R?wK+Mc' );
define( 'NONCE_SALT',       '<?Q>9xL1./ JL-_.|BlVB8a^@Vc=K#RN*p}4f|dOlk.7k;p2oz,(&JcxXBHsBND@' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'm_';

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
