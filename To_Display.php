<?php

$con=mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error("$con"));
session_start();
$select_query="SELECT id,email_id,first_name FROM users";
$select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));

?>

<!DOCTYPE html>
<html>
<head>
<title> <?php echo "Welcome | Lifestyle Store"; ?> </title>
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

    <div class="container">
       
        <?php while($row=mysqli_fetch_array($select_query_result)){ ?>
        
        <div class="row"
             <div class="col-lg-12">
                 <h4> User </h4>
            </div>
       </div>
         <div class="row"
             <div class="col-xs-2">
                 ID
            </div>
              <div class="col-xs-10">
              <?php echo $row['id'];  ?>
         </div>
       </div>
        
        <div class="row"
             <div class="col-xs-2">
                 EMAIL
            </div>
              <div class="col-xs-10">
              <?php echo $row['email_id'];  ?>
         </div>
      </div>
        
        <div class="row"
             <div class="col-xs-2">
                 First_Name
            </div>
              <div class="col-xs-10">
              <?php echo $row['first_name'];  ?>
         </div>
      </div>
        
        <div class="row"
             <div class="col-xs-2">
                 First_Name
            </div>
              <div class="col-xs-10">
              <?php echo $row['first_name'];  ?>
         </div>
      </div>
        
      
          <?php } ?>
        <hr/>
    </div>
    
</body>
</html>
