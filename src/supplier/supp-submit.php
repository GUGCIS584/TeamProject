   <?php
include 'config.php';
@session_start();


    $name = mysqli_real_escape_string($con,$_POST["Company Name"]);
    $product = mysqli_real_escape_string($con,$_POST["Product"]);
  	$price = mysqli_real_escape_string($con,$_POST["Price"]);
  	$quantities = mysqli_real_escape_string($con,$_POST["Quantities"]);
  	$date = mysqli_real_escape_string($con,$_POST["Date"]);
  	$total = mysqli_real_escape_string($con,$_POST["Total"]);
  	$totalorder = mysqli_real_escape_string($con,$_POST["Total Order"]);




    $query="INSERT INTO facultydetails (name,product,price,qunatities,date,total,total order)
    VALUES ('$name','$product','$price','$quantities','$date','$total','$totalorder')";



	if($q>0){
			  echo 'Supplier Details has been added!';


  }
  else {
	  echo 'Submitting Failed due to unknown reason.';
  }



?>
