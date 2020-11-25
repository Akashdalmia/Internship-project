<?php
include("connection.php");
require_once('session.php');
session_start();
$user_email=$_SESSION['email'];
require_once('database_function.php');

    
$sql = "select * from feedback where email='$user_email'";
$result = mysqli_query($conn, $sql);
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <title>Home</title>
  </head>
  <body>
  
  <!--Navebar-->
 <div class="container-fluid">
   <nav class="navbar navbar-expand-lg navbar-light bg-info shadow-lg">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand ml-5"  href="#"><h1>Havi-Assignment</h1></a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php"><?php echo get_name($conn,$user_email); ?></a>
                    </li>
                </ul>
        <form class="d-flex">
            <a href="logout.php" class="btn btn-success" type="submit">Logout</a>
        </form>
            </div>
        </div>
    </nav>
<!--End-Navebar-->

    <!--Body-->
        <div class="row mt-5 ml-3">
            <div class="col-sm-4 bg-white shadow-lg">
            <form action="database_homepage.php" method="post">
                <h5 class="text-center mt-3" >Student Detail Form</h5>
                <input type="text" name="name" id="" class="form-control mt-2" placeholder="Name" required>
                <input type="text" name="feedback" id="" class="form-control mt-2" placeholder="Feedback" required>
                <input type="submit" name="submit" id="" value='Submit' class="btn btn-success mt-2 mb-3">
            </form>
            </div>
        

        <div class="col-sm-7 shadow-lg ml-5 ">
            <h5 class="text-center mt-3"><u>List View of Student Details</u></h6>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Sn.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Feedback</th> 
                    <th scope="col">Action</th>
                </tr>
                </thead>

                <tbody>
                <?php
                    while($row = mysqli_fetch_array($result))
                        {
                            echo '<tr>
                            <th scope="row">'.$row['feedback_id'].'</th>           
                            <td>'.$row['name'].'</td>
                            <td>'.$user_email.'</td>
                            <td>'.$row['feedback'].'</td>
                            <td>
                             <a href="delete.php?id='.$row['feedback_id'].'" class="btn btn-danger" >Delete</a>
                             <a href="edit.php?id='.$row['feedback_id'].'" class="btn btn-info" >Edit</a>
                            </td>
                        </tr>
                        ';
                              }
    
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>
    <script type="text/javascript">

    $(document).ready(function(){
        function loadTable(){
            $.ajax({
                ure: 'http://localhost/Havi-Assignment/API/api-read-feedback-table.php',
                type: "GET",
                success: function(data){
                    console.log(data);
                }
            });
        }

    });

    </script>
    
  </body>

 

</html>