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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db6vtsm5ffsxmr' );

/** MySQL database username */
define( 'DB_USER', 'u7vacs2ym4znb' );

/** MySQL database password */
define( 'DB_PASSWORD', '9wkdtvhyhgdc' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '&/9N@,Ok7`fQc_4I>05Nvui6MH5N>VT-3Sixw!nE4sV!S s#S)f9WaBDfA_-}1WO' );
define( 'SECURE_AUTH_KEY',   '+qrL9>pV$^7j-^u=0qDjs}q{8TP_mhu)t19w:w]`XxSCu5NXJE0=ddiG(9,mq|Pr' );
define( 'LOGGED_IN_KEY',     ',F;&e%pxOyr*ja{n[>iDO`]n<4IGa5:BG)ulyJ+7o3/>&>]#J#Wx[%z.=#aZ@YfQ' );
define( 'NONCE_KEY',         'W^;zxZrM>AiTU0jyTVf5L<`/9`IL[.YsPP<B:+Bc0SFnvAuw~^Ah$k<?3b@)/6#<' );
define( 'AUTH_SALT',         'N/! ri0#Sco}1g@z}(JRt^/{F=(!iJ)Vuw8[F$~kv;ytiM zHcMu:aL?(XZ{:l@|' );
define( 'SECURE_AUTH_SALT',  '9aT.g9E>Yp4$31AOW[D=Xk(5!b[-LPQ>PEw1)6 ,DlJCF`FKNx.u|<1LSa~b2F.u' );
define( 'LOGGED_IN_SALT',    'cUhW{C-9fI2xJJyKZ]b V1ryn.gnD(Q`5g3:y CB*^0kUR*blTh;Px7>~C4i61M%' );
define( 'NONCE_SALT',        'l)2L6*oFYcVoM<9FjQ ,3>V~Z8zlg1^Mg&05jK:3F{$8;1Z=cyVc1sB%g<1oGp+Z' );
define( 'WP_CACHE_KEY_SALT', 'bUz%{C[qW:xAh-oL>1AS8JTAmqZDy`FKgpwgRGnB9{`o#n(-Br4z9gzkYOWEpW*v' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'clr_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
