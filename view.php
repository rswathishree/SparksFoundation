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
<body id="body">
    <?php
    include 'header.php';
    $id=$_GET['id'];
    $query = "SELECT * FROM banksystem.banksystem where ID = '$id' ";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        $row = mysqli_fetch_array($result);
                        $nam=$row['Name'];?>
    <div class="container-fluid" id="content">
    <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">                    
    <table style="width:100%">
    <tr>
    <th>ID</th>
    <td><?php echo $row['ID']?></td>
    </tr>
    <tr>
    <th>NAME</th>
    <td><?php echo $row['Name']?></td>
    </tr>
    <tr>
    <th>EMAIL-ID</th>
    <td><?php echo $row['Email']?></td>
    </tr>
    <tr>
    <th>AMOUNT AVAILABLE</th>
    <td><?php echo $row['Amount']?></td>
    </tr>
    <tr>
    <th>TRANSFER</th>
    <?php $am=$row['Amount']; ?>
    <td><?php echo "<a href=' transaction.php?id=$id & am=$am & nam=$nam' class='btn button'> Transfer Money </a>"?></td>
    </tr>
   
</table>
    </div>
</div>
    <div class="row">
    <div class="container gut">
            <h2 class="bole">You have successfully collected <?php echo $row['Name']?>'s detail!</h2>
            <h3 class="lill"><a href="customer.php">Click Here !</a>  to go back.</h3>
        
    
</div>
   
    </div>
    
    </div>
    


    
</body>
</html>

<?php
    include 'footer.php';
    ?>
