<?php
# This file was automatically generated by the Bricks installer.
# If you make manual changes, please keep track in case you need to recreate them later.
//$dbuser = 'root'; //MySQL database username$dbpass = 'root';
//MySQL database password$dbname = 'inject';
//MySQL database name$host = 'localhost';
//MySQL database host$showhint = true;
//Shows the last executed SQL query$server = 'http://127.0.0.1';
//The protocol and server name to use in fully-qualified URLs$scriptpath = '/release-channel';


// CLEARDB_DATABASE_URL: mysql://bb78573e4b417c:4d14b048@eu-cdbr-west-02.cleardb.net/heroku_34ca7a1e5f5ca40?reconnect=true
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$host = $url["host"];
$dbuser = $url["user"];
$dbpass = $url["pass"];
$dbname = substr($url["path"], 1);

$config = array(
    'host' => $host ,
    'user' => $dbuser ,
    'pw' => $dbpass,
    'db' => $dbname
);


?>
