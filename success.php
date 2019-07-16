
<?php
include 'includes/common.php';
if(!isset($_SESSION['email_id']))
{
    header('location:index.php');
    
}

$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['itemsid'];

//We will change the status of the items purchased by the user to 'Confirmed'
$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
mysqli_query($con, $query) or die($mysqli_error($con));

?>

<!DOCTYPE html>
<html>
<head>
<title> Success | Lifestyle </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript">
</script>
<script src="js/bootstrap.min.js" type="text/javascript">
</script>

<link rel="stylesheet"  type="text/css" href="css/index.css">
</head>

<body>



<?php
include 'includes/header.php';
?>

<div class="container-fluid" id="content">


<div class="col-md-12 decor_bg">

<div class="jumbotron home-spacer">

<h3 align="center"> Your order is confirmed <span class="glyphicon glyphicon-ok red"> </span>.
    Thank you for shopping with us.</h3> <hr>
 <p align="center"> <a href="products.php">Click here</a> to purchase any other item. </p>

</div>
</div>

</div>


<?php 
include 'includes/footer.php';
?>


</body>
</html>
