<?php



class User
{
  public $name;
  public $department;
  public $typeofjob;
  public $totalsubject;
  public $sub1;
  public $sub2;
  public $sub3;
  public $sub4;
  public $sub5;
  public $yearlysalary;
  public $monthlysalary;
  public $paypersubject;
  public $hours;

  function __construct($name="Josh",$department="CIS",$yearlysalary="60000",$monthlysalary="5000" ){

     }


  public function setName($name)
  {
    $this->name=$name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setDepartment($department)
  {
    $this->department=$department;
  }

  public function getDepartment()
  {
    return $this->department;
  }
  public function setTypeofJob($typeofjob)
  {
    $this->typeofjob=$typeofjob;
  }

  public function getTypeofJob($typeofjob)
  {
    return $this->typeofjob;
  }
  public function setTotalSubject($totalsubject)
  {
    $this->totalsubject=$totalsubject;
  }

  public function getTotalSubject($totalsubject)
  {
    return $this->totalsubject;
  }
  public function setSubject1($sub1)
  {
    $this->sub1=$sub1;
  }

  public function getSubject1($sub1)
  {
    return $this->sub1;
  }
  public function setSubject2($sub2)
  {
    $this->sub2=$sub2;
  }

  public function getSubject2($sub2)
  {
    return $this->sub2;
  }  public function setSubject3($sub3)
    {
      $this->sub3=$sub3;
    }

    public function getSubject3($sub3)
    {
      return $this->sub3;
    }  public function setSubject4($sub4)
      {
        $this->sub4=$sub4;
      }

      public function getSubject4($sub4)
      {
        return $this->sub4;
      }  public function setSubject5($sub5)
        {
          $this->sub5=$sub5;
        }

        public function getSubject5($sub5)
        {
          return $this->sub5;
        }
   public function setYearlySalary($yearlysalary)
  {
    if($yearlysalary>0){
      $this->yearlysalary=$yearlysalary;
    }
    if ($yearlysalary==0){
      throw new \InvalidArgumentException("Yearly Salary cannot be zero");
	   }

  }
  public function getYearlySalary()
  {
    return $this->yearlysalary;
  }
  public function setMonthlySalary($monthlysalary)
 {
   if($monthlysalary>0){
     $this->monthlysalary=$monthlysalary;
   }
   if ($monthlysalary==0){
     throw new \InvalidArgumentException("Monthly Salary cannot be zero");
    }

 }

  public function getMonthlySalary()
  {
    $monthlysalary=$yearsalary/12;
    return $this->$monthlysalary;
  }
  public function setPayPerSubject($paypersubject)
  {
    $this->paypersubject=$paypersubject;
  }

  public function getPayPerSubject($paypersubject)
  {
    return $this->paypersubject;
  }  public function setHours($hours)
    {
      $this->hours=$hours;
    }

    public function getHours($hours)
    {
      return $this->hours;
    }

}

?>
<!Doctype html>

<html>
<head>
  <title>Faculty Details</title>


	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">


</head>
<body>
  <div class="container-contact100">
    <div class="wrap-contact100">
      <nav class="navbar navbar-expand-lg navbar-expand-sm navbar-light bg-light" style="border-radius:10px">


              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link label-input100" href="/src/index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link label-input100" href="/src/student/StIndex.php">Student</a>
                  </li>
                  <li class="nav-item">
                    <?php
													$con = mysqli_connect('localhost', 'root', '7606MA', 'project-team-system');
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
                          <a class="nav-link label-input100" href="/src/Faculty/Faculty.php">Faculty</a>
                        </li>
                        <li class="nav-item">
                          <?php
      													$con = mysqli_connect('localhost', 'root', '7606MA', 'project-team-system');                          $sql= $con->query("SELECT id,COUNT(*) FROM facultydetails");

                          while($data = mysqli_fetch_array($sql)){
                          echo '<input type="text" name="faculty" id="faculty" style="width:30px"class="input100" disabled value='.$data['COUNT(*)'].' />';
                          }
                          ?>
                         </li>

                         <li class="nav-item">
                          <a class="nav-link label-input100" href="/src/supplier/supplier.php">Supplier</a>
                            </li>
                            <li class="nav-item">
                              <?php
          													$con = mysqli_connect('localhost', 'root', '7606MA', 'project-team-system');                              $sql= $con->query("SELECT supp_id,COUNT(*) FROM Supplier");

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

        <span class="contact100-form-title">
          Faculty Details
        </span>

  <div class="wrap-input100 validate-input bg1">
    <span class="label-input100">Name *</span>
    <input class="input100" type="text" name="Name" id="Name" placeholder="Enter Your Name">
  </div>
  <div class="wrap-input100 validate-input bg1">
    <span class="label-input100">Department *</span>
    <input class="input100" type="text" name="Department" id="Department" placeholder="Enter Department">
  </div>
  <div class="wrap-input100 validate-input bg1">
    <span class="label-input100">Type of Job *</span>
    <select  type="text" name="Type_of_job" id="Type_of_job" class="input100"  style="border-color:#F1F1F1">
        <option value=0 selected disabled>Select Type</option>
        <option value="part-time">Part-time</option>
        <option value="full-time">Full-time</option>
    </select>
  </div>
  <div class="wrap-input100 validate-input bg1">
    <span class="label-input100">Total Subjects *</span>
    <select  type="text" name="Subject_total" id="Subject_total" class="input100" style="border-color:#F1F1F1">
        <option value=0 selected disabled>Select Total Subjects</option>
        <option value=1>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
        <option value=4>4</option>
        <option value=5>5</option>
    </select>
  </div>

    <div class="wrap-input100 validate-input bg1" id="sub_div1">
      <input type="text" class="input100" name="Subject1" id="Subject1" placeholder="Name of Subject" >
    </div>
    <div class="wrap-input100 validate-input bg1" id="sub_div2">
      <input type="text" class="input100" name="Subject2" id="Subject2" placeholder="Name of Subject" >
    </div>
    <div class="wrap-input100 validate-input bg1" id="sub_div3">
      <input type="text" class="input100" name="Subject3" id="Subject3" placeholder="Name of Subject"  >
    </div>
    <div class="wrap-input100 validate-input bg1" id="sub_div4">
      <input type="text" class="input100" name="Subject4"id="Subject4" placeholder="Name of Subject" >
    </div>
    <div class="wrap-input100 validate-input bg1" id="sub_div5">
      <input type="text" class="input100" name="Subject5"id="Subject5" placeholder="Name of Subject" >
    </div>

  <div class="wrap-input100 validate-input bg1" id="Yearly_salary">
    <span class="label-input100">Yearly Salary *</span>
    <input type="text" class="input100" name="Ysalary" id="Ysalary" placeholder="Yearly Salary" >
  </div>
  <div class="wrap-input100 validate-input bg1" id="Pay_per_sebject">
    <span class="label-input100">Pay Per Subject (Wage) *</span>
    <input type="text" class="input100" name="Paypersubject" id="Paypersubject" placeholder="Pay Per Subject" >
  </div>
  <div class="wrap-input100 validate-input bg1" id="Hours">
    <span class="label-input100">No. of Hours (Weekly)*</span>
    <input type="text"  class="input100" name="hrs" id="hrs" placeholder="No. of Hours">
  </div>
  <div class="wrap-input100 validate-input bg1" id="File">
  					<input type="file" name="file-1[]" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple="">
  					<label for="file-1" class="input100">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
              <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z">
              </path>
              </svg>
              <span>Choose a file…</span></label>

  </div>


  <div class="container-contact100-form-btn">
    <input  type="submit" class="contact100-form-btn" id="faculty_submit"/>
  </div>
</form>
    <h3 class="dis-none" id="thanks" style="text-align:center;"></h3>
</div>

<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/src/js/custom-file-input.js"></script>
<script type="text/javascript" src="/src/js/jquery.custom-file-input.js"></script>

<script type="text/javascript" src="/src/js/main.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("#Yearly_salary").hide();
  $("#sub_div1").hide();
  $("#sub_div2").hide();
  $("#sub_div3").hide();
  $("#sub_div4").hide();
  $("#sub_div5").hide();
  $("#Pay_per_sebject").hide();
  $("#Hours").hide();


    $('#Subject_total').on('change', function() {
      if ( this.value == 0){
        $("#sub_div1").hide();
        $("#sub_div2").hide();
        $("#sub_div3").hide();
        $("#sub_div4").hide();
        $("#sub_div5").hide();
      }
      if ( this.value == 1){
        $("#sub_div1").show();
        $("#sub_div2").hide();
        $("#sub_div3").hide();
        $("#sub_div4").hide();
        $("#sub_div5").hide();
      }
      else if ( this.value == 2){
        $("#sub_div1").show();
        $("#sub_div2").show();
        $("#sub_div3").hide();
        $("#sub_div4").hide();
        $("#sub_div5").hide();
      }
      else if ( this.value == 3){
        $("#sub_div1").show();
        $("#sub_div2").show();
        $("#sub_div3").show();
        $("#sub_div4").hide();
        $("#sub_div5").hide();
      }
      else if ( this.value == 4){
        $("#sub_div1").show();
        $("#sub_div2").show();
        $("#sub_div3").show();
        $("#sub_div4").show();
        $("#sub_div5").hide();
      }
      else if ( this.value ==5){
        $("#sub_div1").show();
        $("#sub_div2").show();
        $("#sub_div3").show();
        $("#sub_div4").show();
        $("#sub_div5").show();
      }
    });

    $('#Type_of_job').on('change', function() {
      if ( this.value == 0){
        $("#Yearly_salary").hide();
        $("#Pay_per_sebject").hide();
        $("#Hours").hide();
      }
      if ( this.value == "part-time"){
        $("#Yearly_salary").hide();
        $("#Pay_per_sebject").show();
        $("#Hours").show();
      }
      else if ( this.value == "full-time"){
        $("#Yearly_salary").show();
        $("#Pay_per_sebject").hide();
        $("#Hours").hide();
      }
    });

    $("#frmdata").on('submit', function(event){
     event.preventDefault();


   if($('#Name').val()=="" || $('#ID').val()=="" || $('#Department').val()==""|| $('#Type_of_job').val()=="" || $('#Subject_total').val()=="")
    {
      if($('#file-1').val()!=""){

            var edata = $("#frmdata").serialize();
            console.log(edata);
          $.ajax({
        url:"submitfacultydetails.php",
        type:"POST",
        data:edata,
        beforeSend: function()
        {
          $("#faculty_submit").html("<center><i class='fa fa-spinner fa-spin'></center>");
        },
        success: function(res)
        {
        $("#faculty_submit").html('<span>Submit<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i></span>');
        $("#frmdata").hide(500);
        $("#thanks").html(res);
        $("#thanks").show(500);

        }

        });

      }
      else{
        alert("Fill all Fields First!")
      }

			}

		else{

        var edata = $("#frmdata").serialize();
        console.log(edata);
			$.ajax({
		url:"submitfacultydetails.php",
		type:"POST",
		data:edata,
		beforeSend: function()
		{
			$("#faculty_submit").html("<center><i class='fa fa-spinner fa-spin'></center>");
		},
		success: function(res)
		{
		$("#faculty_submit").html('<span>Submit<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i></span>');
		$("#frmdata").hide(500);
		$("#thanks").html(res);
		$("#thanks").show(500);

		}

		});
		}
    });
});
</script>
  </body>
</html>
