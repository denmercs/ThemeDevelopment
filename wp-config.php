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
define('AUTH_KEY',         '+6gcoxe5iipwx9YHcMEvmHKuYuhBZYVr6dfa66FkMPWBEIlaTRATHZw1smp2h/YhOURrVWeheEEkXIJJx0NIRw==');
define('SECURE_AUTH_KEY',  'O+rPAso8dMQnis2S93ND9AT/3m2ZKFeY2iK3Cs0c3M0DI3iQuehlWzImy68BY/yFiI/ya/yqqAlGaqfMLle4sw==');
define('LOGGED_IN_KEY',    'o/duKG/7En6x+ok0pTu1PYk/KNvTsczmNKD3c42FJByqTnYkb5HmjueIR2SqMk06ZY0dAv7ODAeeXRQ9sV95/Q==');
define('NONCE_KEY',        'gX2oHrrbGQnx1jH3PXWXi0aFJMfSHXx8mRy3XL/CKbzfLmsHvlQ0gRHWHPYfRgLxonVlwQtvGmizqpjWNL5A5g==');
define('AUTH_SALT',        '/iwhQr4EXNkPjMJgc13i4dOsHygc4i82QuiR74S1UyWX4VkuO2SwphDyuWKtHVvRQfEFStORwCj9i1wYc1WfnQ==');
define('SECURE_AUTH_SALT', 'VOie6VcngcXibUJdGoUs8ihUzpYHLVRa/B3i4MfjWsYMMwRvJT+WLCdUX6atD/znXDXa6Gp5kn2eUrEyRWva5Q==');
define('LOGGED_IN_SALT',   'wVRL3OykFTPu28eexO0DQSTHH93JOJpfrFUDW+JtH5o+urDe32iLwTwTMG3D9j/LwMqj4DmwQ/QKFK05P7hExg==');
define('NONCE_SALT',       'zbVlFu6IWNKtz/YPXPfcoY4iAq4Orpd6Uq4m4LaMqjOLX6DyQJFsi0MOcuxSEbtgjCeENdizaIrL0J4wclMUag==');

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
