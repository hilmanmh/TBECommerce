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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'id6997668_wp_fe9f56f6b161eed554070e050e931d96' );

/** MySQL database username */
define( 'DB_USER', 'id6997668_wp_fe9f56f6b161eed554070e050e931d96' );

/** MySQL database password */
define( 'DB_PASSWORD', '610eb464f23eb89c731d23e0112d8b346e87672c' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'E;7@)EcM @HboXiXUF68WX8Los3o:-%Bgp;Wvcsp7UYpTa}Sp(Q:>32JXWSqmM}o' );
define( 'SECURE_AUTH_KEY',  'IgYXdmyUT`QhZsr(0{M?O>nH=au42^A}6H}w+C5=[sA{(|VIF4kN@&gkoAIa4jWt' );
define( 'LOGGED_IN_KEY',    'uK?_$o`,vJ~][.%ag Invnu!(s-M8TLj++$u)!K]PO8EQsl*A}RR%X[ivNR&:9,v' );
define( 'NONCE_KEY',        'Z@nn5o!Jqskd,b,<cCWO.m~fII&N^V55O5JnGp8i2<4LY8@GIb+9pUsRg30>%*O?' );
define( 'AUTH_SALT',        ' t2Bllb:~ZVcMbxQDGTx@p]`{2[D=bfH^:~.RYpKhhKq&#@NIRF?Pc2o=I2]v04!' );
define( 'SECURE_AUTH_SALT', 'P5S&LJgWfP]{wve4z6?3II7i>L+G$N5=lZB*$iZMR8sapT<K HW3sOXBwspH8xYI' );
define( 'LOGGED_IN_SALT',   'IPZ]1on+`uKu9C<JRZG6m4YL`b[Ye$UZ5@*v{JvG{]l^t87^Y;PmsHhWS@4,YSlo' );
define( 'NONCE_SALT',       '0(ajq|vi`(B&l%BOU./mJ.xdd 2vyyb)YS@DOj$G,S>}~MS95Fg}=5c75X+OvS|v' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
