<!DOCTYPE html>
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
     #body{
        background-color:#f5c0e5;
    }</style>
</head>
<body>
    <?php
    include 'header.php';
   ?>
    <div id="banner-image" class="container">
        <div id="banner-content">
                <h1>Banking is always Great!!!</h1>
                <p>Your Life, Your Money, Your Bank </p>
                <button  class="btn btn-danger btn-active"><a href="customer.php " id="utt">customers</button>
                <button  class="btn btn-danger btn-active"><a href="transamount.php " id="utt">Transaction</a></button>
                
        </div>

    </div>
    <?php
    include 'footer.php';
    ?>
</body>
</html>
