<?php
// Mock _common.php for local view
error_reporting(E_ERROR | E_PARSE); // Suppress warnings

define('_GNUBOARD_', true);
define('G5_PATH', $_SERVER['DOCUMENT_ROOT']);
define('G5_URL', '');
define('G5_IMG_URL', '/img');
define('G5_LIB_PATH', './lib_mock_path');
define('G5_IS_MOBILE', false);
define('G5_DEVICE_BUTTON_DISPLAY', false);
// define('G5_THEME_PATH', ''); // Commented out to prevent index.php from including theme index
define('G5_MOBILE_PATH', '');
define('G5_IS_ADMIN', false);
define('G5_ADMIN_URL', '');
define('G5_CSS_VER', '1.0');
define('G5_CSS_URL', '/css');
define('G5_JS_URL', '/js');
define('G5_JS_VER', '1.0');
define('G5_BBS_URL', '');
define('G5_COOKIE_DOMAIN', '');
define('G5_SHOP_URL', '');
define('G5_USE_SHOP', false);
define('G5_ADMIN_DIR', 'adm');

// Mock variables
$config = [
    'cf_title' => 'K-BizUp',
    'cf_analytics' => '',
    'cf_add_meta' => '',
    'cf_editor' => ''
];
$member = [
    'mb_id' => '',
    'mb_level' => 0,
    'mb_nick' => 'Guest'
];
$g5 = [
    'title' => 'K-BizUp',
    'lo_url' => '',
    'lo_location' => '',
    'body_script' => ''
];
$board = ['bo_use_dhtml_editor' => false];
$is_member = false;
$is_admin = false;

// Mock Global Functions
function run_event($event)
{
}
function add_event($event, $func)
{
}
function add_stylesheet($css)
{
}
function add_javascript($js)
{
}
function latest($skin_dir = '', $bo_table = '', $rows = 10, $subject_len = 40, $options = '')
{
    return "";
}
function outlogin($skin_dir = '')
{
    return "";
}
function poll($skin_dir = '')
{
    return "";
}
function visit($skin_dir = '')
{
    return "";
}
function connect($skin_dir = '')
{
    return "";
}
function popular($skin_dir = '')
{
    return "";
}
function get_cookie($name)
{
    return "";
}
function set_cookie($name, $value, $expire)
{
}
function font_resize($a, $b, $c)
{
}
function get_head_title($title)
{
    return $title;
}
function set_head_title($title)
{
}
function run_replace($hook, $content, $arg1 = '', $arg2 = '')
{
    return $content;
}
function clean_xss_tags($str)
{
    return $str;
}
function get_microtime()
{
    return microtime(true);
}
function get_text($str)
{
    return $str;
}

// For head.sub.php
$g5_head_title = "K-BizUp";
?>