<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'u797583539_pagi');

/** Database username */
define('DB_USER', 'u797583539_pablo');

/** Database password */
define('DB_PASSWORD', 'hQ_7qgm@dH"$E');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '{m-{q87}`u7rg?~+W6xC& CZ;zp~YZW,YWl>)V%&~(#i2z{8LAZW?;N0c[uYd;{,');
define('SECURE_AUTH_KEY',  'hTGx+<JnXr:YMG?!xih]9Cn(!?:lK6ePT&&F!@{:/Znsk,Qx*rncwSK]5(_e[5sI');
define('LOGGED_IN_KEY',    '[la=ERgneuy4.^^Nh,B/svNM>|z9&sUi$=XNQ]pg#le3(,KLW04Q@;M|m.VpZiC_');
define('NONCE_KEY',        'Y}VJgS.2om6(7j/%$J)Dd*u^cb@Bb}j+WI$[^hXhGcApMZ,S%@lh>YLJY)UE]Vrv');
define('AUTH_SALT',        'Ewt9)]=|@ipt#Ye ;:JC.S (B,H.gu0<*P>L*LHzvuHv%W;L4f#v^$X(J&w5oxNO');
define('SECURE_AUTH_SALT', ':o{J>1KcxeQr]5{?rE^#**^ s=7V]hwg9eb$a)0],b;{/Fwk$Qn~FbV(x]<%)_;k');
define('LOGGED_IN_SALT',   '^qY88<Uh$9JCR,l|FKVeN|Vc~_e?kzt,6<7zD$53?9<xA>0{ekDq4;jnNMKg(EtI');
define('NONCE_SALT',       'bjE>Vk1uh4hg:8-r-CtmAYtG*y)F?xS{WY113M?G-iuIQ#U6- r*I}vNOntynUQ3');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Mp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
