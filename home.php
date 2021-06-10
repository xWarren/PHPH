<!DOCTYPE html>
 <html>
  <head>
   <meta charset="utf-8">
	  <title>MCC</title>
     <meta name= "viewport" content = "width = device-width, initial-scale = 1.0, user-scalable = yes">
    <link rel="stylesheet" type="text/css" href="/Mongo/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <noscript>For full functionality of this page it is necessary to enable JavaScript. Here are the <a href="http://www.enable-javascript.com" target="_blank"> instructions how to enable JavaScript in your web browser</a></noscript>

           </head>
           <style>
           body{
               background-image: url(gifs.gif);
               background-repeat: no-repeat;
               background-size: cover;
           }
           .dropdown{
               display: flex;
           }
           a{
    color:#4040bf;
}
           .run{
            font-family: 'Indie Flower', cursive;
            background-color: transparent;
           }

</style>
    <?php
         include 'init.php';
         include 'admin/try.php';
         include 'modals.php';
    if(isset($_SESSION['user_id'])) {
$userData = $userClass->userData($_SESSION['user_id']);
    }
    ?>
   <body>
    <!--navigation-->
  <nav class="navbar">
  <div class="run">
 <div class="container-fluid">
<div class="navbar-header">
   <a class="navbar-brand" href="#">
   <img src="logos.jpg" alt="Logo" style="width:100px; height: 30px;"></a>
 </div>
<ul class="nav navbar-nav">
    <li class="active"><a href="home.php">Home</a></li>
    <li><a  href="index.php">Order Now</a></li>
    <li><a <?php 
 echo isset($_SESSION['user_id']) ? '' : ' data-toggle="modal" data-target="#registerModal"';      
?>  href="#">Register</a></li>
          <li><a <?php 
echo isset($_SESSION['admin_id']) ? ' data-toggle="modal" data-target="#adminModal" ' : "";      
?> href="#">Admin Panel</a></li>
  <li><a <?php 
echo isset($_SESSION['user_id']) ? '' : ' data-toggle="modal" data-target="#loginModal"';      
    ?> href="#"> Login </a></li>
         </span>
         <div class="dropdown">
         <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php
    echo isset($userData) ? $userData->fullname : '';
    ?>
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
     <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
     </ul>
     </div>
</ul>
    </div>
        </nav>
<!--end of navigation bar-->
   <!--left side bar categories-->

<br>
<br>
 <script>
  //popover function
$(document).ready(function(){
 $('[data-toggle="popover"]').popover(); 
$(".titles").hover(
   //mouseleave
 function(){
 var shortTitle = $(this).text();
  if(shortTitle.length >= 16) {
shortTitle = shortTitle.substring(0,16) + "...";
    }
$(this).text(shortTitle);
  });
    });
 </script>
</body>
 </html>
<script src="ajax_cart.js"></script>







