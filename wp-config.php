<?php
// ===================================================
// Load database info and local development parameters
// ===================================================
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( dirname( __FILE__ ) . '/local-config.php' );
} else {
  define( 'WP_LOCAL_DEV', false );
  define( 'DB_NAME', 'ab73240_wp_staging_paysyco' );
  define( 'DB_USER', 'ab73240_paysysco' );
  define( 'DB_PASSWORD', 'y^@c5bEmEeG*J8bSN@' );
  define( 'DB_HOST', 'localhost' ); // Probably 'localhost'
}

define('WP_MEMORY_LIMIT', '96M');

// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
if( 'WP_LOCAL_DEV' == true ) {
  define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp_dev_paysysco/content' );
} else {
  define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . 'content' );
}
// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define('AUTH_KEY',         '14g3z^/|;c$6:urq^g`DHWN_i!WZ.Ugc^cogzQD|uma )XJ@?&U:AwTg(fx/K!:Z');
define('SECURE_AUTH_KEY',  '2+7]R[_;).Z;C, ]Dlpt6H|5~g@ZZG$)|3mLy?=9P@*2klg#nCc,+D|Lt@S_+nt.');
define('LOGGED_IN_KEY',    '|-,+Ekk|uFd08%.$lQ|Kxihb?8UoE)h;-X{Gs@$%1cQd`,UUNB%X/YH^q`5|DAv ');
define('NONCE_KEY',        '|K [um@rCXCE|2?eN:?0/KXf1Wp~0Pud+STk_aya@e:_C%jGU%//o;3|Ls32r]v}');
define('AUTH_SALT',        ')x1pZ#A-N$1KU#|[%#zwC-~sG}D6#Lo6| <Ww-&w$j-W?P{9@+j$.:{.| Y|%W/J');
define('SECURE_AUTH_SALT', 'eJzzSxK05=-V]ybGC(FGnA`6]p)Jqhe&xTDPDI|@bhFs3ET*#]9py%1bj,gx ,cO');
define('LOGGED_IN_SALT',   'lAJ6<Xx_xO89Y/O,q-c+#fW+t-E:f!Dz,U.-7}v/n^xQbo-)J@v:8Yli#Q):+{V,');
define('NONCE_SALT',       '*p{+|{<@I2j[L4je9-QS1T#Or(S/4Z>wNjedkMHi;P`B%qr4o=NI|zR-A[Dlb0w{');

// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
if( 'WP_LOCAL_DEV' == true ) {
  $table_prefix  = 'wpd_'; // dev site
} else {
  $table_prefix  = 'wps_'; // staging site
}

// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', '' );

// ===========
// Show errors
// ===========
if( 'WP_LOCAL_DEV' == true ) {
  ini_set( 'display_errors', 1 );
  define( 'WP_DEBUG_DISPLAY', true );
} else {
// ===========
// Hide errors
// ===========
  ini_set( 'display_errors', 0 );
  define( 'WP_DEBUG_DISPLAY', false );
}
// =================================================================
// Debug mode
// Debugging? Enable these. Can also enable them in local-config.php
// =================================================================
// define( 'SAVEQUERIES', true );
// define( 'WP_DEBUG', true );

// ======================================
// Load a Memcached config if we have one
// ======================================
if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
	$memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );

// ===========================================================================================
// This can be used to programatically set the stage when deploying (e.g. production, staging)
// ===========================================================================================
define( 'WP_STAGE', '%%WP_STAGE%%' );
define( 'STAGING_DOMAIN', '%%WP_STAGING_DOMAIN%%' ); // Does magic in WP Stack to handle staging domain rewriting

// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
require_once( ABSPATH . 'wp-settings.php' );
