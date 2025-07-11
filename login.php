<?php 

$login=false;
$showError=false;

if($_SERVER["REQUEST_METHOD"]=="POST"){
include 'partials/_dbconnect.php';

$username= $_POST["username"];
$password= $_POST["password"];



$sql="Select * from metro_signup where username='$username' and password='$password'";;
$result= mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num==1){
    $login=true;
    session_start();
    $_SESSION['loggedin']=true;
    $_SESSION['username']=$username;
    header("location:welcome.php");
}
else{
$showerror="invail credentials";
}
}


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <style>
    .container{
        margin-top:40px;
        color:white;
    }
    .footer{
    display:flex;
    flex-direction:row;
    
    justify-content:center;
    background:white;
    position:absolute;
    bottom:0px;
    width:100%;
   
}
.twitter img{
    height:40px;
}
.insta img{
    height:30px;
    position:relative;
   top:4px;
}

.copyright{
   position:relative;
   top:4px;
   margin-right:10px;
}
 </style>
  </head>
  <body class="bg-dark">
   <?php
    require 'partials/_nav.php';
    ?>


  <?php
  if($login){
echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong> You are logged in!</strong> 
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
    <h1 class="text-center">Login to our website</h1>
   <form action="/loginsystem/login.php" method="post">
  <div class="mb-3">
    <label for="username"  class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  
 
  <button type="submit" class="btn btn-primary">Login</button>
</form>
   </div>
   <div class="footer">
        
        <div class="copyright"> <p>© 2024 . All rights are reserved </p></div>
        <div class="twitter"> <a href="https://twitter.com/OfficialDMRC"><img src="twitter.png" alt=""></a></div>
        <div class="insta"><a href="https://www.instagram.com/officialdmrc/?hl=en"><img src="insta.png" alt=""></a></div>
      
      </div>
   
  </body>
</html>