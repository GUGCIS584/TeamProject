<?php


$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "project-team-system";

$con = mysqli_connect($db_host,$db_username,$db_password,$db_name);

mysqli_query($con,"set names 'utf8'");

if(!$con){
    die("Connection Failed:".mysqli_connect_errno());
}
?>