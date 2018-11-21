   <?php
include 'config.php';
@session_start();


    $name = mysqli_real_escape_string($con,$_POST["Company Name"]);
	
   

	
		$q = mysqli_query($con,"INSERT INTO `atom`(`name`) VALUES ('".$name."')");
		
		
	

	if($q>0){
			  echo 'Student Details has been added!';


  }
  else {
	  echo 'Submitting Failed due to unknown reason.';
  }



?>