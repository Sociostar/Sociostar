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
define('DB_NAME', 'proyekla_wp22');

/** MySQL database username */
define('DB_USER', 'proyekla_wp22');

/** MySQL database password */
define('DB_PASSWORD', '68S1p.4wV)');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'pxcmyu9geqkhktfdoki0v7ziruzr2u4nxgtvbkpzp9auyg3fptgdpqmdlfik5lvb');
define('SECURE_AUTH_KEY',  'fyiwawl5qkkoz4klujzkuubobeayy113tdy0w098w0z4hmkjoxs5e5fvdreu8zsu');
define('LOGGED_IN_KEY',    'lekpagjibtuxpqipm2fbsjwsrvioaxxaagblp6mbnkjyrj8etjzjcs56e2uhpk8p');
define('NONCE_KEY',        'leo0ki6unfp3mkbnbnylelqsqerdyzwyrsaspdkn5ulevyzoxghcjwjvkq3zelyd');
define('AUTH_SALT',        'azfmpa1h2pdioastvsst7quehkxcgxw2ypzcez16kg7zeillygdnkseglsqbstan');
define('SECURE_AUTH_SALT', 'cw1dekscvadmyjwya0u5gmwvflkmfxd8maoe1pgf06bk9nar0wtd3exisotjwzow');
define('LOGGED_IN_SALT',   'htr9e7hne0i8xqf3xbhi0fclgb55icqnmqreovspdqjhlggtekvd1ot6gmxvea0g');
define('NONCE_SALT',       'welbcf1wmoqrcgvzagoebqt5yn2q2l7ksdr42e5nclrgon8a2tzpcapnpheyvzeu');

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
