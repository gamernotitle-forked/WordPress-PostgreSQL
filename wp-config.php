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
define('WP_ALLOW_REPAIR', true);
// Sendgrid settings - Read in the sendgrid auth from the config //
define('SENDGRID_USERNAME', $_ENV["SENDGRID_USERNAME"]);
define('SENDGRID_PASSWORD', $_ENV["SENDGRID_PASSWORD"]);

// S3 Config Info - read the S3 Access Keys from the config //
define( 'AWS_ACCESS_KEY_ID', $_ENV["AWS_ACCESS_KEY_ID"]);
define( 'AWS_SECRET_ACCESS_KEY', $_ENV["AWS_SECRET_ACCESS_KEY"]);

// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["DATABASE_URL"] ? $_ENV["DATABASE_URL"] : "postgres://hbfftuwkobgymv:8147829f2aaadfcb9bac7c5c1386484cf678f4598b8854d879dd804ef4364e7f@ec2-174-129-255-99.compute-1.amazonaws.com:5432/d4m27jhr70eeep");

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'd4m27jhr70eeep'));

/** MySQL database username */
define('DB_USER', 'hbfftuwkobgymv');

/** MySQL database password */
define('DB_PASSWORD', '8147829f2aaadfcb9bac7c5c1386484cf678f4598b8854d879dd804ef4364e7f');

/** MySQL hostname */
define('DB_HOST', 'ec2-174-129-255-99.compute-1.amazonaws.com:5432');

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
define('AUTH_KEY',         $_ENV["AUTH_KEY"]);
define('SECURE_AUTH_KEY',  $_ENV["SECURE_AUTH_KEY"]);
define('LOGGED_IN_KEY',    $_ENV["LOGGED_IN_KEY"]);
define('NONCE_KEY',        $_ENV["NONCE_KEY"]);
define('AUTH_SALT',        $_ENV["AUTH_SALT"]);
define('SECURE_AUTH_SALT', $_ENV["SECURE_AUTH_SALT"]);
define('LOGGED_IN_SALT',   $_ENV["LOGGED_IN_SALT"]);
define('NONCE_SALT',       $_ENV["NONCE_SALT"]);

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'en');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define( 'WP_AUTO_UPDATE_CORE', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');