<?php




?>
<!Doctype html>

<html>
<head>
  <title>Faculty Expenses</title>


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
          Faculty Details
        </span>

  <div class="wrap-input100 validate-input bg1">
    <span class="label-input100">Name *</span>
    <input class="input100" type="text" name="Name" id="Name" placeholder="Enter Your Name">
  </div>

  <div class="wrap-input100 validate-input bg1">
    <span class="label-input100">ID *</span>
    <input class="input100" type="text" name="ID" id="ID" placeholder="Enter Your ID">
  </div>
  <div class="wrap-input100 validate-input bg1">
    <span class="label-input100">Department *</span>
    <input class="input100" type="text" name="Department" id="Department" placeholder="Enter Department">
  </div>
  <div class="wrap-input100 validate-input bg1">
    <span class="label-input100">Type of Job *</span>
    <select  type="text" style="border-color:#F1F1F1" id="Type_of_job" class="input100"  placeholder="Type" required autofocus >
        <option value="part-time">Part-time</option>
        <option value="full-time">Full-time</option>
    </select>
  </div>

  <div class="wrap-input100 validate-input bg1">
    <span class="label-input100">Total Subjects *</span>
    <select  type="text" style="border-color:#F1F1F1" id="Subject_total" class="input100" placeholder="Total Subjects" required autofocus >
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
  </div>

    <div class="wrap-input100 validate-input bg1" id="Subject_name1">
      <input type="text" class="input100" placeholder="Name of Subject" required autofocus >
    </div>
    <div class="wrap-input100 validate-input bg1" id="Subject_name2">
      <input type="text" class="input100" placeholder="Name of Subject" required autofocus >
    </div>
    <div class="wrap-input100 validate-input bg1" id="Subject_name3">
      <input type="text" class="input100" placeholder="Name of Subject" required autofocus >
    </div>
    <div class="wrap-input100 validate-input bg1" id="Subject_name4">
      <input type="text" class="input100" placeholder="Name of Subject" required autofocus >
    </div>
    <div class="wrap-input100 validate-input bg1" id="Subject_name5">
      <input type="text" class="input100" placeholder="Name of Subject" required autofocus >
    </div>

  <div class="wrap-input100 validate-input bg1" id="Yearly_salary">
    <span class="label-input100">Yearly Salary *</span>
    <input type="text" class="input100" placeholder="Yearly Salary" required autofocus >
  </div>
  <div class="wrap-input100 validate-input bg1" id="Pay_per_sebject">
    <span class="label-input100">Pay Per Subject *</span>
    <input type="text" class="input100" placeholder="Pay Per Subject" required autofocus >
  </div>
  <div class="wrap-input100 validate-input bg1" id="Hours">
    <span class="label-input100">No. of Hours *</span>
    <input type="text"  class="input100" placeholder="No. of Hours" required autofocus >
  </div>

  <div class="container-contact100-form-btn">
    <button class="contact100-form-btn" type="button" id="faculty_submit">
      <span>
        Submit
        <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
      </span>
    </button>
  </div>
</form>
    <h3 class="dis-none" id="thanks" style="text-align:center;"></h3>
</div>
<script
src="http://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<script type="text/javascript" src="/src/js/main.js"></script>

  </body>
</html>
