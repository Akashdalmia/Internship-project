<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
    <link href="style.css" rel=stylesheet>
    <title>Login</title>
  </head>
  <body>
  
  <!--Login form -->
  <div class="container">
      <div class="justify-statement-center">
            <div class="row form-design"> 
                <div class="col-4"></div>  
                  <div class="col-4  bg-white shadow-lg rounded form-design">
                    <div class="signup-form">
                    <form method="post" action="database_login.php">
                        <h4 class="hint-text text-center pt-3 pb-3 ">Login</h4>
                        
                            <div class="form-group mb-2">
                                <label class="ml-1"><b>Username</b></label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                             </div>

                            <div class="form-group mb-2">
                                <label class="ml-1"><b>Password</b></label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password"  required>
                            </div>

		                        <div class="form-group mb-4 ">
                                <center>
                                <input type="submit" value="Log In" name="submit" class=" text-center  btn btn-success mt-2" id="btn">
                                </center>
                            </div>
                    </form>
                      <div class="text-center"><p>If you don't have an account?<a href="" data-toggle="modal" data-target="#register"><span style="color:red;"> Sign Up</span></a></p></div>
                    </div>       
                </div>
              </div>  
            </div>
<!--End Login-->



<!--Register Model-->
<div class="modal fade" id="register" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="register" aria-hidden="true">
  <div class="modal-dialog modal-lg">
  <form action="database_registration.php" method="post">
    <div class="modal-content">
      
    <div class="modal-header input-group-sm">
        <h5 class="modal-title" id="register text-center">Register </h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
    </div>

    <div class="modal-body">
      
    <div class="row">
      <div class=" col-sm-6 mb-3">
          <input type="text" class="form-control" id="name" name="fname" placeholder="First Name" pattern="[A-Za-z]{1,32}" required>
      </div>
      <div class=" col-sm-6 mb-3">
          <input type="text" class="form-control" id="name" name="lname" placeholder="Last Name" pattern="[A-Za-z]{1,32}" required>
      </div>
    </div>

    <div class="mb-3">
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
    </div>

    <div class="mb-3">
      <input type="text" class="form-control" id="phone_no" name="phone_no" placeholder=" Enter Phone Number " pattern="[0-9]{10}" required>
    </div>

    <div class="row">
      <div class=" col-sm-6 mb-3">
          <input type="text" class="form-control" id="name" name="address1" placeholder="Address Line 1" required>
      </div>
      <div class=" col-sm-6 mb-3">
          <input type="text" class="form-control" id="name" name="address2" placeholder="Address Line 2" required>
      </div>
      </div>

      <div class="row">
      <div class=" col-sm-4 mb-3">
          <input type="text" class="form-control" id="state" name="state" placeholder="State" pattern="[A-Za-z]{1,32}" required>
      </div>
      <div class=" col-sm-4 mb-3">
          <input type="text" class="form-control" id="district" name="district" placeholder="District" pattern="[A-Za-z]{1,32}" required>
      </div>
      <div class=" col-sm-4 mb-3">
          <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Pin Code" pattern="[0-9]{6}" required>
      </div>
      </div>

    <div class="mb-3">
      <input type="date" class="form-control" id="dob" name="dob" placeholder="D-O-B" required>
    </div>

    <div class="mb-3">
      <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required>
    </div>

    <div class="mb-3">
      <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Re Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required>
    </div>
</div>

  <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <input type="submit" value="submit" name="submit" class="btn btn-primary">  
  </div>
  </div>
</form>
  </div>
</div>
<!--End-Registration-Model-->




    <!--  Bootstrap Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>

    
  </body>
</html>