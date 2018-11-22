<?php


?>
<!DOCTYPE html>
<head>
	<title>Student Details</title>
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

<body>
  <div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" id="frmdata">
				<span class="contact100-form-title">
					Supplier
				</span>


        <div class="wrap-input100 validate-input bg1">
          <span class="label-input100">Company name *</span>
          <input class="input100" type="text" name="Company name" id="Company name" placeholder="Enter Company Name">
        </div>

        <div class="wrap-input100 validate-input bg1">
          <span class="label-input100">Product *</span>
          <input class="input100" type="text" name="Product" id="Product" placeholder="Enter Product Name">
        </div>
        <div class="wrap-input100 validate-input bg1">
          <span class="label-input100">Price *</span>
          <input class="input100" type="text" name="Price" id="Price" placeholder="Enter Price">
        </div>
        <div class="container-contact100-form-btn">
          <button class="contact100-form-btn" type="button" onclick="order.php" id="btnsubmit">
            <span>
              Submit
              <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
            </span>
          </button>
        </div>
    </div>

</form>

<h3 class="dis-none" id="thanks" style="text-align:center;"></h3>
</div>
</div>
</body>
</html>
