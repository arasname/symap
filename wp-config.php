<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'pxvofmzi_wpmap' );

/** MySQL database username */
define( 'DB_USER', 'pxvofmzi_wpmap' );

/** MySQL database password */
define( 'DB_PASSWORD', '5lb@1S@0qp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'tegrxmny6pkowhxr88dfsq7d11psrzpmcyibmyoook8ow67vjwu1dglh3hmjj7rj' );
define( 'SECURE_AUTH_KEY',  'opczyazymg2rf4talcoewjvntxgocgiejoq3k03c90pfxn5ay1y8vbhqbiypcj5t' );
define( 'LOGGED_IN_KEY',    'qcqki9besgoyywnpuvwdjftx8of8jfx59fjc94ncchzhgelau4uqpbjg3ou7h92f' );
define( 'NONCE_KEY',        '5nrkptfgdhlzckvy7nrm0jiefblfpt1fvfyg1i9mss8dj6um9ynopqvmjdmiblyk' );
define( 'AUTH_SALT',        'ugrfydorguccj6yo6xwwiwnvqhsoit87cbccesdbuubnxgpoauhtttdo0fphnlid' );
define( 'SECURE_AUTH_SALT', '0j6pdbi7nm20z4jnkg8mflowety78rhxzx3amsi7hmpocxahd2xdzempvipxztxb' );
define( 'LOGGED_IN_SALT',   'kflbknh1ohv4yozhqwfibognrfpjckstmapw3gwdapjin3mjdo3yeg7g9sv7cdjt' );
define( 'NONCE_SALT',       'sqpwgi3scvtxkt4bvj3ggbhks3plpp2yiluuqozegkt0fgwmbsvgawhaqiqhgp6v' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpmt_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
