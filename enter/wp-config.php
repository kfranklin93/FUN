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
define('DB_NAME', 'wordpress_62l1fah3df');

/** MySQL database username */
define('DB_USER', '8TGImk67urp9z1P');

/** MySQL database password */
define('DB_PASSWORD', 'bG78UquPtDD6vNij');

/** MySQL hostname */
define('DB_HOST', 'joinfunclubcom.fatcowmysql.com');

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
define('AUTH_KEY', '-XqaPxK)kGDt!EHMp&SMh^RMhUbKwIR}&j];wJxgTDM(H;]o]jSLQLJuLQpohfNH(h{ttyY$>H/OGv[-Qfg*_gplErBU$uo{/INv{eotk^g^BEwe<QfG$K*y}Bga-bfH');
define('SECURE_AUTH_KEY', 'HoxyH^IHt^fq_xT)VtD]^NbIq{%n{)sB*yQ{IqTjOdshfod!}aXne_w;J&nu&|bwQKcnzcI?&NEp;!zaeiqb<D;hoU(pW*SzEqAa$?}JnVIjj]heY]qn[[B_n^WHJ@FH');
define('LOGGED_IN_KEY', 'L;LFtZ<iJ^yM&)V_v+Q%W^(??){goNRU@o|lvBWMS/M<HD*jCJRYe@%dPC=_sa*[NSHJHonxCLy)<p}%{iqvPiEbWJ}iPwQi-+@olzXPU)aZP%|hY}fcTRgA&>GAd)?A');
define('NONCE_KEY', 'Mf>{yy(%*P!<>=yU_ngxtdF!ge}fJha{lo-M//PHjKa/UGaN*x?YJ&Pb?R!xnCG@_!b_g=cyTnXw+Q=W]s]NrKEKlcBhU!>bO?;skENcNUja?-vjgGhqT@f|cEe;@i<y');
define('AUTH_SALT', 'IHsRh-im||wYN@yts{=[NlbUNC|KK/Plwtx]g>tO>J-<{]WQ+p@F(U(!}))>Zlt/Nl|pw!Vs+%uS%pTNAGD(&?aoLBFF*p-yXHyc_]NIzX++pFaS}XpfUtRW|rJd^+>B');
define('SECURE_AUTH_SALT', 'VtdrNlx!fp]@-E|Cgnj|Vxw;*DBUk=-Hcy;?mniYovg(Z/]leT?uG)RwL}oWGr-v<(kzYhY&rt!&X=?_J[ZGOngfnbMbDGgI=O%/SS%A+hrA<}Ln$TtAp?qKO<vvUN?T');
define('LOGGED_IN_SALT', 'uatmAAfT!q<JwmRyPE)l)dElb^yun{PIJevS|>Lx(!-GOrkpiJf)R<oXpgpaTE|YEE!QNTJ?<&(uE_)%f]<lYZCTG_)i@gbDUVeJ)?CQYRdFqQhR|LK+kF}GDmOEt![b');
define('NONCE_SALT', 'WGMp-b*n_t_VcT{+FOAOtM>fNPabIXkjND=kerNwZZ)DhUxxk[nbP?&zMVZXCs|WDx%t=)GtHz+_P/yn{xGzmh>zx_R[FUWg*x$DptD@q+s^hqN<Kr<tRrO|=$@OH!A&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_qogz_';

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
