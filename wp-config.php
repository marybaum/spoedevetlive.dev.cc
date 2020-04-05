<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'bearbearDBvb3ym' );

/** MySQL database username */
define( 'DB_USER', 'bearbearDBvb3ym' );

/** MySQL database password */
define( 'DB_PASSWORD', 'EY0QBpplW4' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'LS[DO-::1dsp~KZP${<6Xmm+LbTiIHX.6;Eexx#metDTvzFUNg}BU^3}Bnrr^MfYn' );
define( 'SECURE_AUTH_KEY',  'lpWihxDSLa#55Kw#~;apl-GVOh:CfuAQIX.32Iu.${Xmmf{66Lx.+]xUk0B4Jv,,0' );
define( 'LOGGED_IN_KEY',    '}W9ODS~;:Dp~w#Shh-CRKZ|58O-[!1dsPe]A2Iu..2etm+Haap5LDT*;;Dp~x#Si,' );
define( 'NONCE_KEY',        ':t~HWWl1G9O-][8l-s_Odds8NGZ|5x<Tibq6LLa#6;Eq.*;apixDTSi1H9P+]Mc>$' );
define( 'AUTH_SALT',        'xXiixDSPe]*;;Dp_+]Wl}Bn$z>UIYXr7MIY,33My<$u,QjiyEXPf{E!0|Rgds8RRg' );
define( 'SECURE_AUTH_SALT', 'gJ77}@B}$n,zjUyjUEYM7>M7<y$nXZK4|C:~s0!sd-kVGkVF0N8[z@oYvgRB_teP' );
define( 'LOGGED_IN_SALT',   'XPIy3.uikVF0RC}0!rc@ocNrcQBYJz7>zn,zjU9]-xhSDhWG1O9:_G1!soZKodN8V' );
define( 'NONCE_SALT',       'M}3<y^rbdO8[G1_s1!sd-kVGkVG}K4|w4|vg@oYJ]+mWteP9eO9]H2_t1_td+lWH' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
