<?php
if (!isset($_GET['id'])) {
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
    <meta charset="UTF-8">
    <link href="syndex.css" rel="stylesheet" type="text/css"/>
    <title>Bank Management</title>
    <style>
#body{
        background-color:#f5c0e5;
    }
    a{
        color:white;
        text-decoration:none;
        color:inherit;
    }
    table,th,td{
        font-size:20px;
        border: 3px solid rgb(19, 3, 54);
        border-collapse:collapse;
        
    }
    th,td{
        padding:5px;
        text-align:left;
        
    }
    th{
        border: 3px solid #0cf7f7;
        background-color:rgb(19, 3, 54);
        width:25%;
        color:white;

    }
    tr{
        background-color:#0cf7f7;
        color:rgb(19, 3, 54); 
    }
    .button{
        background-color:rgb(19, 3, 54);
        color:#0cf7f7;
        
    }
    a.button:hover{
        color:white;
    }
</style>
</head>
<body class="body">
    <?php
    include 'header.php';
    $id=$_GET['id'];
$amount = mysqli_real_escape_string($con,$_POST['money'] );
$query = "SELECT * FROM banksystem.banksystem where ID!='$id'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
?>
    <div class="container-fluid" id="content">
    <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">             
                <?php 
                
                if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <table class="table">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Name</th>
                                    <th>Receiver</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while ($row = mysqli_fetch_array($result)) {
                                    $rec=$row["ID"];
                                    echo "<tr><td>" . "#" . $row["ID"] . "</td><td>" . $row["Name"] . "</td><td><a href='fullsubmit.php?id=$id & rec=$rec & amount=$amount' class='btn button'> select</a></td></tr>";
                                }
                                
                                ?>
                            </tbody></table>
                            <?php } ?>
                        </div>
                        </div>
                        
                        <div class="container gut">
        <div class="jumbotron">
            <h3 class="lill"><a href="customer.php">Click Here !</a>  to go back.</h3>
        </div>
    </div>
    </div>
    <?php
    include 'footer.php';
    ?>   