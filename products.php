
<?php
include 'includes/common.php';
?>


<!DOCTYPE html>
<html>
<head>
<title> Products | Lifestyle </title>
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

<body style="padding-top:80px;">

<?php 
include 'includes/header.php';
include 'includes/check-if-added.php';
  ?>
<div class="container" id="content">
<div class="jumbotron home-spacer" id="products-jumbotron">

<h1> Welcome to our Lifestyle Store! </h1>
<p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
</div>

<div class="row text-center" id="cameras">
<div class="col-md-3 col-sm-6 home-feature">
<div class="thumbnail">
<img src="img/camera.jpg" alt="This is a Camera" >
<div class="caption">
<h3>  Cannon EOS </h3>
<p> Price:36000.00 </p>
 
  <?php if (!isset($_SESSION['email_id'])) { ?>                               
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                
 <?php                            
 } else {                                
     //We have created a function to check whether this particular product is added to cart or not.                                 
     if (check_if_added_to_cart(1)) { 
//This is same as if(check_if_added_to_cart != 0)                                     
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
} else {                                    
    ?>                                    
<a href="includes/cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                   
  <?php                                
  }                            
  }                             
  ?>

</div>
</div>
</div>
<div class="col-md-3 col-sm-6 home-feature">
<div class="thumbnail">
<img src="img/camera2.jpg" alt="This is a Camera" >
<div class="caption">
<h3>  Sony DSLR </h3>
<p> Price:40000.00 </p>

<?php if (!isset($_SESSION['email_id'])) { ?>                               
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                
 <?php                            
 } else {                                
     //We have created a function to check whether this particular product is added to cart or not.                                 
     if (check_if_added_to_cart(2)) { 
//This is same as if(check_if_added_to_cart != 0)                                     
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
} else {                                    
    ?>                                    
<a href="includes/cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                   
  <?php                                
  }                            
  }                             
  ?>

</div>
</div>
</div>

<div class="col-md-3 col-sm-6 home-feature">
<div class="thumbnail">
<img src="img/camera3.jpg" alt="This is a Camera" >
<div class="caption">
<h3>  Sony DSLR </h3>
<p> Price:50000.00 </p>


<?php if (!isset($_SESSION['email_id'])) { ?>                               
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                
 <?php                            
 } else {                                
     //We have created a function to check whether this particular product is added to cart or not.                                 
     if (check_if_added_to_cart(3)) { 
//This is same as if(check_if_added_to_cart != 0)                                     
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
} else {                                    
    ?>                                    
<a href="includes/cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                   
  <?php                                
  }                            
  }                             
  ?>

</div>
</div>
</div>

<div class="col-md-3 col-sm-6 home-feature">
<div class="thumbnail">
<img src="img/camera4.jpg" alt="This is a Camera" >
<div class="caption">
<h3>  Olympus DSLR </h3>
<p> Price:80000.00 </p>


<?php if (!isset($_SESSION['email_id'])) { ?>                               
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                
 <?php                            
 } else {                                
     //We have created a function to check whether this particular product is added to cart or not.                                 
     if (check_if_added_to_cart(4)) { 
//This is same as if(check_if_added_to_cart != 0)                                     
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
} else {                                    
    ?>                                    
<a href="includes/cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                   
  <?php                                
  }                            
  }                             
  ?>
</div>
</div>
</div>

</div>


<div class="row text-center" id="watches">
<div class="col-md-3 col-sm-6 home-feature">
<div class="thumbnail">
<img src="img/watch3.jfif" alt="This is a Camera" >
<div class="caption">
<h3>Faber Luba #111</h3>
<p> Price:18000.00 </p>


<?php if (!isset($_SESSION['email_id'])) { ?>                               
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                
 <?php                            
 } else {                                
     //We have created a function to check whether this particular product is added to cart or not.                                 
     if (check_if_added_to_cart(5)) { 
//This is same as if(check_if_added_to_cart != 0)                                     
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
} else {                                    
    ?>                                    
<a href="includes/cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                   
  <?php                                
  }                            
  }                             
  ?>

</div>
</div>
</div>
    
<div class="col-md-3 col-sm-6 home-feature">
<div class="thumbnail">
<img src="img/watch1.jfif" alt="This is a Camera" >
<div class="caption">
<h3>  Titan Model #201</h3>
<p> Price:3000.00 </p>


<?php if (!isset($_SESSION['email_id'])) { ?>                               
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                
 <?php                            
 } else {                                
     //We have created a function to check whether this particular product is added to cart or not.                                 
     if (check_if_added_to_cart(6)) { 
//This is same as if(check_if_added_to_cart != 0)                                     
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
} else {                                    
    ?>                                    
<a href="includes/cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                   
  <?php                                
  }                            
  }                             
  ?>
</div>
</div>
</div>

<div class="col-md-3 col-sm-6 home-feature">
<div class="thumbnail">
<img src="img/watch.jpg" alt="This is a Camera" >
<div class="caption">
<h3>  Titan Model #301</h3>
<p> Price:13000.00 </p>

<?php if (!isset($_SESSION['email_id'])) { ?>                               
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                
 <?php                            
 } else {                                
     //We have created a function to check whether this particular product is added to cart or not.                                 
     if (check_if_added_to_cart(7)) { 
//This is same as if(check_if_added_to_cart != 0)                                     
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
} else {                                    
    ?>                                    
<a href="includes/cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                   
  <?php                                
  }                            
  }                             
  ?>

</div>
</div>
</div>

<div class="col-md-3 col-sm-6 home-feature">
<div class="thumbnail">
<img src="img/watch2.jfif" alt="This is a Camera">
<div class="caption">
<h3>  HMT Milan </h3>
<p> Price:8000.00 </p>


<?php if (!isset($_SESSION['email_id'])) { ?>                               
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                
 <?php                            
 } else {                                
     //We have created a function to check whether this particular product is added to cart or not.                                 
     if (check_if_added_to_cart(8)) { 
//This is same as if(check_if_added_to_cart != 0)                                     
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
} else {                                    
    ?>                                    
<a href="includes/cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                   
  <?php                                
  }                            
  }                             
  ?>

</div>
</div>
</div>

</div>

<div class="row text-center" id="shirts">
<div class="col-md-3 col-sm-6 home-feature">
<div class="thumbnail">
<img src="img/shirt.jpg" alt="This is a Camera" >
<div class="caption">
<h3>H&W </h3>
<p> Price:800.00 </p>

    <?php if (!isset($_SESSION['email_id'])) { ?>                               
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                
 <?php                            
 } else {                                
     //We have created a function to check whether this particular product is added to cart or not.                                 
     if (check_if_added_to_cart(9)) { 
//This is same as if(check_if_added_to_cart != 0)                                     
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
} else {                                    
    ?>                                    
<a href="includes/cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                   
  <?php                                
  }                            
  }                             
  ?>

</div>
</div>
</div>
<div class="col-md-3 col-sm-6 home-feature">
<div class="thumbnail">
<img src="img/shirt1.png" alt="This is a Camera" >
<div class="caption">
<h3>  Luis Philip</h3>
<p> Price:1000.00 </p>

<?php if (!isset($_SESSION['email_id'])) { ?>                               
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                
 <?php                            
 } else {                                
     //We have created a function to check whether this particular product is added to cart or not.                                 
     if (check_if_added_to_cart(10)) { 
//This is same as if(check_if_added_to_cart != 0)                                     
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
} else {                                    
    ?>                                    
<a href="includes/cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                   
  <?php                                
  }                            
  }                             
  ?>

</div>
</div>
</div>

<div class="col-md-3 col-sm-6 home-feature">
<div class="thumbnail">
<img src="img/shirt.jpg" alt="This is a Camera" >
<div class="caption">
<h3>  John Zok</h3>
<p> Price:1500.00 </p>

<?php if (!isset($_SESSION['email_id'])) { ?>                               
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                
 <?php                            
 } else {                                
     //We have created a function to check whether this particular product is added to cart or not.                                 
     if (check_if_added_to_cart(11)) { 
//This is same as if(check_if_added_to_cart != 0)                                     
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
} else {                                    
    ?>                                    
<a href="includes/cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                   
  <?php                                
  }                            
  }                             
  ?>

</div>
</div>
</div>

<div class="col-md-3 col-sm-6 home-feature">
<div class="thumbnail">
<img src="img/shirt1.png" alt="This is a Camera">
<div class="caption">
<h3>  Jalsani </h3>
<p> Price:1300.00 </p>

<?php if (!isset($_SESSION['email_id'])) { ?>                               
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                
 <?php                            
 } else {                                
     //We have created a function to check whether this particular product is added to cart or not.                                 
     if (check_if_added_to_cart(12)) { 
//This is same as if(check_if_added_to_cart != 0)                                     
echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';                                
} else {                                    
    ?>                                    
<a href="includes/cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                   
  <?php                                
  }                            
  }                             
  ?>

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