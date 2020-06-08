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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'La}:-s^fP,fFJ`E$_f<82^ao-+l+ZYjvIo/lQ.c*FjLtd[>vzY>-C`bix=aNqs?s' );
define( 'SECURE_AUTH_KEY',  'huZjCc:f:+x(Nu[urI1/.R,AchngR8*_D6V+pd(Zu.~(BSXM,}{rE1ZgcMqP2wLY' );
define( 'LOGGED_IN_KEY',    '^;.X,WATF.9(>Xp#M4q!u]31Rm=LG{_?/O=crmW;q0_8~jc__Cju?t7x)}=)`.@o' );
define( 'NONCE_KEY',        'XgMNnT|bwpg_s5aS/PDSs8jqo}TnF`W<g:=I5X-gIv`pw]t5GQNpZdzQ2Y@7cAbC' );
define( 'AUTH_SALT',        '(UTSoou;no~CJ3.R! a-*%La+ :x/qgD|wTBBvG?#`4~Bk/E!;1tCw;;#OXlnnE$' );
define( 'SECURE_AUTH_SALT', 'T&J20KN#h(Q}HLx}SNDMNX+SGo#WJMd@<9jLc7p5@xw2?XAl1T&7;C}HsUbD:`r>' );
define( 'LOGGED_IN_SALT',   'ite%h*`_~5r(lVA~yIgsN(2|k51b@,Y0m68s/{SeAvN<rNm}$1jIY5{uVTZN9VS7' );
define( 'NONCE_SALT',       '_IfG5E;;{3|0V_1I&{XS.4T?CI>2[ndod1Rzm {-|e~[~o8+J_r4|1Ke^vjVgiLn' );

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
