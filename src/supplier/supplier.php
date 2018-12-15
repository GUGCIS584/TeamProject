<?php
	$base_url = 'localhost/fff/supplier/';
include_once '../Database/config.php';


?>
<!DOCTYPE html>
<head>
	<title>Supplier Details</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->


	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>

<script>
$(document).ready(function(){
    $("#btnsubmit").click(function(){

		if($('#name').val()=="" || $('#department').val()=="" || $('#major').val()=="" || $('#noc').val()=="" || $('#fpc').val()=="" || $('#ws').val()=="" || $('#noh').val()=="" || $('#tow').val()=="" || $('#pph').val()==""){
			alert("Fill all Fields First!")
			}
		else{

        var edata = $("#frmdata").serialize();
			$.ajax({
		url:"supp-submit.php",
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
	$("#import").click(function(e) {
  //insert data into database
if($("#file").val()=="")
		{
			$("#fillall2").show();
		}

else if($("#file").val()!="")
		{
			$("#fillall2").hide();
						

		
	formData = new FormData(); //your form name 
var file_data = $('input[type="file"]')[0].file;
formData.append("file", file_data);
formData.append("function","savepeople"); // new variable for your php condition



$.ajax({
    type:'POST',
    url:'functions.php',     
    data:new FormData($('#insert_form')[0]),
    cache: false,
    contentType: false,
    processData: false,
	beforeSend: function()
		{
			$("#import").attr('disabled','yes');
			$("#message2").html("<center><img src='../images/loader.gif' width='30' height='30'> Please wait! It may take a while to upload</td></center>");
		},
    success: function(res)
		{
 		$('#message2').html(res);
		$("#import").removeAttr('disabled');
		}
});
return false;
		}
	
});	
	
	 $("#individual_btn").click(function(){
        $("#individual_div").slideDown(1000)
		$("#bulk_div").slideUp(1000)
    });
	$("#bulk_btn").click(function(){
        $("#bulk_div").slideDown(1000)
		$("#individual_div").slideUp(1000)

    });
	$("#showfields").click(function(){
        $("#fields").slideToggle(1000)
    });
});
</script>
</head>

<body>
  <div class="container-contact100">
		<div class="wrap-contact100">
			<nav class="navbar navbar-expand-lg navbar-expand-sm navbar-light bg-light" style="border-radius:10px">


              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link label-input100" href="/index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link label-input100" href="/student/StIndex.php">Student</a>
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
                          <a class="nav-link label-input100" href="/Faculty/Faculty.php">Faculty</a>
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
                          <a class="nav-link label-input100" href="/supplier/supplier.php">Supplier</a>
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
            <div class="row">
                    <div class="col-md-12 text-center">
                          <button type="submit" id="individual_btn" class="btn btn-dark">FOR ONE</button>
						  <button type="submit" id="bulk_btn" class="btn btn-dark">FOR BULK</button>
					</div>
				</div><br>
                <div id="individual_div">
		<form class="contact100-form validate-form" id="frmdata">
				<span class="contact100-form-title">
					Supplier
				</span>


        <div class="wrap-input100 validate-input bg1">
          <span class="label-input100">Company Name *</span>
          <input class="input100" type="text" name="Name" id="Name" placeholder="Enter Name">
        </div>

        <div class="wrap-input100 validate-input bg1">
          <span class="label-input100">Product *</span>
          <input class="input100" type="text" name="Product" id="Product" placeholder="Enter Product Name">
        </div>
        <div class="wrap-input100 validate-input bg1">
          <span class="label-input100">Price *</span>
          <input class="input100" type="text" name="Price" id="Price" placeholder="Enter Price">
        </div>
				<div class="wrap-input100 validate-input bg1">
          <span class="label-input100">Date *</span>
          <input class="input100" type="text" name="Date" id="Date" placeholder="Enter Date">
        </div>
				<div class="wrap-input100 validate-input bg1">
          <span class="label-input100">Quantities *</span>
          <input class="input100" type="text" name="Quantities" id="Quantities" placeholder="Enter Qauntities">
        </div>
				<div class="wrap-input100 validate-input bg1">
          <span class="label-input100">Total *</span>
          <input class="input100" type="text" name="Total" id="Total" placeholder="Enter Total">
        </div>
				<div class="wrap-input100 validate-input bg1">
          <span class="label-input100">Total Order *</span>
          <input class="input100" type="text" name="Total Order" id="Total Order" placeholder="Enter Total Order">
        </div>
        <div class="container-contact100-form-btn">
          <button class="contact100-form-btn" type="button" onclick="index.php" id="btnsubmit">
            <span>
              Submit
              <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
            </span>
          </button>
        </div>

</form>
            <h3 class="dis-none" id="thanks" style="text-align:center;"></h3>

</div>

<div id="bulk_div" style="display:none;">
            <div class="row">
               
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                      
                        <div class="panel-body">
                            <div class="row">
							<div class="col-md-12 text-center">
                                    <h2 style="margin-top:0;">BULK SUPPLIERS</h2><br>
                             </div> 
                                   


                                       <div class="col-md-12 text-center">
                                       <label>If you want to submit bulk suppliers so download a csv template and upload it with the bulk suppliers data.<br><br><br></label>
                                       <div class="row">
                                       <div class="col-6"><a href="supplier.csv" download><button type="button" class="btn btn-dark pull-right"><i class="fa fa-download "></i> DOWNLOAD</button></a></div>
                                     	<div class="col-6"><button type="button" id="showfields" class="btn btn-dark pull-left"><i class="fa fa-upload"></i> UPLOAD</button></div>
                                        </div>
                                         </form>

										</div>
                                        
                            </div><br>
                            <div class="row" id="fields" style="display:none;">

                <form class="form-horizontal" id="insert_form" style="margin:auto;text-align:center;">
                    <fieldset>
                        <!-- File Button -->
                        <div class="form-group">
                        <div class="row">
                            <label class="col-md-5 control-label" for="filebutton">Select File</label>
                            <div class="col-md-5">
                                <input type="file" name="file" id="file" required class="input-large">
                                
                               </div></div> 
                               <br>
                                <input type="checkbox" name="ignore" value="1"> <strong>Ignore 1st row?</strong>

                        </div>

                        <!-- Button -->
                        <div class="form-group">
                        <div class="row">
                            <label class="col-md-5 control-label" for="singlebutton">Import data</label>
                            <div class="col-md-5">
                             
                                <button type="button" id="import" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Import</button>
                            </div>
                            </div>
                            <div class="col-md-12">
                            <br>
                            <div id="message2"></div>
                                       
                                    <label class="label label-dark center-block" id="fillall2" style="width:250px;height:20px;line-height:15px;font-size:13px;display:none;">Please Fill All Fields</label>
                            </div>
                        </div>

                    </fieldset>
                </form>

            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
            </div>
            </div>
            </div>

</div>
</div>
</body>
</html>
