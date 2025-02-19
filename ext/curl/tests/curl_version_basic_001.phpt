--TEST--
Test curl_version() basic functionality
--EXTENSIONS--
curl
--FILE--
<?php
    $info_curl = curl_version();
    var_dump($info_curl["version_number"]);
    var_dump($info_curl["age"]);
    var_dump($info_curl["features"]);
    var_dump($info_curl["version"]);
    var_dump($info_curl["host"]);
    var_dump($info_curl["features_version"]["ssl"]);
    var_dump($info_curl["features_version"]["libz"]);
    var_dump(array_key_exists("protocols", $info_curl));
?>
--EXPECTF--
int(%i)
int(%i)
int(%i)
string(%i) "%s"
string(%i) "%s"
string(%i) "%S"
string(%i) "%S"
bool(true)
