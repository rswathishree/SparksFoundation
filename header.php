<html lang="en">
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >


<!--jQuery library--> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


<!--Latest compiled and minified JavaScript--> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<link href="syndex.css" rel="stylesheet" type="text/css"/>
<title>Bank Management</title>
<style>
   .navbar-custom{
      background-color:rgb(19, 3, 54);
   }
   .navbar-brand{
      color:#0cf7f7;
   }
</style>
<body>    


<div class="navbar navbar-custom navbar-fixed-top">
 <div class="container">
 <div class="navbar-header">
 <button type="button" class="navbar-toggle" data-toggle="collapse" datatarget="#myNavbar">
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 </button>
 <a class="navbar-brand" href="index.php">Bank Management</a>
 </div>
 <div class="collapse navbar-collapse" id="myNavbar">
 <ul class="nav navbar-nav navbar-right">
 <?php
 ?>
 <li><a class="navbar-brand" href = "customer.php"><span class = "glyphicon glyphicon-education"></span> Customer</a></li>
 <li><a class="navbar-brand" href = "transamount.php"><span class = "glyphicon glyphicon-user"></span>
Transaction</a></li>
 <?php ?>
 
    </ul>
    </div>
    </div>
   </div>
</body>
</html>