   <?php
include 'config.php';
@session_start();


    $name = mysqli_real_escape_string($con,$_POST["name"]);
	$department = mysqli_real_escape_string($con,$_POST["department"]);
	$major = mysqli_real_escape_string($con,$_POST["major"]);
	$noc = mysqli_real_escape_string($con,$_POST["noc"]);
	$fpc = mysqli_real_escape_string($con,$_POST["fpc"]);
	$ws = mysqli_real_escape_string($con,$_POST["ws"]);
	$noh = mysqli_real_escape_string($con,$_POST["noh"]);
	$tow = mysqli_real_escape_string($con,$_POST["tow"]);
	$pph = mysqli_real_escape_string($con,$_POST["pph"]);
   

	
		$q = mysqli_query($con,"INSERT INTO `studentdetails`(`name`, `department`, `major`, `noc`, `fpc`, `ws`, `noh`, `tow`, `pph`) VALUES ('".$name."','".$department."','".$major."','".$noc."','".$fpc."','".$ws."','".$noh."','".$tow."','".$pph."')");
		
		
	

	if($q>0){
			  echo 'Student Details has been added!';


  }
  else {
	  echo 'Submitting Failed due to unknown reason.';
  }



?>