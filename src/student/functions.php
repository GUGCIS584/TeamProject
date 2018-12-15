<?php
@session_start();
			include "../database/config.php";


	
	  mysqli_query($con,"SET character_set_client = utf8");
    mysqli_query($con,"SET character_set_connection = utf8");
    mysqli_query($con,"SET character_set_results = utf8");
	$types = array(
    'text/csv',
    'text/plain',
    'application/csv',
    'text/comma-separated-values',
    'application/excel',
    'application/vnd.ms-excel',
    'application/vnd.msexcel',
    'text/anytext',
    'application/octet-stream',
    'application/txt',
);
			$filename=$_FILES["file"]["name"];	

	if (in_array($_FILES['file']['type'], $types)) {
			$target = "../csv/".basename($filename);
} else {
echo '<label class="label label-danger center-block" style="width:250px;height:auto;line-height:15px;font-size:13px;">Invalid CSV file uploaded!<br />Please upload correct csv file!</label>';
exit();
} 

			move_uploaded_file($_FILES['file']['tmp_name'], $target);	
			
			

$result1=mysqli_query($con,"select count(*) count from studentdetails");
$r1=mysqli_fetch_array($result1);
$count1=(int)$r1['count'];
//If the fields in CSV are not seperated by comma(,)  replace comma(,) in the below query with that  delimiting character 
//If each tuple in CSV are not seperated by new line.  replace \n in the below query  the delimiting character which seperates two tuples in csv
// for more information about the query http://dev.mysql.com/doc/refman/5.1/en/load-data.html
if(isset($_POST['ignore'])==1){
mysqli_query($con, '
    LOAD DATA LOCAL INFILE "../csv/'.$filename.'"
        INTO TABLE studentdetails
        FIELDS TERMINATED by \',\'
		OPTIONALLY ENCLOSED BY \'"\'
        LINES TERMINATED BY \'\n\'
		IGNORE 1 LINES
		(name,department,major,noc,fpc,ws,noh,tow,pph)
')or die(mysql_error());
}
else{
	mysqli_query($con, '
    LOAD DATA LOCAL INFILE "../csv/'.$filename.'"
        INTO TABLE studentdetails
        FIELDS TERMINATED by \',\'
		OPTIONALLY ENCLOSED BY \'"\'
        LINES TERMINATED BY \'\n\'
		(name,department,major,noc,fpc,ws,noh,tow,pph)
')or die(mysql_error());
	}
$result2=mysqli_query($con,"select count(*) count from studentdetails");
$r2=mysqli_fetch_array($result2);
$count2=(int)$r2['count'];

$count=$count2-$count1;
if($count>0)
unlink('../csv/'.$filename);
echo '<label class="label label-success center-block" style="width:250px;height:auto;line-height:15px;font-size:13px;">Success total '.$count.' records have<br />been added to the table</label>';

 ?>