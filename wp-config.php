<?php
// ===================================================
// Load database info and local development parameters
// ===================================================
//
require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

define( 'DB_NAME', $_ENV['DB_NAME'] );
define( 'DB_USER', $_ENV['DB_USER'] );
define( 'DB_PASSWORD', $_ENV['DB_PASSWORD'] );
define( 'DB_HOST', $_ENV['DB_HOST'] );

// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );


// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define( 'AUTH_KEY',         '5>:<YcL|y(_P`1!/N[})vU&uOAF7(;W.e0J:./n7nT6uI3;F:w~BC+9?`]-xG.eH' );
define( 'SECURE_AUTH_KEY',  '1|oJH7h*gXSx>ia~nED~cL|qzYUt2@MUqv -Q/z9hr<$l>zj6F2tm!t7`E0)6``G' );
define( 'LOGGED_IN_KEY',    ')3^x9ZH*j2Jg7 g(-y:td&@OU{d:V@65mPtR3#QrFw~ahAri[3{X/^Y%Y(LtS3,{' );
define( 'NONCE_KEY',        '1o2IuXbB,m,8>z)W7<WMWqs}dhpc#cutj9qBc<twXcu&JM=m71ewRQ++}eWb7`<-' );
define( 'AUTH_SALT',        'fUir`&Y30k+y 4j3<2)>Easi_7u7eRT)Zqz23 7*=bMU1;UFfB:B0@1hT1c^2akE' );
define( 'SECURE_AUTH_SALT', '*,:fT^cgng _yU=X[*XasWYo~CeTui3>{4!+PVR2A<UsCpR:6wb{H+|:Dwd;Q1BM' );
define( 'LOGGED_IN_SALT',   '-k9ZP]%I6coRR>@Ofy=81 w)IGTujNHouLAD7@ s*g?GpIO.N#&iXYRFTl&,L RQ' );
define( 'NONCE_SALT',       '<hZfzxV;Z&}G`9gK|L=W,S KwiT16m2-P0@W~@E6<J##DjcM!tl0&N!X{bM93Z`9' );

// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'wp_';

// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', '' );

// ===========
// Hide errors
// ===========
ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', false );

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

// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
require_once( ABSPATH . 'wp-settings.php' );

