<?php
session_start();

$con = mysqli_connect('localhost', 'root', 'root', 'project-team-system');
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

$name = mysqli_real_escape_string($con,$_POST['Name']);
$id = mysqli_real_escape_string($con,$_POST['ID']);
$department = mysqli_real_escape_string($con,$_POST['Department']);
$typeofjob = mysqli_real_escape_string($con,$_POST['Type_of_job']);
$totalsubject = mysqli_real_escape_string($con,$_POST['Subject_total']);
$sub1 = mysqli_real_escape_string($con,$_POST['Subject1']);
$sub2 = mysqli_real_escape_string($con,$_POST['Subject2']);
$sub3 = mysqli_real_escape_string($con,$_POST['Subject3']);
$sub4 = mysqli_real_escape_string($con,$_POST['Subject4']);
$sub5 = mysqli_real_escape_string($con,$_POST['Subject5']);
$ysalary = mysqli_real_escape_string($con,$_POST['Ysalary']);
$paypersubject = mysqli_real_escape_string($con,$_POST['Paypersubject']);
$hours = mysqli_real_escape_string($con,$_POST['hrs']);

if($typeofjob=="part-time"){

   $monthly_total=$totalsubject*$paypersubject*$hours*4;
}
  elseif($typeofjob=="full-time"){
    $monthly_total=$ysalary/12;
  }
$total=

$query="INSERT INTO facultydetails (id,name,department,typeofjob,subject_total,subject1,subject2,subject3,subject4,subject5,yearly_salary,pay_per_subject,hours,faculty_total)
VALUES ('$id','$name','$department','$typeofjob','$totalsubject','$sub1','$sub2','$sub3','$sub4','$sub5','$ysalary','$paypersubject','$hours','$monthly_total')";

$q = mysqli_query($con,$query);

if($q>0){
     echo 'Faculty Details has been added!';
}
else {
 echo 'Submitting Failed due to unknown reason.';
}

?>
