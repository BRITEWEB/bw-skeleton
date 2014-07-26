<?php
// ==========
// Debug mode
// ==========
// define( 'SAVEQUERIES', true );
// define( 'SCRIPT_DEBUG', 0 );
// define( 'WP_DEBUG_DISPLAY', 0 );
// define( 'WP_DEBUG', 1 );
// ini_set( 'display_errors', 1 );


// ================
// BW DEV CONSTANTS
// ================
// define( 'BW_JS_DEBUG', true );
// define( 'BW_CSS_DEBUG', true );


// ================
// Main Site Domain
// ================
define('DOMAIN_CURRENT_SITE', 'bw-skeleton.dev');


// ==================
// Multisite settings
// ==================
// define('WP_ALLOW_MULTISITE', true);
// define('MULTISITE', true);
// define('SUBDOMAIN_INSTALL', true);
// define('PATH_CURRENT_SITE', '/');
// define('SITE_ID_CURRENT_SITE', 1);
// define('BLOG_ID_CURRENT_SITE', 1);


// ================================
// Post revisions limit
// ================================
define('WP_POST_REVISIONS', 3);


// ================================
// SSL
// ================================
// define('FORCE_SSL_ADMIN', true);
// define('FORCE_SSL', true);


// =================
// Database settings
// =================
define( 'DB_NAME', 'DBNAME' );
define( 'DB_USER', 'DBUSER' );
define( 'DB_PASSWORD', 'DBPASS' );
define( 'DB_HOST', 'localhost' );


// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'wp_';


// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );


// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define('AUTH_KEY',         '>~%-:w(vRP$vHfYwxm&sLVnz7cko)#G}uXi xCHXQ:QA-!po22u<-Rl;(k}w6?ht');
define('SECURE_AUTH_KEY',  '6/@xdB$&Yh|foL1zvRzsWB5x&wV5D}qTSY!$?_x9Wdq{syn;h*-B+ 59f5W62qmy');
define('LOGGED_IN_KEY',    'U7}!al#P>E]-KnRy(#V8;>_o|4(!P+}ME)|Zx=:xa/7l%U#]HsN6K;Iv/>8A7}-f');
define('NONCE_KEY',        'KzT f-2|.+%w#s!8.&GE#2wHh|O5?F)L~FN@+%C5l4.n+o8LUnF-KKiDn<! N`FU');
define('AUTH_SALT',        'lF(Ob!j{T7.%>ODzmL;3gf9pgu>t=<CIpP-r(+KT3GjJg#X}GV1r|e8Pd^)EZaWS');
define('SECURE_AUTH_SALT', 'VLI3O}p|+/bFsm9/ZnialKL@BJqY3?v(W,-OQwwIzt;B%RhHBC6I}f1`|G_]%C)g');
define('LOGGED_IN_SALT',   '~#J&-Ixrx;eN7.:=LTn:~QCQ{y$6[+v-9r+Ow/gCyp-+3yqb{57e)-*=45dX#.F_');
define('NONCE_SALT',       'vJ=mmP-^ecOM~TH@m9p1d+(qppdTEJJsAI?yYES|Of^hM|o G(s8%GK]ImxOsoIw');


// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', '' );


// ================================
// Define App root path
// ================================
// in most cases it's simply the current folder.
define( 'APP_ROOT_PATH', dirname( __FILE__ ) );

// If we deploy with Capistrano we need to find
// the real release path of the 'current' symlink.
// Assuming that the wp-config is in the shared folder.
// define( 'APP_ROOT_PATH', realpath( dirname( dirname( __FILE__ ) ) . '/current' ) );


// ============================
// Initialize Composer Autoload
// ============================
if ( file_exists( APP_ROOT_PATH . '/vendor/autoload.php' ) )
	require_once( APP_ROOT_PATH . '/vendor/autoload.php' );


// ========================
// Custom Content Directory
// ========================
defined('WP_CONTENT_DIR') or define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
defined('WP_CONTENT_URL') or define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

// =======================
// Use built-in themes too
// =======================
if ( empty( $GLOBALS['wp_theme_directories'] ) ) {
	$GLOBALS['wp_theme_directories'] = array();
}
if ( file_exists( WP_CONTENT_DIR . '/themes' ) ) {
	$GLOBALS['wp_theme_directories'][] = WP_CONTENT_DIR . '/themes';
}
$GLOBALS['wp_theme_directories'][] = dirname( __FILE__ ) . '/wp/wp-content/themes';
$GLOBALS['wp_theme_directories'][] = dirname( __FILE__ ) . '/wp/wp-content/themes';


// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', APP_ROOT_PATH . '/wp/' );
require_once( ABSPATH . 'wp-settings.php' );
