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
define('DB_NAME', 'dev_gibbs_no');
/** MySQL database username */
define('DB_USER', 'wp_dev_gibbs_user');
/** MySQL database password */
define('DB_PASSWORD', '^Dt8145xg^Dt8145xg');
/** MySQL hostname */
define('DB_HOST', '144.91.88.30');
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
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
define('AUTH_KEY', 'd6gJ1QO0b3ct;Tr4L!!oE6k:7[a4M42zfrG4V9Yk!yy(02ah*Lg89vX7@L~e)PGF');
define('SECURE_AUTH_KEY', '*6iWEv/M792@5/tdY5_38[oEkiL;0P+XlB&18)DfJ&t5d5!pwWcslr%Q9*1T16[!');
define('LOGGED_IN_KEY', 't/8LEJh!%p[KoBq~&ma)c)2[m8ZnEh7GX5Y|~0Ic75hu7U)EC6@3P3d]S-T2#v:~');
define('NONCE_KEY', '8fW;F@v2qjb+L79kB1Oz8B[*;2J85p_69(i:*2&K~6xX7u(9CU[(+hFpPI4GITAm');
define('AUTH_SALT', '0-27n#iESa48&2H(q4hFzTWQXx%*2://[5+5t8zE!4;4dZWUiJbl2B[9~1W!#2;s');
define('SECURE_AUTH_SALT', '7g_5&gh:&dvdN8*c~*eJQf8u@Y(-1vM2X*7]2Z8:*3cWFrd@#y76Xf487ti+E_4i');
define('LOGGED_IN_SALT', 'C!PQlE7e1f[82ne01H7-3RoM:&Wc!Q7:9!!;@nopJ98C~Y1J2q%81H;[-Uunm19X');
define('NONCE_SALT', '3|~17XUU/#|92-!%)lf*616F8xCLQb0@|5g]p68Vn23x80GJp!)-j1Q6iUfsp2b3');
define('JWT_AUTH_SECRET_KEY', 'RH?HqV0O. L:[|[Cx:N>;n8lVJF_uJE%W%f./n]-zX&C&E|1Rs#)=)=aCqV:ck=B');
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ptn_';
define('WP_DEBUG', false);
define('WP_ALLOW_MULTISITE', true);
define( 'WP_CACHE_KEY_SALT', 'e909ed19fc9e9da73ad05920c3c0f856' );
define( 'WP_DEBUG_DISPLAY', false );
define( 'MO_SAML_LOGGING', false );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
/** Increase wp memory limit */
define( 'WP_MEMORY_LIMIT', '2084M '); 
define('WP_MAX_MEMORY_LIMIT', '2048M');




define('JWT_AUTH_CORS_ENABLE', true);