<?php


ini_set('display_errors', '1');

require_once(dirname(dirname(__FILE__)) . '/LocalSettings.php');
$con = mysql_connect($host,$dbuser,$dbpass);
if (!$con)

?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<link rel="stylesheet" href="../stylesheets/foundation.min.css">