   <?php
include '../Database/config.php';
@session_start();


    $name = mysqli_real_escape_string($con,$_POST["Name"]);
    $date = mysqli_real_escape_string($con,$_POST["Date"]);
    $product = mysqli_real_escape_string($con,$_POST["Product"]);
  	$price = mysqli_real_escape_string($con,$_POST["Price"]);
  	$quantities = mysqli_real_escape_string($con,$_POST["Quantities"]);
  	$total = mysqli_real_escape_string($con,$_POST["Total"]);
  	$totalorder = mysqli_real_escape_string($con,$_POST["Total Order"]);


    $q = mysqli_query($con,"INSERT INTO `Supplier`(`Name`, `Date`, `Product`,
      ``, `Price`, `Quantities`, `Total`, `Total Order`) VALUES ('".$name."','".$date."','".$product."',
        '".$price."','".$quantities."','".$Subject_total."','".$total."')");




	if($q>0){
			  echo 'Supplier Details has been added!';


  }
  else {
	  echo 'Submitting Failed due to unknown reason.';
  }



?>
