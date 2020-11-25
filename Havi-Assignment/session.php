<?php
error_reporting(0);
session_start();
if($_SESSION['email']==true){
    $email=$_SESSION['email'];
}else{
    echo '<script type="text/javascript">
                  alert("Please Login First!");
                 window.location="Login.php";
          </script>';
}
?>