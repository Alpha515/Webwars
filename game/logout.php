<?php
error_reporting(0); 
include ('../global/functions.php');
 include ('../global/safe.php'); 
session_start();
$t = file_get_contents("logs/odhlasenia.txt");
      $today = date("Y-m-d H:i:s");
      $t .= $today." Pou��vate� ".$user['username']." "."sa odhl�sil!"."\r\n";
      file_put_contents("logs/odhlasenia.txt",$t);
session_destroy();
header("Location: ../index.php");
echo 'Boli ste �spe�ne odhl�sen�' ;
 

?>
