<?php
define( 'WP_CACHE', true );
define('WP_AUTO_UPDATE_CORE', 'minor');
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'grupoeb_tiempo' );

/** MySQL database username */
define( 'DB_USER', 'grupoeb_tiempo' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Trabajo64+' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 'p0IiHz2x+n5*2aj34W#a1)T~ksdKYJXgtq4gsLqQ9_3#[!Q;KxQx2tFQaZ%OSmi2');
define('SECURE_AUTH_KEY', '0495~wm(u3hf(%Vgw828gQ(-nOX%39COr!0umR~4!4Sy0i27VN6B]_RRC2HV9vR-');
define('LOGGED_IN_KEY', 'gb*a5:C0Sda7d4]7V[&_+I3+4~%;5|E/59MzS9-876qK|3_)&_27J[q-MV9h1Njz');
define('NONCE_KEY', '~t)KOoo6umL[W+/V8R)473v|Kl2Pt_1+Y1]C6Id@RP64&n:*(9Y4i&Z+Hpmpt9d:');
define('AUTH_SALT', 'p90-nZ%+j;3k@9Zq06J_gXM5X+sL3#O:8:_u#*3d5Ha)2pJuV6sJMF5[#*7Ij~Q)');
define('SECURE_AUTH_SALT', '!~)SWp-eDeUz*Q[kPm8A8lM|imS8Pj[H_w9q7:Ez|mr8-)35g8HC6@Z2u*Ov(k9q');
define('LOGGED_IN_SALT', 'TZ8]U7Mi_V174Lh&d#EVnc5mK6Z%o1+z&gr]Cnd*(1CT)0!!/G%n]7(&G1M4eIX/');
define('NONCE_SALT', '3*V6i]fUHHG82]Ao7Z2gXz+/|lFKL0Tb2]GTIF%7#&tUTdS42TjLj8!Km0LS6[el');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
