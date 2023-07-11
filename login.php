

<!DOCTYPE html>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="css/Line Awsome/css/line-awesome.min.css">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/logo.jpg">

    <title>Model School Student Information Management System</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/style.css" rel="stylesheet">
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="assets/css/sticky-footer-navbar.css" rel="stylesheet">
        <link href="asset/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.js"></script>
    <style>
      body{
        display: flex;
        height: calc(100%);
        width: calc(100%);
        justify-content: center;
        align-items: center;
      }
      h2 {
       
        margin-top: 1.6em;
        margin-left: 1.7em;
        color: white;
        font-weight: bold;
        display: block;
      }
      .login-form {
  display: block;
  position: fixed;
  border:5px solid grey;
  border-radius: 20px;
  padding: 30px;
  width: 500px;
  background-color: #FFFFF0;
  left:500px;
  top:250px;
 } 
 .erlert{
  display:block;
  border-radius:5px;
  background-color:rgba(230, 103, 42, 0.37);
  padding: 5px;
}
   </style>
  </head>
<body style="background-color:#FFFFFF">
   <center>
   <div class="menu-bar" style="display: inline-flex; width: 1900px;margin: 15px;padding: 15px;background-color: #191970;
  border-radius: 3px;"> 
  
       <ul><h2>  <a href="home.html"><span class="la la-home"></span>Home</a> </h2></ul>
      <ul><h2>  <a href="about.html"><span class="la la-user"></span>About</a> </h2></ul>
      <ul> <h2> <a href="help.html"><span class="la la-question-circle"></span>Help</a> </h2> </ul><br>
      <ul><h2>  <a href="contact.html"><span class="la la-phone"></span>Contact</a> </h2></ul>
      <ul><h2>  <a href="register.php"><span class="la la-registered"></span>Register</a> </h2></ul>
      <ul><h2>  <a href="login.php"><span class="la la-sign-in"></span>Login</a> </h2></ul>
  </div>
</center>




<div class="container-fluid">
<?php //<img src="hu.png"> ?>
  <div class="login-form" id="login_modal" role="dialog" >
<center><h1><b>Login<b><br>Model School</h1></center>

  <form class="form-horizontal" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="user">User:</label>
      <div class="col-md-10">
      <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
        <input type="text" class="form-control" id="user" name="user" placeholder="Enter User" autocomplete="off">
      </div>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-md-10">
      <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-key fa" aria-hidden="true"></i></span>
          
        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password">
      </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-md-offset-9  col-md-12">
      <!--<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Create New</button>-->
        <button type="hidden"  class="btn btn-warning">Login</button>
       
      </div>
    </div>
  </form>
   <?php
  include 'connect.php';
  ?>
   </div>          
</div>


    <script src="assets/js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  
</html>
