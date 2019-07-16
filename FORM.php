


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

<form method="POST" action="user_registration_script.php">



<div class="form-group">
<input type="email" name="email_id" id="email_id" placeholder="Email" class="form-control" > 
</div>

<div class="form-group">
<input type="text" name="first_name" placeholder="first_name" id="first_name" class="form-control" > 
</div>

    <div class="form-group">
<input type="text" name="last_name" placeholder="last_name" id="last_name" class="form-control"> 
</div>


<div class="form-group">
<input type="number" name="phone" placeholder="Contact" id="phone" class="form-control" > 
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



