<?php
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "havi_assignment";
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db) ;
 if($conn){
   echo "";
 }
 else{
   die("Connection Fail because ".mysqli_connect_error());
 }
?>
