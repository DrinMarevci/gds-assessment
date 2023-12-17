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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gds-db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'ao|lIn$?v:H7)4[0?6!4Ejsp~6ya}KOB@k.UZv(z~:Ds=64-{kJ*V%Ep/K]e<2|?' );
define( 'SECURE_AUTH_KEY',  '9>dLa_Ym!{&Kpy(90m2IJf{wmUvg>.hmV:nXicZctuIx?b3&xmf)tIU[7rm%x[cA' );
define( 'LOGGED_IN_KEY',    '~|/&ngp1@W7w6Rl[Lk~i7B-4-Sg4|HmA9|DjHVck@Y.&cJ |ib@267G6 /=_FZ+p' );
define( 'NONCE_KEY',        'ck($?s3qS?83nDN;->M6<t#WE&5}=~aMnZ6?t>(O-+(ECT/@S3ac$`4~cqWVe-8=' );
define( 'AUTH_SALT',        'HrF;/vgm22lH>u|MFLf^floHVYz4Hk(ba(0yW63?U()b{SY+Si.o.&?`Ut.?i=@a' );
define( 'SECURE_AUTH_SALT', '_LF?u.oiz^g$z`n}NG-yb@aX<9`R?}q%$/7HZ:g(Qsr`%0ZHZgCI$&t&,zB;7js$' );
define( 'LOGGED_IN_SALT',   'lFt7zwc F>2p]-Yk(4Ym;/~rL55-M|MIIoG.[wYYW, ,^F>_/qA37Eq[4 s5A(&0' );
define( 'NONCE_SALT',       'XC#%({%zzjpPh&9ZXK^uYc^p@%j`p*J&S~,6e^oM_L_@M/=}%uP[y~aXUNt!!d!f' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
