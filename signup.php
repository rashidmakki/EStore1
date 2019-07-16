

<?php
require 'includes/common.php';

if(isset($_SESSION['email_id']))
{
    header('location:products.php');
}
?>


<!DOCTYPE html>
<html>
<head>
<title> Signup | Lifestyle </title>
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


<div class="container-fluid decor_bg" id="content">
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
<h1> SIGN UP </h1>

<form method="POST" action="includes/signup_script.php">
<div class="form-group">
<input type="text" name="name" placeholder="Name" id="name" class="form-control"required=true"> 
</div>


<div class="form-group">
<input type="email" name="email_id" placeholder="Email" id="email_id" class="form-control" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"> 
<?php echo $_GET['m1']; ?>
</div>

<div class="form-group">
<input type="password" name="password" placeholder="Password" id="password" class="form-control" required="true" pattern=".{6,}"> 
<?php echo $_GET['m2']; ?>
</div>


<div class="form-group">
<input type="number" name="contact" placeholder="Contact" id="contact" class="form-control"  required="true"> 
</div>


<div class="form-group">
<input type="text" name="city" placeholder="City" id="city" class="form-control" required="true"> 
</div>

<div class="form-group">
<input type="text" name="address" placeholder="Address" id="address" class="form-control" required="true"> 
</div>

<button type="submit" class="btn btn-primary"> Submit </button>
</form>


</div>
</div>
</div>

</div>







<?php
include 'includes/footer.php';
?>


</body>
</html>