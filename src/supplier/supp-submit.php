<?php
error_reporting(1);
ini_set('display_errors', 1);
include '../Database/database.php';
@session_start();

class Submit extends database
{
    public function index($data)
    {
    	
        if($data['Name'] == '')
	{
		return 0;
	    	exit;
	}
	if($data['Product'] == '')
	{
		return 0;
	    	exit;
	}
	if($data['Price'] == '')
	{
		return 0;
	    	exit;
	}
	if($data['Quantities'] == '')
	{
		return 0;
	    	exit;
	}
	if($data['Date'] == '')
	{
		return 0;
	    	exit;
	}
	if($data['Total'] == '')
	{
		return 0;
	    	exit;
	}
	if($data['Total_Order'] == '')
	{
		return 0;
	    	exit;
	}
	
	/* inserting to supplier table */
	$data1['supp_name'] = $data['Name'];
	/* Name is not available in orders table. SO, that when $data is inserted to orders table Name will not be send. So, we are unsetting $data['Name'] */
	unset($data['Name']);

    $supplierID = $this->insert('Supplier', $data1);
	if(!$supplierID)
	{
		return 0;
		exit;
	}
	/* inserting to orders table */
	/* supplierID is returned from previous insert function */
	/* $data is send to the function directly as a variable array */
	$data['supp_id'] = $supplierID;
	$res = $this->insert('orders', $data);
	if(!$res)
	{
		return 0;
		exit;
	}

	return 1;
	exit;
    }
	
  
}

if(!isset($_POST))
{
	echo 'Submitting Failed due to unknown reason.';
	exit;
}

$obj = new Submit();
$data = $_POST;
$res = $obj->index($data);
if(!$res)
{
	echo "Something Went Wrong";
	exit;
}

echo "Supplier Submiited SUccessfully";
	exit;

/* $name = mysqli_real_escape_string($con,$_POST["Name"]);
 $product = mysqli_real_escape_string($con,$_POST["Product"]);
 $date = mysqli_real_escape_string($con,$_POST["Date"]);
 $price = mysqli_real_escape_string($con,$_POST["Price"]);
 $quantities = mysqli_real_escape_string($con,$_POST["Quantities"]);
 $total = mysqli_real_escape_string($con,$_POST["Total"]);
 $totalorder = mysqli_real_escape_string($con,$_POST["Total_Order"]);

$q = mysqli_query($con,"INSERT INTO `Supplier`(`supp_name`) VALUES ('".$name."')");




$supplierID = mysqli_insert_id($con);



if($q>0){

$q1 = mysqli_query($con,"INSERT INTO `orders`(`supp_id`, `date`, `product`,
 `price`, `quantities`, `Subject_total`, `total`) VALUES ('".$supplierID."','".$date."','".$product."',
   '".$price."','".$quantities."','".$total."','".$totalorder."')");
	
     echo 'Supplier Details has been added!';


}
else {
 echo 'Submitting Failed due to unknown reason.';
}

*/

?>
