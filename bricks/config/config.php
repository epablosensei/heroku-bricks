<?php
$username=$_POST['username'];
$pwd=$_POST['passwd'];
$db=$_POST['db'];
$host=$_POST['host'];
$serverip=$_SERVER['SERVER_ADDR'];
$path=dirname(dirname($_SERVER['PHP_SELF']));
$hint=($_POST['hints'] == true?'true':'false');
$con = mysql_connect($host,$username,$pwd);
@mysql_select_db($db,$con) or die( "Unable to connect to the database: $db");
if ($con)
    
      			header('Content-Disposition: attachment; filename="LocalSettings.php"');
            $var = 
            print $var;
        }
      } else {
        die('Could not connect: ' . mysql_error());
      }
    