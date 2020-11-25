<?php
include("connection.php");
require_once('session.php');
require_once('database_function.php');
session_start();
$user_email=$_SESSION['email'];
$feedback_id=$_REQUEST['id'];
$sql = "select * from feedback where feedback_id='$feedback_id'";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);


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
    <title>Home</title>
  </head>
  <body>
  <div class="container-fluid">
   <nav class="navbar navbar-expand-lg navbar-light bg-info shadow-lg">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand ml-5"  href="#"><h4>Assignment</h4></a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"><?php echo get_name($conn,$user_email); ?></a>
                    </li>
                </ul>
        <form class="d-flex">
            <a href="logout.php" class="btn btn-success" type="submit">Logout</a>
        </form>
            </div>
        </div>
    </nav>

    <div class="row mt-5">
        <div class="col-sm-3"></div>
            <div class="col-sm-6 bg-white shadow-lg">
            <form action="" method="post">
                <h5 class="text-center mt-3" >Update List View </h5>
                <input type="text" name="name" id="" class="form-control mt-2" value="<?php echo "".$row['name']."" ; ?>" placeholder="Name" required>
                <input type="text" name="feedback" id="" class="form-control mt-2" value="<?php echo "".$row['feedback']."" ; ?>" placeholder="Feedback" required>
                <input type='submit' name="submit" class="btn btn-success mt-2 mb-3" value='Update'>
            </form>
            </div>
        </div>



</div>
</div>
</div>
<?php
include('connection.php');

if(isset($_REQUEST['submit'])){
    $feedback_id=$_REQUEST['id'];
    $name=$_POST['name'];
    $feedback=$_POST['feedback'];

     $user = mysqli_query($conn, "update feedback set name='$name',feedback='$feedback' where feedback_id='$feedback_id' ");
     
      if($user){
            echo '<script type="text/javascript">
             alert("Feedback Updated succesfully!");
            window.location="home.php";
            </script>';
    }
   }
?>




    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>

  </body>
</html>