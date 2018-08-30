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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'rootroot');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '#=h~INzr)15f|u_#[%@V({VX/#xcXFS!?6Qd.muM9*C>$acs1%C_$)YJ--~n,SY$');
define('SECURE_AUTH_KEY',  'lD^N?>qYEI@n-g0I]X,<.5LzC;XHnTV&x~wz[_~Z=_khtsPc_@0#E?0_(&>2+reQ');
define('LOGGED_IN_KEY',    's/FexljL Gy7yf|~*mf[704a0gcLz&H4A^?pdducx7e_2IHazwk<ka+VpTNCi<Fz');
define('NONCE_KEY',        '_=?y,z#<T)ei)cn/!<QX^}ss0;`%a(F`xlO+27=s_I^GxC>3JcQY=P&n90#o9iAF');
define('AUTH_SALT',        'H48c%|Cv l^]m2T70b!~<GEU]<S9Dn;%X*L]W36Gh12FWt`=IKEu{n3.Hc<3Rrdu');
define('SECURE_AUTH_SALT', ':m`fd6`RMw!kd=$RQu96.G?XKUah_/Zp@cf<uHM([{(eTbLZ%F<wglc_Rrx3uA+1');
define('LOGGED_IN_SALT',   '1H0;dQF`%T7PZxZ7;_k}H)!pzq3//J>]Y[Nx^m?~Sp>thb%=!y&YWIt.3#_B6nF}');
define('NONCE_SALT',       ':C2YC~]G3Zz{?88 XSdCO qOC)j8(m{mUFx$!{9$Yv;`x~{.0c.;_ I:PPaGn~Qe');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
