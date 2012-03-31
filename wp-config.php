<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hesmusic_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'kizza33k');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'x$Vig>~-o)FhS<QP1RvJ=pN@Axv/[l|x!/RykDc{1be$U[znIDT0Dh61kTu|=;q|');
define('SECURE_AUTH_KEY',  '0W-w+A8eeCc~~%O.:%ZPk. tl r6vy@-=haA_S)tF@{H)%SaZA}#LwfWuOdO&4-M');
define('LOGGED_IN_KEY',    'E~|2`l8@|,;RagVS6gol,zaI0CjtsU)Za=p/qWcmUO#3IN56;|LjWz{)sE-@TLSR');
define('NONCE_KEY',        'Am-:G(]to;y{_YL*@~i-+kmgV@cG9W+r :Fw{6Eb}dx-`-OE@Y1AmWB3s$iG%?QR');
define('AUTH_SALT',        'CLEh% h6`7+<d_<GFW*0|eks!Q.lRKnVA~p`Z_q{22@yt2Wu_wB$*WH4%%k{Li@S');
define('SECURE_AUTH_SALT', 'mtOYX--qXDe7+$}S|<-bkt1fyUQr+A|ZsIOQ?Y3E|6pPtKzIM$VF!0tV&y<dN!a]');
define('LOGGED_IN_SALT',   ')o3S,:K;V5;P_|b7uN<(zg?kwz?@+03 3@sajEZ|ZO@KLCu&AM0/}4v_+XH;vh9V');
define('NONCE_SALT',       ' t@2aSX[<yb;a|Q[.=$88HR%|}?@TS=xH<#&:g!c4(*~mhg];1}@W_b5=w^k{`Dz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

