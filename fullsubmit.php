<?php
if ((!isset($_GET['id'])) || (!isset($_GET['rec'])) || (!isset($_GET['amount']))) {
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
.body{
        background-color:#f5c0e5;
    }
</style>
</head>
<body class="body">
    <?php
    include 'header.php';
    $id=$_GET['id'];
    $rec=$_GET['rec'];
$amount =$_GET['amount'];
$user_registration_query="SELECT * FROM  banksystem.banksystem WHERE  ID='$id'";
$user_registration_result=mysqli_query($con,$user_registration_query)
or die(mysqli_error($con)) ;
$total_rows_fetched=mysqli_num_rows($user_registration_result);
$row=mysqli_fetch_array($user_registration_result);
if($amount<$row["Amount"]){
    $sname=$row["Name"];
    $a=$row["Amount"];
    $money=$a-$amount;
$user_register_query="UPDATE banksystem.banksystem SET amount='$money' where ID=$id";
    $user_registration=mysqli_query($con,$user_register_query) or die(mysqli_error($con));
    $user_registration_query="SELECT * FROM  banksystem.banksystem WHERE  ID='$rec'";
    $user_registration_result=mysqli_query($con,$user_registration_query)
or die(mysqli_error($con)) ;
$total_rows_fetched=mysqli_num_rows($user_registration_result);
$row=mysqli_fetch_array($user_registration_result);
$b=$row["Amount"];
$rname=$row["Name"];
$amoney=$b+$amount;
    $user_register_query="UPDATE  banksystem.banksystem SET amount='$amoney' where ID=$rec";
    $user_registration=mysqli_query($con,$user_register_query) or die(mysqli_error($con)) ;

    $user_register_query1="INSERT INTO banksystem.transaction(`s_id`,`sender_name`,`r_id`,`receiver_name`,`Amount`,`Time`) VALUES('$id','$sname','$rec','$rname','$amount',NOW())"; 
    $user_registration_result1=mysqli_query($con,$user_register_query1) or die(mysqli_error($con)) ;?>
    <div class="container gut">
        <div class="jumbotron">
            <h3 class="bole">You have successfully transfered!</h3>
            <h2 class="bole">Rupees <?php echo $amount ?> is transfered from <?php echo $sname ?> to <?php echo $rname ?></h2>
            <h3 class="lill"><a href="index.php">Click Here !</a>  to go back.</h3>
        </div>
    </div>
    
    <?php   
}
else{?>
    <div class="container gut">
        <div class="jumbotron">
            <h2 class="bole">Insufficient balance!</h2>
            <h3 class="lill"><a href="customer.php">Click Here !</a>  to go back.</h3>
        </div>
    </div>
<?php }
include 'footer.php';
?>

</body>
</html> 