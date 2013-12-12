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
define('DB_NAME', 'nookofeurope');

/** MySQL database username */
define('DB_USER', 'nookofeurope');

/** MySQL database password */
define('DB_PASSWORD', 'RnGRDqZAuFHfmWzK');

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
define('AUTH_KEY',         ',SlQxoju8[Ak-X:(2I+mZ=xCr+ni8fqRFl01 w6NL6p-+>lFv]c-n`94wCs|32M,');
define('SECURE_AUTH_KEY',  'B8k?R74HyF=_m-)JIcH,L.m`]s:g)u]6>D@et]oj.Z!2_Mq48JV|&I0.l7=A_+t>');
define('LOGGED_IN_KEY',    'UQu_ql;;jeZ,+MUB(_mABxgh~J.Sf6qjmRCbZ}7$mVPI7+PlyfpE>5.jSzv`i:(/');
define('NONCE_KEY',        ')C+#Z0C=L8k-$f5gn4}2m{{j22Iq6X(dt >rV+_KS+}6eyO7g%t_ZW:$# gvo#5+');
define('AUTH_SALT',        'O8+1!r[ZVx+KAHD>$GahUpV>:#VV31V.3w#.Qoo9}1XU{vEVg}%&;JWV/^A&RX=<');
define('SECURE_AUTH_SALT', '}=Jbw/gb4uf-uV{u_OoNNi*,%EZ~[+|C[b{MVn?M1.*Y%-d=TKQ iC+j`!N-*[q2');
define('LOGGED_IN_SALT',   '7>Q:Zoi_`$;4XMU*A2V6OV+/`Rv2Zq;.LwyI2<Tig[]SwPsI.zmrEX@ftXcF[`s+');
define('NONCE_SALT',       'ZG7?hgKwyr9FVHsKKp-) e!~$)4|`#(PUF^*?%+8W0CqUKO9;;U7|,`D [qGM%|9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'nook_';

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

