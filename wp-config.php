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
define( 'DB_NAME', 'an411291_db' );

/** MySQL database username */
define( 'DB_USER', 'an411291_db' );

/** MySQL database password */
define( 'DB_PASSWORD', 'X62EX9LZ' );

/** MySQL hostname */
define( 'DB_HOST', 'an411291.mysql.tools' );

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
define( 'AUTH_KEY',         '%^{d4z]}6`f@oS~RAa^t<9K{8@CK]vg!MsmTe*K=BWAEyfxBV;W&SN<8hk~a{:Gj' );
define( 'SECURE_AUTH_KEY',  '>yqtRV<?^SuY-;K<$%`ki(w9h54:3 .ugpR:J&,|aJKt.JYEWP9/y-LGuO(EF~my' );
define( 'LOGGED_IN_KEY',    'd:h.p=YgAQ}A+.L[>k>)}GjB@^u3RA&#QwBs%D;OLLuFOk9H~ tM+(5Sz{r?b_s|' );
define( 'NONCE_KEY',        'l]=,DVP7g}i?aUy+^2G$i0H&.qEX_/2@8fT^(l;% f:| d8J9U?$>72^;wc,<38/' );
define( 'AUTH_SALT',        'E}!%&86;][m;HFmMx47JL8u1nUq6s5AN-rx>/u#>U`N1Uec,&E.!*c/L.km~dl~(' );
define( 'SECURE_AUTH_SALT', 'LW3yV_}z6zQ.SHAna$Ao(fQq6~3(RS6;ipCTR@Px|H9[A!Ve=WLc9:G!$}G/a&n1' );
define( 'LOGGED_IN_SALT',   'Y-_vJUv#+xe_68BL2:dE-)/bT7PjrF?Zt3;cliQ$F{o`hh^SwhPZ2# Ty1+=lzJ9' );
define( 'NONCE_SALT',       '/Nj8[Y)C}:&~p61CRAIvtnncRU,.cRfm]J1.q}xSshpn9+-ijxTA?n0U$=THUT^x' );

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
