

<?php 
include 'includes/common.php';

if (isset($_SESSION['email_id']))
    {
        header('location:products.php');
    }
?>


<!DOCTYPE html>
<html>
<head>
<title> Welcome | Lifestyle Store </title>
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
require 'includes/header.php';
    
    ?>
<div class="content">
<div id="banner_image">
  <div class="container">
  <center>
   <div id="banner_content">
   <h1> We sell lifestyle. </h1>
<p> Flat 40% OFF on premium brands. </p>
     <a href="products.php" class="btn btn-danger btn-lg active"> Shop Now </a>

</div>
</center>
</div>
</div>
</div>

    <?php
    include 'includes/footer.php';
    ?>
    
</body>
</html>

