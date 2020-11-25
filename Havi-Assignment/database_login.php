<?php
session_start();
include('connection.php');

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $_SESSION['email']=$email;
    $users=mysqli_query($conn,"select * from user_register where email='$email' and password='$password' ");
    $row=mysqli_fetch_array($users);
    if ( $row['email']==$email && $row['password']==$password )
    {
        echo '<script type="text/javascript">
                alert("LOGIN SUCESSFULLY!");
                window.location="home.php";
              </script>';
    }
    else{
        echo '<script type="text/javascript">
                alert("Invalid User Name and Password");
                window.location="login.php";
            </script>';
}
}
?>