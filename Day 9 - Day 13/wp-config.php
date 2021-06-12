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
define( 'DB_NAME', 'Wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'iNuhs;~rN*Qmc `4S;B8k4*7H|uATS5`)PHDQo|Nzxs6xCah_(3).mpG{g%Xfdn:' );
define( 'SECURE_AUTH_KEY',  '}qK!p=|&&.ft?5[*u6V%*^&*!T8SYhT7K~hb^sm=&~[28eZq[x1/Zxm%;.kJGd*J' );
define( 'LOGGED_IN_KEY',    'Uu% @;LynS;;CQ= Facg Q3Fle;wAt#;jGXum`dI3wT$yED&rRLBSN/x~,D{=zV&' );
define( 'NONCE_KEY',        'fPhFD[(V+<b;#_q)&H|Eom(Dh&[G>;3SK.n>k@G3zn)&[NBbih4y/K$+gnvS,Qs.' );
define( 'AUTH_SALT',        '-i}~.Lh$&DyoHh<.l7`Lr2pMOqn W53NjW!]I%pxFB@_]hQ]Xnw+sW>wMM~M%bC,' );
define( 'SECURE_AUTH_SALT', 'MoYFrO#up:?qyh{Xy5A&4a.uJdgDN%%wvLvT@GgsD7Ue*7bGr_WN(-(tvN5PNd>M' );
define( 'LOGGED_IN_SALT',   'hQsS$T }X)x|/:<(Quq]BL$sP.?/h4MC(s.S(aP)PGC/LqlMo)utJtvHFmlxS8dM' );
define( 'NONCE_SALT',       '(}ax,GVs|(?{]};pCBhtNf|lTeDew4qLFU}MA$+viB^nwOdsP$ &,=U/0cEA<TnH' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp1_';

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
