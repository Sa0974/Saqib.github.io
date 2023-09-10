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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'saqib' );

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
define( 'AUTH_KEY',         ',Cno&{?y6=X_VF5Q;RHD`SEg.qk}Nr?wK%cJsDIT6!yg}a9Q{ZOV~4@Bu8;SBsC[' );
define( 'SECURE_AUTH_KEY',  'Wn4D29IDR:HZ??R+!u.YvP_-}zm?r7yDxwe6,nY}J$l|3;f]P:c|kN`*Upsr|18c' );
define( 'LOGGED_IN_KEY',    'i~z9e|673$py^x2rKa/dpkOu)#={#{Iq9@7>)]A,>I3]gq>$2vI{y$)yt3~Y%>4{' );
define( 'NONCE_KEY',        'A1b$l05Ho79JG TLI^$nK|LNkAy)^.]!}W2;nZUt4r<^cR>N]D/#^b-|ftcl_y+H' );
define( 'AUTH_SALT',        'FA@^Ls:l]2u9f}-5*s>). fK[/T6)KkwQ]U_BZ5pnvq:Mh6gLwpvkFfPEE{o9a~R' );
define( 'SECURE_AUTH_SALT', '$,_Y}-p+v1EG#j5Sa6CHqOkY9!&F}U-M|RznyX(Kqr.KqvXK@Zbwm-`lp08nua`R' );
define( 'LOGGED_IN_SALT',   ',.CCEnnWw(5&`10r`e,Y,FH/AhtLY/U&6;bu5KS/P|wNEZ!Q$U}/K+R^VN_Ys$oX' );
define( 'NONCE_SALT',       '*t8nB;qz:Z#m_TG-%5,pu^x=+X=DJzEtK*hFkV:=hUZ(YqgQjVk.Ku2)J2tk-%~s' );

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
