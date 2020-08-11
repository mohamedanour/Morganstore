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
define( 'DB_NAME', 'morganstore' );

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
define( 'AUTH_KEY',         'na/uSx_]$ss>t5zm4M8$B<e/4xg0Y(bUrbj9(/?*EYiW`g/]XG(6Uq!e^8Q}~xL$' );
define( 'SECURE_AUTH_KEY',  'T,R#</m%DoUTY&sC%2 uja3Qg<j5:>HBH-t*vI#$V{-#C,=J>&Ot0wEb)Bl0!c z' );
define( 'LOGGED_IN_KEY',    'H=PeS|.<,DYq2V+$i2S^DQ.fR|Z*rjj),oy32I tsKaXgXz:$d`IpQW3Q/%cBeLa' );
define( 'NONCE_KEY',        'UWYGBc<C$oM7`v4rAteC#63fK^l1@<#z^*T`OP0Y2yEJ!4d#pLm.i4[t4/}Qe%Bz' );
define( 'AUTH_SALT',        '!xHe4LGM)iG!+eB%J#HF<^XROVFV&~a&dG3VbfXp*=b1V^@uhU!~N+kr)I/~#yX[' );
define( 'SECURE_AUTH_SALT', '|I[G8}g-<`RXuZY{qAeXZcfvy|ztS@Nz;9]2[jrdJDYJnE p(rZQ1QC#Xu#S,m9l' );
define( 'LOGGED_IN_SALT',   '0+qLnh35+MG~MJE3HIwxrj{sulo4osx9^mN:714ZhgzuPa&.U#.,z[# /IcxU2=;' );
define( 'NONCE_SALT',       'MTp,[Q8!Kf+ EV8arqS)k{(*>#3`]Cqoh(s=p_o]b<z@Tz,]^HB,Ba3*@?$,)TK]' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
