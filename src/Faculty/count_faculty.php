<?php
session_start();

$con = mysqli_connect('localhost', 'root', 'root', 'project-team-system');
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

$query1="SELECT id,COUNT(*) FROM facultydetails";
$w=mysqli_query($con,$query1);

  while($row = mysqli_fetch_array($result)){
    echo $row;
  }
?>
