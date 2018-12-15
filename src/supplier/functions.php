<?php
@session_start();
			include "../database/config.php";


	
	  mysqli_query($con,"SET character_set_client = utf8");
    mysqli_query($con,"SET character_set_connection = utf8");
    mysqli_query($con,"SET character_set_results = utf8");
	
	$filename=$_FILES["file"]["tmp_name"];		
	$file = fopen($filename, "r");
	$i=0;
	if(isset($_POST['ignore'])==1){
            while (($getData = fgetcsv($file, 10000, ",")) !== FALSE) {
				
				if($i>0) {
                $sql = "INSERT into `supplier`(`supp_name`) VALUES ('".$getData[0]."')";
                $result = mysqli_query($con, $sql);
				 $last_id = $con->insert_id;
				$sql2 = "INSERT INTO `orders`(`supp_id`, `Date`, `Product`, `Price`, `Quantities`, `Total`, `Total_Order`) VALUES ('".$last_id."','".$getData[3]."','".$getData[1]."','".$getData[2]."','".$getData[4]."','".$getData[5]."','".$getData[6]."')";
                $result2 = mysqli_query($con, $sql2);
                
            }
			$i++;
			
			}
			if (!isset($result)) {
                    echo "Invalid File:Please Upload CSV File.";
                } else {
                    echo "CSV File has been successfully Imported.";
                }
            fclose($file);
	}
	else{
		 while (($getData = fgetcsv($file, 10000, ",")) !== FALSE) {
				
				
                $sql = "INSERT into `supplier`(`supp_name`) VALUES ('".$getData[0]."')";

                $result = mysqli_query($con, $sql);
				 $last_id = $con->insert_id;
				 $sql2 = "INSERT INTO `orders`(`supp_id`, `Date`, `Product`, `Price`, `Quantities`, `Total`, `Total_Order`) VALUES ('".$last_id."','".$getData[3]."','".$getData[1]."','".$getData[2]."','".$getData[4]."','".$getData[5]."','".$getData[6]."')";
                $result2 = mysqli_query($con, $sql2);
                
            }
			if (!isset($result)) {
                    echo "Invalid File:Please Upload CSV File.";
                } else {
                    echo "CSV File has been successfully Imported.";
                }
            fclose($file);
		}
	
	

 ?>