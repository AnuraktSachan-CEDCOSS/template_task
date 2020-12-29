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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'Cx659OdbwwnMD+Dj4AYXwN/+Mh8JsUquVmoMXwueKMWFRe3rgH0iUF4CeFqCS20td6EbLAsy2Y5WS30mBcl1Qg==');
define('SECURE_AUTH_KEY',  'LalcayQU/sbzJ1rnq+se8S3ILtj/vt+1C6fe+D6LfnbBJ8Bot+zfAO38eWEmM0oPzkPexKcHAqwA+Z5w5Jo3Vg==');
define('LOGGED_IN_KEY',    'RzN2NSlHn667Jb/M54SgxlEwda4vUIgF1uP8CIexfuyI424a8ufu/neLz8xYEalsk6TUrAcUZ8T7vZ74tVRc+Q==');
define('NONCE_KEY',        'ZPwpLVKO7z4Pv4VP/7EBYeNPWLvcWSKEenwh4ZzI+u/PARaNbHpZOspp3y8xJbiFsya8Umty3hq6hGlfwn7OLg==');
define('AUTH_SALT',        'QhmaXAK2dAmogdbHGUQvdXgtqruPrsRb+JRM4tMGWRbIXvIncK+ml0vcj6UCZU7JoKlVUmk21ZnpB1OER5qBJg==');
define('SECURE_AUTH_SALT', 'IoWKf+rA352QA2TJHZ4RQXahSRgCxe79vE8JrqgV39k/KqEefE4yCKkm4+4jRKQvWvjrMy6pF4Es5evWUdwasQ==');
define('LOGGED_IN_SALT',   'Wc+MKZh9O/kaWD9fIbRNXb17emIDrTl1t9olzguf22VXhVSTDiRbhyzAjFeuJr+x8tBRez9cqOpiLv3dwyhqkA==');
define('NONCE_SALT',       'EGZx9fsEo79KbFtWwh9zjpPHc+b0JIKW74gM5y6hyuTAfvF4G6p1GYFZ7T9P/LBMVi5DR1WPEStiM39JLt7yPQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
