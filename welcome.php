<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location:login.php");
    exit;
}

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome- <?php echo  $_SESSION['username']?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    

    <style>

nav::before{
    content:"";
    position:absolute;
    background:grey;
    top:0px;
    left:0px;
    z-index: -1;
}
.container{
   display: flex;
   width:100%;
   flex-direction: row;
   justify-content: space-between;
   align-items: center;
    top:150px;
    position:relative;
   margin:0px 0px;
   
 
   
}
.map{
   display: flex;
   flex-direction: column;
   justify-content: center;
   align-items: center;
   padding: 0px;
   border: 2px solid rgb(223, 138, 181);
   border-radius: 13px;
   background-color: rgb(240, 204, 226);
  font-style: italic;
 
}
.map img{
   height: 200px;
   margin: 10px 20px;
   margin-bottom: 30px;
   border: none;
   border-radius: 15px;
   padding: 0px;
}

.utilities{
   display: grid;
   grid-template-columns: 230px 230px;
   grid-template-rows: 80px 80px 80px;
  
   
   
}
.hire{
   display: grid;
   grid-template-columns: 230px 230px;
   grid-template-rows: 80px 80px 80px;
  
   
   
}

.utilities a{
   text-decoration: none;
   color: rgb(0, 0, 0);
  font-style: italic;
}
.hire a{
   text-decoration: none;
   color: rgb(0, 0, 0);
  font-style: italic;
}
.extra{
border: none;
background-color: rgb(153, 216, 230);
margin: 10px ;
padding: 20px;
border: none;
border-radius: 4px;
display: flex;
justify-content: center;
align-items:center;
}
.extra1{
border: none;
background-color: rgb(184 243 203);
margin: 10px ;
padding: 20px;
border: none;
border-radius: 4px;
display: flex;
justify-content: center;
align-items:center;
}

.extra img{
  height: 30px;
margin-right: 10px;
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
   <?php require 'partials/_nav.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <div class="container"> 
    <div class="utilities">
        <div class="extra"><img src="/delhimetro/fare.png" alt=""><p></p><a href="">| Fare </a></div>
        <div class="extra" id="ticket"><img src="/delhimetro/ticket.png" alt=""><a href="">| Tickets</a></div>
        <div class="extra"><img src="/delhimetro/museum.png" alt=""><a href="">| Metro museum</a></div>
        <div class="extra"><img src="/delhimetro/lost.png" alt=""><a href="">| Lost and found</a></div>
        <div class="extra"><img src="/delhimetro/travel advice.png" alt=""><a href="">| Travel advisory</a></div>
        <div class="extra"><img src="/delhimetro/tour.png" alt=""><a href="">| Tour guide</a></div>
        
    </div>
     <div class="map">
         <p> Click here to access with Delhi metro map
             </p>
         <a href="https://www.delhimetrorail.com/map"><img src="/delhimetro/Screenshot (66).png" alt=""></a>
     </div>
      <div class="hire">
        <div class="extra1"><a href="/loginsystem/intern.php">Internship </a></div>
        <div class="extra1"><a href="/loginsystem/finance.php">Finance</a></div>
        <div class="extra1"><a href="/loginsystem/hr.php">Human Resources</a></div>
        <div class="extra1"><a href="/loginsystem/it.php">Computers and information technology</a></div>
        <div class="extra1"><a href="/loginsystem/acc.php">Accounting</a></div>
        <div class="extra1"><a href="/loginsystem/om.php">Operation Management</a></div>
        
    </div>
     </div>

     <div class="footer">
        
       <div class="copyright"> <p>© 2024 . All rights are reserved </p></div>
       <div class="twitter"> <a href="https://twitter.com/OfficialDMRC"><img src="twitter.png" alt=""></a></div>
       <div class="insta"><a href="https://www.instagram.com/officialdmrc/?hl=en"><img src="insta.png" alt=""></a></div>
     
     </div>
     </body>
</html>