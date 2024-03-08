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
define( 'DB_NAME', 'wpmyself' );

/** MySQL database username */
define( 'DB_USER', 'wpme' );

/** MySQL database password */
define( 'DB_PASSWORD', 'MeBe!ngMe' );

/** MySQL hostname */
define( 'DB_HOST', 'mementusmediacom.domaincommysql.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'qq-)_l|F1Bq&vP>rP)p=EG>iJZH:|^vk,DzkQ5aQ~zjKIi(cdbiuD`>F.X51xq@z' );
define( 'SECURE_AUTH_KEY',  'JmNq_]Q#GN#2fR CJEl^F:YUXD:_&3XfDt<w>!ZP[q6gerb1g)0h:EBB,we_E8hh' );
define( 'LOGGED_IN_KEY',    '3y={geI4^,}kjY4na9]e4.f[m~)pw&`WQ=9Z^0Prq/uH*,!CxrYP& vQngjKf%0{' );
define( 'NONCE_KEY',        'j.+j=({D/ y_PR6itRC*cm[YVA@1:-]Zyr)n5*waNCp0evCt!TF e>%IkvVI.Eo;' );
define( 'AUTH_SALT',        'Bf5Pkvz/?h8?kfMG%ZGfe{=?yB>q|`CS&8g?*f`X-z)hqN`c%Mib6Ch%W&fpX4br' );
define( 'SECURE_AUTH_SALT', '@FtBWWe=Uj=z(.>|Gz?IXN*$A3Blk<adFl[^mQw_3[?4gc>KxRbwYWT@=<_hsY3V' );
define( 'LOGGED_IN_SALT',   'K/_Vly-iVtYSP;tdkY<j2@ 9:M:JAZ:^$Py}SDtFF@@X:,Uv~QhQsO8z]%SI`f%`' );
define( 'NONCE_SALT',       '|.{%qlQyF9pqmQv0SS%43,I2C*NCMjE(rU_$4n;A<sIRqA$`wEB oY=K~7@,4gqc' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'me_';

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
