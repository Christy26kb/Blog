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
define('DB_NAME', 'assoc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '`|=!U<$tPz0}Qpt.EXWaOOmOO&C>{+tcv-=-(f/D^]DK^R]ZmtyQT:+5J{Da)] ,');
define('SECURE_AUTH_KEY',  '+*c!kSL$ M[S1F?<x,^3>ix]j/nRP4m-=GOJM?8|)&5:mcw|i#XCi-#{dI;iDT<?');
define('LOGGED_IN_KEY',    'zt$-UUO_@)w{S+/R]4mwpkU%G2=#dM#lehKoHqkJwi+h}I -d|OSO-8RG=couA/ ');
define('NONCE_KEY',        'Lc#p8~+Ky%Z|vZ[-_x=er@FSU+W5n4VJiS,|~}]JG^GzWlR~@HxBw)12r|_S%9Ya');
define('AUTH_SALT',        'oU4,XcT|-CO2Y8%8}W]Bnj=&oX{H8_p/<2+Wx?mw6SE~o{9y53%eABP,F)lY!khl');
define('SECURE_AUTH_SALT', '#KM{mMpNos|xKgh;P{6I3B}Nr7OD3DpZ+cS*6G1Trl:GyVO-Tf^DRP5bS%u+4(/O');
define('LOGGED_IN_SALT',   'nMOnOO}C}>6w lq2(+$@6-#L/mR6~xX lni:Zn[w63!SK}K%,.2EChzrC;x2>My^');
define('NONCE_SALT',       'yuLG?l&46r-i3wHE+=~.PX^w1Vc^_MUzSM.U&1 #yJ?YDWR%BhS*ktIx@7;YX Bj');

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
