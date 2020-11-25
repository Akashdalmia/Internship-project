<?php
//session_start();
include('connection.php');
if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone_no=$_POST['phone_no'];
    $address1=$_POST['address1'];
    $address2=$_POST['address2'];
    $state=$_POST['state'];
    $district=$_POST['district'];
    $pincode=$_POST['pincode'];
    $dob=$_POST['dob'];
    $password=$_POST['password'];
    $repassword=$_POST['repassword'];


    $check=mysqli_num_rows(mysqli_query($conn,"select * from user_register where email='$email'"));
    if($check>0){
       
        echo '<script type="text/javascript">
                  alert("Email already exist!");
                window.location="Login.php";
          </script>';
    } 
   else if( $password == $repassword){
        $done=mysqli_query($conn, "insert into user_register(fname,lname,email,phone_no,addressline1,addressline2,state,district,pincode,dob,password,repassword) values('$fname','$lname','$email',$phone_no,'$address1','$address2','$state','$district',$pincode,'$dob','$password','$repassword')");
        if($done){
            echo '<script type="text/javascript">
                    alert("Registration Done sucessfully! ");
                    window.location="Login.php";
                </script>';
        
       }
    }
    else{
        echo '<script type="text/javascript">
                    alert("password doesnt match! ");
                    window.location="Login.php";
                </script>';
    }
}
?>