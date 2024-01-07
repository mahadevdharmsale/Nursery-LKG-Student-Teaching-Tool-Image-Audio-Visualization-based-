<?php

session_start();
if(!isset($_SESSION['login_admin']))
{
	header("location:login.php");
}
include('dbconnect.php');
$admin_check=$_SESSION['login_admin'];

$ses_sql= mysqli_query($con,"select * from admin where a_name='$admin_check'");

$row=mysqli_fetch_array($ses_sql);


echo " Welcome/" .$login_session=$row['a_name']

?>