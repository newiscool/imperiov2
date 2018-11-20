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
define('AUTH_KEY',         '4RA6h0oqvv4xEgSvFy11bRPcX/90TBiuwJmRI4APHHnQWqhIGJ2c4SIrB+pnyx5Y2q8sbLVb6PyRKMQnXOPvFQ==');
define('SECURE_AUTH_KEY',  'hT0UfdXSXQjeKdBnJYGES3tnJeLgCeLK5i/gqhH5JQskF78y1MV6ps6lrpTlShYnWod8Ir2isdwGsXVvJGHSSQ==');
define('LOGGED_IN_KEY',    'UaLxPPncx1/OUTBkRxJ8EIpm/okWV2znfPVi5krjt6B/0Ip9OD68Of6+zDnZG6eaznRM3jOW1ZwjwdM6y8N8PA==');
define('NONCE_KEY',        'eFK7h2QhRSrhbEd2uFLNkBXmeVkP+HjsCB9RQJAg5FC7VeFDP6LdILExT+Cw3t6YymgvGJzCTLsA7D9E0DMtqg==');
define('AUTH_SALT',        'y0iiTSOUGx+dsxyW1oHZ2tTTVZXsgbHewmQUoIypTHSa5LB5YTithmg9fnrcmwWXjlqBKfEOabESQ4c/pFeyOQ==');
define('SECURE_AUTH_SALT', 'XJt7OqWL60m1qNpn2Zy7x8szQxj8LSmkXK4YvdYG9a5deZsecunFk0ohZRlSD/MtqslwsQOFGVpJ1b5EqwLlSg==');
define('LOGGED_IN_SALT',   '2jSShSHfP6W9JNbIIgxIuFbDnlKzFMV888IV63ySGKdhmCrx98Wp7xL3rgkKuJram0J/UB0f/ythc6VTprF/aA==');
define('NONCE_SALT',       'OVDCkbngOVR4Hmt7yDuXGTFIkZkQ1Qrw+B6m/A/bdgvs5bbwqDZzfQITGR47yVP1r4FG1KT29fhUFiaBnxjvgA==');

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
