<?php
if ((!isset($_GET['id'])) || (!isset($_GET['am'])) || (!isset($_GET['nam']))) {
    header('location: index.php');
   }
   
include 'common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >


<!--jQuery library--> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


<!--Latest compiled and minified JavaScript--> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8" >
<link href="syndex.css" rel="stylesheet" type="text/css"/>
<title>Bank Management</title>
<style>
.body{
        background-color:#f5c0e5;
    }
</style>
</head>
<body class="body">
    <?php
    include 'header.php';
    echo"<br/><br/><br/>";
    $id=$_GET['id'];
    $am=$_GET['am'];
    $nam=$_GET['nam'];?>

<div class="container gut">
        <div class="jumbotron">
            <h2 class="bole"><?php echo $nam ?> has Rupees <?php echo $am ?>.  Please enter amount less than that.</h2>
        </div>
    </div>

    <div class="container">
        <div class="row gut ">
            <div class="col-xs-8 col-xs-offset-2">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h2>Transfer Form</h2>
                    </div>
                    <div class="panel-body">
                        <p class="text-warning">Enter the Amount</p>
                        <form method="POST" action= "transubmit.php?<?php echo "id=".$id." & am=".$am?>">
        <div class="form-group">
        <input  class="form-control" type="number" id="money" name="money" placeholder="Amount">
        
        </div>
        <button type="submit" name="submit" class="btn btn-danger">Submit</button><br><br>
                            

                        </form><br>
                    </div>
                    <div class="panel-footer"><p><a href="Customer.php"> Click here </a>to Cancel Transaction</p></div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'footer.php';
    ?>
</body>
</html>