<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['login_parents']))
{
	header("location:login.php");
}
include('dbconnect.php');
$parents_check=$_SESSION['login_parents'];

$ses_sql= mysqli_query($con,"select * from parents where p_name='$parents_check'");

$row=mysqli_fetch_array($ses_sql);


echo " Welcome/" .$login_session=$row['p_name']

?>