
<?php
include 'includes/common.php';
if(!isset($_SESSION['email_id']))
{
    header('location:index.php');
    
}

?>

<!DOCTYPE html>
<html>
<head>
<title>  Settings | Lifestyle</title>

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
<div class="row">
<div class="col-lg-4 col-lg-offset-4" id="settings-container">
<h3> Change Password </h3>
<form method="POST" action="includes/settings_script.php">
<div class="form-group">
<input type="password" class="form-control" name="old_password" id="old_password" placeholder="Old Password" pattern=".{6,}" required=true">
</div>

<div class="form-group">
<input type="password" class="form-control" name="new_password" id="new_password" placeholder="New Password" pattern=".{6,}" required=true" >
</div>


<div class="form-group">
<input type="password" class="form-control" name="retype_new_password" id="retype_new_password" placeholder="Re-type Password" pattern=".{6,}" required=true">
</div>
<button type="submit" class="btn btn-primary"> Change </button>
<br>
<br>
<?php 
     echo "<br><br><b class='red'>" . $_GET['error'] . "</b>";
  ?>

</form>

</div>
</div>
</div>




<?php 
include 'includes/footer.php';
?>


</body>
</html>
