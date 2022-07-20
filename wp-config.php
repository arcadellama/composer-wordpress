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
define( 'AUTH_KEY',         'mYQ!pnd%@2x*3M>V F>?L*qiP7Ui,TK)i-0QWt9d.+M.yIfo:k[GvV<D q/ x@Jy' );
define( 'SECURE_AUTH_KEY',  '1/g1X*{S%fsP]!lIu%2{VeT?P9$<_GT~>r=*JR*>{mB eEDrW;9kk1Kb*|tsD3?j' );
define( 'LOGGED_IN_KEY',    'MEDS,?toJ|P*)8[@Zq_Rx9M6eYox0}uwSBFGYU og;t1}e5CpC_|F^zm:~i$a)`?' );
define( 'NONCE_KEY',        'vDZ7E%- Ni!diZSG%g>t4`sp+(U15C[YS9fA&VWv5?5A|f!omf|tm$$D:P|q]wP.' );
define( 'AUTH_SALT',        '~uxNDVEMjWiS2xGq{Z13f|sE+`uOYU;~9VbA6u- |kh_Db0r,-F.`I~)Gu!m3h]u' );
define( 'SECURE_AUTH_SALT', 'At:tC5=_rr[pV>uSMh3d6Bj5xWTvqdC%mbzs@(8uyETJ3S!O#8B?=]0~OQwEXbs4' );
define( 'LOGGED_IN_SALT',   '0=s(nH5V@.#%j|~=:Rsp6u-p]rg1S=;0`e(Mu|@SLP1ZInW|WDn7:<=F847r*[$-' );
define( 'NONCE_SALT',       'f`obytj}r$s@WG@&gKF [NnFDUd8(S8YU=WZe#R0(@crUVjxCsb=3;% `xz/zZw.' );

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

