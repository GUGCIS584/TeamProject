<?php
error_reporting(1);
ini_set('display_errors', 1);
include_once 'Database/config.php';

/* Query to select the total order amount */
$sqlOrdersSum = $con->query("SELECT SUM(Total_Order) AS totalOrderSum FROM orders");
$orderSum = mysqli_fetch_array($sqlOrdersSum);

?>


<!DOCTYPE html>
<head>
	<title>University Financial System</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->


	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

<script>
$(document).ready(function(){

    $("#btnsubmit").click(function(){

		if($('#name').val()=="" || $('#department').val()=="" || $('#major').val()=="" || $('#noc').val()=="" || $('#fpc').val()=="" || $('#ws').val()=="" || $('#noh').val()=="" || $('#tow').val()=="" || $('#pph').val()==""){
			alert("Fill all Fields First!")
			}
		else{

        var edata = $("#frmdata").serialize();
			$.ajax({
		url:"submitapi.php",
		type:"POST",
		data:edata,
		beforeSend: function()
		{
			$("#btnsubmit").html("<center><i class='fa fa-spinner fa-spin'></center>");
		},
		success: function(res)
		{
		$("#btnsubmit").html('<span>Submit<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i></span>');
		$("#frmdata").hide(500);
		$("#thanks").html(res);
		$("#thanks").show(500);

		}

		});
		}
    });
});
</script>
</head>
<body style="background:#e6e6e6">

<div class="container">
  <span class="contact100-form-title">
    University Financial System
  </span>
            <nav class="navbar navbar-expand-lg navbar-expand-sm navbar-light bg-light" style="border-radius:10px">


                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link label-input100" href="/src/index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link label-input100" href="student/StIndex.php">Student</a>
                        </li>
												<li class="nav-item">
													<?php
												//	$con = mysqli_connect('localhost', 'root', '7606MA', 'project-team-system');	
																									

												$sql= $con->query("SELECT id,COUNT(*) FROM studentdetails");

													while($data = mysqli_fetch_array($sql)){
													echo '<input type="text" name="student" id="student" style="width:30px"class="input100" disabled value='.$data['COUNT(*)'].' />';
													}
													?>
												 </li>
												<li class="nav-item">
													  <span class="sr-only">(</span><label type="text" name="student" id="student"><span class="sr-only">)</span>
 												 </li>
												<li class="nav-item">
                                <a class="nav-link label-input100" href="Faculty/Faculty.php">Faculty</a>
                              </li>
															<li class="nav-item">
																<?php
												//	$con = mysqli_connect('localhost', 'root', '7606MA', 'project-team-system');	

																										  $sql= $con->query("SELECT id,COUNT(*) FROM facultydetails");

																while($data = mysqli_fetch_array($sql)){
																echo '<input type="text" name="faculty" id="faculty" style="width:30px"class="input100" disabled value='.$data['COUNT(*)'].' />';
																}
																?>
															 </li>

                        <li class="nav-item">
                                <a class="nav-link label-input100" href="supplier/supplier.php">Supplier</a>
                                  </li>
																	<li class="nav-item">
																		<?php
														//	$con = mysqli_connect('localhost', 'root', '7606MA', 'project-team-system');	

																			  $sql= $con->query("SELECT supp_id,COUNT(*) FROM Supplier");

																		while($data = mysqli_fetch_array($sql)){
																		echo '<input type="text" name="supplier" id="supplier" style="width:30px"class="input100" disabled value='.$data['COUNT(*)'].' />';
																		}
																		?>
																	 </li>


                      </ul>


                    </div>
                  </nav>
<br/>
									<form  method="post" class="contact100-form validate-form" id="frmdata">

									<table class="col-lg-12 col-md-12 col-sm-12 " >

										<tr>
											<td>
												<div class="wrap-input100 validate-input bg1" style="width:98%">
											    <span class="label-input100">Monthly Expense on Student *</span>
													<?php
													//$con = mysqli_connect('localhost', 'root', '7606MA', 'project-team-system');												
														$sql= $con->query("SELECT SUM(noh*pph*4) FROM studentdetails");

													while($data = mysqli_fetch_array($sql)){
													echo '<input class="input100" type="text" name="student_expense" id="student_expense" placeholder="Student Expenses" disabled value='.'$&nbsp;'.$data['SUM(noh*pph*4)'].' />';
													}
													?>
												 </div>
											</td>
											<td>
												<div class="wrap-input100 validate-input bg1" style="margin-left:auto; width:98%">
											    <span class="label-input100">Monthly Income From Student*</span>
													<?php
													//$con = mysqli_connect('localhost', 'root', '7606MA', 'project-team-system');												
														$sql= $con->query("SELECT SUM(noc*fpc/6) FROM studentdetails");

													while($data = mysqli_fetch_array($sql)){
													echo '<input class="input100" type="text" name="student_income" id="student_income" placeholder="Student Income" disabled value='.'$&nbsp;'.$data['SUM(noc*fpc/6)'].' />';
													}
													?>

											  </div>
											</td>
										</tr>

										<tr>
											<td>
												<div class="wrap-input100 validate-input bg1"style="width:98%">
													<span class="label-input100">Monthly Expense on Faculty*</span>
													<?php
													//$con = mysqli_connect('localhost', 'root', '7606MA', 'project-team-system');												
														$sql= $con->query("SELECT SUM(faculty_total) FROM facultydetails");

													while($data = mysqli_fetch_array($sql)){
													echo '<input class="input100" type="text" name="faculty_expense" id="faculty_expense" placeholder="Faculty Expense" disabled value='.'$&nbsp;'.$data['SUM(faculty_total)'].' />';
													}
													?>
													</div>
											</td>
											<td>
												<div class="wrap-input100 validate-input bg1" style="margin-left:auto; width:98%">
													<span class="label-input100">Monthly University Expenses*</span>
                          <?php
                          //$con = mysqli_connect('localhost', 'root', 'root', 'project-team-system');
                          
                          $sql= $con->query("SELECT SUM(faculty_total) FROM facultydetails");
													$sql1= $con->query("SELECT SUM(noh*pph*4) FROM studentdetails");
													$sql2= $con->query("SELECT SUM(total) FROM supplier");


                          $data= mysqli_fetch_array($sql);

													$data1 = mysqli_fetch_array($sql1);

													$data2 = mysqli_fetch_array($sql2);

													$intID=$data[0]+$data1[0]+$data2[0] + $orderSum["totalOrderSum"];

                          echo '<input class="input100" type="text" name="supplier_expense" id="supplier_expense"
													placeholder="Supplier Expenses" disabled value='.'$&nbsp;'.$data1['SUM(noh*pph*4)'].'&nbsp;+&nbsp;'.'$&nbsp;'.$data['SUM(faculty_total)'].'&nbsp;+&nbsp;'.'$&nbsp;'.$orderSum['totalOrderSum'].'&nbsp;=&nbsp;'.'$&nbsp;'.$intID.' />';
                          ?>		</div>
											</td>
										</tr>
										<tr>

											<td>
												<div class="wrap-input100 validate-input bg1"style="width:98%">
													<span class="label-input100">Monthly Expense on Supplier*</span>
													<?php
												//	$con = mysqli_connect('localhost', 'root', '7606MA', 'project-team-system');												
														//$sql= $con->query("SELECT SUM(total) FROM supplier");

													//while($data = mysqli_fetch_array($sql)){
													echo '<input class="input100" type="text" name="supplier_expense" id="supplier_expense" placeholder="Supplier Expenses" disabled value="$ '  . $orderSum['totalOrderSum'] . '" />';
													//}
													?>		 												</div>
											</td>

											<td>
												<div class="wrap-input100 validate-input bg1" style="margin-left:auto; width:98%">
											    <span class="label-input100">Monthly University Income*</span>
													<?php
													//$con = mysqli_connect('localhost', 'root', '7606MA', 'project-team-system');
																										$sql= $con->query("SELECT SUM(faculty_total) FROM facultydetails");
													$sql1= $con->query("SELECT SUM(noh*pph*4) FROM studentdetails");
													$sql2= $con->query("SELECT SUM(total) FROM supplier");
													$sql3= $con->query("SELECT SUM(noc*fpc/6) FROM studentdetails");


													$data= mysqli_fetch_array($sql);

													$data1 = mysqli_fetch_array($sql1);

													$data2 = mysqli_fetch_array($sql2);

													$data3= mysqli_fetch_array($sql3);

													$intID=$data[0]+$data1[0]+$data2[0];
													$intID2=$data3[0];
													$intID3=$intID2-$intID;

													echo '<input class="input100" type="text" name="university_income" id="university_income"
													placeholder="SUniversity Income" disabled value='.'$&nbsp;'.$intID2.'&nbsp;-&nbsp;'.'$&nbsp;'.$intID.'&nbsp;=&nbsp;'.'$&nbsp;'.$intID3.' />';
													?>
											 	  </div>
											</td>
										</tr>


									</table>
								</form>
    </div>



</body>
</html>
