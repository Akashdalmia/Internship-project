<?php
include('connection.php');
$users=mysqli_query($conn,"select * from user_register");

$sql = "SELECT * FROM user_register";
if( isset($_GET['search']) ){
    $name = mysqli_real_escape_string($conn, htmlspecialchars($_GET['search']));
    $sql = "SELECT * FROM user_register WHERE fname ='$name'";
}
$result = $conn->query($sql);
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-light bg-info shadow-lg">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand ml-5"  href="#"><h2>Admin Panel</h2></a>
        <form class="d-flex">
      <input class="form-control mr-2" type="search" placeholder="Search" name="search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit" >Search</button>
    </form>
    </div>
  </nav>
        <div class="container">
            <div class="row shadow-lg mt-3 mr-2 ml-2">   
                    <div class="col-12">
                        <h4 class="text-center mt-3 mb-2"><u>Users Details</u></h4>
                        <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th> 
                            <th scope="col">Phone No</th>
                            <th scope="col">Address</th>
                            <th scope="col">D-O-B</th>
                            <th scope="col">Password</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php
                        while($row = mysqli_fetch_array($users)) {
                            echo '<tr>
                        <th scope="row">'.$row['id'].'</th>
                        <td>'.$row['fname'].' '.$row['lname'].'</td>
                        <td>'.$row['email'].'</td>
                        <td> '.$row['phone_no'].'</td>
                        <td>'.$row['addressline1'].' '.$row['addressline2'].' '.$row['state'].' '.$row['district'].' '.$row['pincode'].' </td>
                        <td>'.$row['dob'].' </td>
                        <td>'.$row['password'].' </td>
                        </tr>';

                    }
                ?>
                </tbody>
            </table>   
            </div>
        </div>
    </div>

    <!--  Bootstrap Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>

   
  </body>
</html>