   <?php
include '../Database/config.php';
@session_start();


    $name = mysqli_real_escape_string($con,$_POST[" Name"]);
    $product = mysqli_real_escape_string($con,$_POST["Product"]);
    $date = mysqli_real_escape_string($con,$_POST["Date"]);
  	$price = mysqli_real_escape_string($con,$_POST["Price"]);
  	$quantities = mysqli_real_escape_string($con,$_POST["Quantities"]);
  	$total = mysqli_real_escape_string($con,$_POST["Total"]);
  	$totalorder = mysqli_real_escape_string($con,$_POST["Total Order"]);

    $q = mysqli_query($con,"INSERT INTO `studentdetails`(`name`, `product`, `date`,
      `price`, `quantities`, `total`, `total order`) VALUES ('".$name."','".$product."','".$date."',
        '".$price."','".$quantities."','".$total."','".$totalorder."')");




	if($q>0){
			  echo 'Supplier Details has been added!';


  }
  else {
	  echo 'Submitting Failed due to unknown reason.';
  }



?>
