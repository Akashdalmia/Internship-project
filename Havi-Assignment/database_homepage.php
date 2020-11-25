<?php
require_once('session.php');
session_start();
include('connection.php');
if(isset($_POST['submit'])){
    $email=$_SESSION["email"] ;
    $name=$_POST['name'];
    $feedback=$_POST['feedback'];
     $user = mysqli_query($conn, "insert into feedback(email,name,feedback) values('$email','$name','$feedback')");
     
      if($user){
            echo '<script type="text/javascript">
             alert("Feedback submitted succesfully!");
            window.location="home.php";
            </script>';
    }
   }
?>