<?php 

define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));
define("MAIN_CSS_PATH", realpath(dirname(__FILE__) . './css/default-assets/'));

define("DB_HOST", "localhost");
define("DB_ROOT", "root");
define("DB_PASS", "");
define("DB_NAME", "barkomatic");

$con = new mysqli(DB_HOST, DB_ROOT, DB_PASS, DB_NAME);
if($con->connect_error) {
    die("Sever is down!" . mysqli::$connect_error);
}