<?php
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
        width:20%;
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
<body id="body">
    <?php
    include 'header.php';
    
    $query = "SELECT * FROM banksystem.transaction ";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
?>
    <div class="container-fluid" id="content" >
    <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">             
                <?php if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <table class="table" >
                            <thead>
                                <tr>
                                    <th>S_NO</th>
                                    <th>Sender name</th>
                                    <th>Receiver name</th>
                                    <th>Amount</th>
                                    <th>Date And Time </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i=0;
                                while ($row = mysqli_fetch_array($result)) {
                                    $i+=1;
                                    echo "<tr><td>" . "#" . $i . "</td><td>" . $row["sender_name"] . "</td><td> " . $row["receiver_name"] . "</td><td> " . $row["Amount"] . "</td><td> " . $row["Time"] . "</td></tr>";
                                }
                                
                                ?>
                            </tbody></table>
                            <?php } ?>


                            </div>
                            </div>
                            
                            <div class="container gut">
        
            <h2 class="bole">You have successfully collected the transaction data!</h2>
            <h3 class="lill"><a href="index.php">Click Here !</a>  to go back.</h3>
        </div>
    </div>
                            <?php  include 'footer.php';?>  
</body>

</html