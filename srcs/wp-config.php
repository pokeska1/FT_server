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
define( 'DB_USER', 'MimikUser' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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

define('AUTH_KEY',         'vnlO+v+Terf)V8UA7tcU)ZI7U8;HN|(X9BsesS</|B7Y#TDR_-,wfNA_#{=4^ws ');
define('SECURE_AUTH_KEY',  'K/ir-dpgwu&xw|Q4D^S#Qg+cmaq&{g;E8o:r^s 6`K&~|w;KFdveCm|c+wC<+7%8');
define('LOGGED_IN_KEY',    'lw^.UH>aorh/eOL94Zd] #z$wx-iMIy?K.tbFPC4QamW8%|=)-9wOLcpaWgWmN=_');
define('NONCE_KEY',        '>IZ3P:&uP%-oDt8h4x8y(<,NYS[1BTPhc*X+`QL5NotQ68D0`k|,%UM5.#PB{jZN');
define('AUTH_SALT',        '=s:^b!xhn$;S`3U<i%YIfmb#*9Vln~tlbY`y-P?#Oz6F~%YoT{Sn27gs)Xz>RcMY');
define('SECURE_AUTH_SALT', '0zB+;<2=H-VC&;TC+/nnJs!-;`&zL-YJNqt4,+I[:,t{@v>9K dA%?6VSK$O-+yP');
define('LOGGED_IN_SALT',   'vL%sKzNY0M9,{BLbGfy,2|HEY1y`oAL4?Le;G+;&v~1UVM_3kH*-bf1Oe|:yccpi');
define('NONCE_SALT',       '*?@|%:g^c~J;Oa^DdLN_rz-pIxaBl|>okLT@-#C VLjXd;<E`6c{,CAo(8NMwH;<');

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
