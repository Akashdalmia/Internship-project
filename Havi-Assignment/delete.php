<?php
include('connection.php');
 $id=$_REQUEST['id'];
 $user= mysqli_query($conn, "delete from feedback where feedback_id='$id'");
 if($user)
 {
     header('location:home.php');
 }

?>