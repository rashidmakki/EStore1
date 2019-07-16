
<?php 
include 'includes/common.php';

if (isset($_SESSION['email_id'])) {
    header('location: products.php');
}

?>
<!DOCTYPE html>
<html>
<head>
<title> Login | Lifestyle  </title>
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

<div id="content">
<div class="container-fluid decor_bg" id="login-panel">
<div class="container">
<div class="row">
<div class="col-md-4 col-md-offset-4">
<div class="panel panel-primary">
<div class="panel-heading">
<h3> LOGIN </h3>
</div>
<div class="panel-body">

<p class="text-warning"> Login to make a purchase </p>

<form method="POST" action="includes/login_submit.php">
<div class="form-group">

<input type="text" name="email_id"  id="email_id" placeholder="Email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="true">
  
</div>
<div class="form-group">

<input type="password" name="password" id="password" placeholder="Password" class="form-control" pattern=".{6,}" required="true">

<br>
<br>

<button type=submit" class="btn btn-primary"> Login </button>
<br/>
<br/>
<?php echo $_GET['error']; ?>
</form>
</div>


</div>
<div class="panel-footer">

<p> Don't have an account? <a href="signup.php" > Register </a> </p>
</div>

</div>
</div>
</div>
</div>

</div>
</div>

    <?php
    include 'includes/footer.php';
    ?>
</body>
</html>