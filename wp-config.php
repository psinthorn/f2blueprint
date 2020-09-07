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
define('AUTH_KEY',         'epSLLoZpsgCqURDtpm6iMR74Vn1csKUiM+dahwjZRnDChRupQjM2c5Gn8iXx5ycFShmyW0ZuRkkjc35ZEf7ruw==');
define('SECURE_AUTH_KEY',  'BzHpcQStxJlzGCt7lm4hbZ/2cQgCb4GzyFh32gOD6CFkImdZdCKJjk55aMlXieehqQ8dD+IKORrddINWCPEFfg==');
define('LOGGED_IN_KEY',    'mMevY0U7S1w+uwHqAHTrq8qCkm4SVguVoMOlUkPIIynjs7eYqVnDVxemItRwZsUCvkoLzkadzi1aRhP3wKdMRw==');
define('NONCE_KEY',        'alEZuk/YkxeHvVooCVljf9E8w0B1WygWqA47pdjdPrewdLpepaTpM1N1RwzbMvC+CNNLEQOZ0MrFe1ggOJF7NQ==');
define('AUTH_SALT',        '1KzFfsU0Ht68tQg1XgciazZ/Zxq9j8/Yy1FZ9IcA7v2OHi//quy+v/LBTIHi8CiCm7q1XHInwWJRJzY7GWIsRQ==');
define('SECURE_AUTH_SALT', 'T+NZGg8LUOR0olpufU3iLk6ny2icShybY0igLdAqC3T88K3ay0aQkHS3Oks1X1YI9H2PODoBLNIqvU3kZQb/lw==');
define('LOGGED_IN_SALT',   'K/nHGwO6GswVBE1/yY298VMpXiYEwZiAsmqFAu0EHs4SQ5gfqemG+1nxvFfI6Wv17hbldFJuXCDa1cMtymqHkA==');
define('NONCE_SALT',       '2dBaz7U3kosWQTh/NJmYl7VmfgVnWLrPZVw81OBOVB81ECE4pWVPX1tt0TIGT3aZxV0fyLJdEkuFbpVJb9SrfQ==');

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
