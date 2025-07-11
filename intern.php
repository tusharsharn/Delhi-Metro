<?php 

$showAlert=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
include 'partials/connect_intern.php';

$name= $_POST["name"];
$college= $_POST["college"];
$gender= $_POST["gender"];
$dob= $_POST["dob"];
$mobile= $_POST["mobile"];
$address= $_POST["address"];
$exists=false;

if( $exists==false){
    $sql="INSERT INTO `register` (`name`, `college`, `gender`, `phoneno`, `address`, `dob`) VALUES ('$name', '$college', '$gender', '$mobile', '$address', '$dob');";;
    $result= mysqli_query($conn,$sql);

    if($result){
        $showAlert=true;
    }

}
else{
$showError="Passwords do not match";
}
}


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
    .container{
        margin-top:40px;
        color:white;
    }
 </style>
  </head>
  <body class="bg-dark">
   <?php
    require 'partials/_nav.php'
    ?>


  <?php
  if($showAlert){
echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>SUCCESS!</strong> Your details  have been submitted.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if($showError){
    echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error!</strong> Passwords do not match,please try again.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
?>
   <div class="container">
    <h1 class="text-center">Register for internship programme</h1>
   <form action="/loginsystem/intern.php" method="post">
  <div class="mb-3">
    <label for="name"  class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="college"  class="form-label">College/University</label>
    <input type="text" class="form-control" id="college" name="college" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
  <fieldset>
    <legend>Gender:</legend>

    <div>
      <input type="radio" id="gender" name="gender" value="male"
             checked>
      <label for="gender">Male</label>
    </div>

    <div>
      <input type="radio" id="gender" name="gender" value="female">
      <label for="female">Female</label>
    </div>

    <div>
      <input type="radio" id="gender" name="gender" value="other">
      <label for="gender">Prefer not to say</label>
    </div>
</fieldset>

    
  </div>
  <div class="mb-3">
    <label for="dob"  class="form-label">Date of birth</label>
    <input type="date" class="form-control" id="dob" name="dob" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="mobile"  class="form-label">Phone no.</label>
    <input type="number" class="form-control" id="mobile" name="mobile" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
  <label for="address"  class="form-label">Address</label>
  <br>
   <textarea name="address" id="address" cols="30" rows="10"></textarea>
    
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>