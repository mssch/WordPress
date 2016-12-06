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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'S2_ 3R6|T:I%}rsxqFNi4#jIb!sF1,Gi2t+iv3t@e7Zrke78PZ|~e3jWfMVg~-D3');
define('SECURE_AUTH_KEY',  '99!Q<ncx{t/4P^27jfk(OTUwKJ13sg2FZF<p!r#cnD0JzkAC_,U6WNO{z+slsYXk');
define('LOGGED_IN_KEY',    'xLhs8&Y VVd!3kP*o@FsoYn{M^-$?62Ub`<{M;-D+2<t1*zA/#fyV`xlw%0X4[Dy');
define('NONCE_KEY',        '}bolg>uTuqO{OOs=*^05g_rc8aD~la8F=@nJEC@/r-8S%V$&q0T6HEn6?*8!Sy:L');
define('AUTH_SALT',        'FpZr/PPbr +s,1,n/hS{1B}y%skefH#955T+LmDACUx7egQMCOrwvSGAeGZrfedn');
define('SECURE_AUTH_SALT', 'JF!w[&pqmA&v1LnhY/RZC^cV?>FlNr~j:KtvS&)W`2.=Ih!HENIo<O$Cr]C@YKr<');
define('LOGGED_IN_SALT',   'V(VA!5?tgLwtIutCLqc^0${`[4K@[s>BI/NkxxgMk?;r7Zq6ilGYQiG0m;.xxv}V');
define('NONCE_SALT',       '.2`c;$j+Pv`$?Ox>1Hye^MR_<FB?TrY{Y@]HZY+2Pc;X|Vn)p0k+>z,J%CSC/Zfn');

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
