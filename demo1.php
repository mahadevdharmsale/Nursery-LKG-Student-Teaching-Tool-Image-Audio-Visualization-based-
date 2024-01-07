<?php
session_start();
if(isset($_SESSION['usersessions'])!="")
{
    header("location:demo.php");
}
require_once 'dbconnect.php';
if(isset($_POST['btn-signup']))
{
    $name=$_POST['name'];
    $pass=$_POST['password'];
    $child=$_POST['child_name'];
    $class=$_POST['class'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];

    $hashed_paasword=password_hash($pass,PASSWORD_DEFAULT);

    $check_email=$DBcon->query("SELECT p_child_name FROM parent WHERE p_child_name='child_name'");
    $count=$check_email->fetch_array();
    if($count==0)
    {
        $query="INSERT INTO parent(p_name,p_password,p_child_name,p_class,p_contact,p_address) VALUES('$name','$hashed_paasword','$child','$class','$contact','$address')";

        if($DBcon->query($query)){
            $msg="Successfully Registered!";
            header("location:demo.php");

            

        }
        else{
            $msg=" &nbsp;error while registering ! ";
        }
    }
    else{
        $msg="Sorry email already taken !";
    }
}
?>




<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration or Sign Up form in HTML CSS | CodingLab </title> 
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #4070f4;
}
.wrapper{
  position: relative;
  max-width: 430px;
  width: 100%;
  background: #fff;
  padding: 34px;
  border-radius: 6px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}
.wrapper h2{
  position: relative;
  font-size: 22px;
  font-weight: 600;
  color: #333;
}
.wrapper h2::before{
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 28px;
  border-radius: 12px;
  background: #4070f4;
}
.wrapper form{
  margin-top: 30px;
}
.wrapper form .input-box{
  height: 52px;
  margin: 18px 0;
}
form .input-box input{
  height: 100%;
  width: 100%;
  outline: none;
  padding: 0 15px;
  font-size: 17px;
  font-weight: 400;
  color: #333;
  border: 1.5px solid #C7BEBE;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
}
.input-box input:focus,
.input-box input:valid{
  border-color: #4070f4;
}
form .policy{
  display: flex;
  align-items: center;
}
form h3{
  color: #707070;
  font-size: 14px;
  font-weight: 500;
  margin-left: 10px;
}
.input-box.button input{
  color: #fff;
  letter-spacing: 1px;
  border: none;
  background: #4070f4;
  cursor: pointer;
}
.input-box.button input:hover{
  background: #0e4bf1;
}
form .text h3{
 color: #333;
 width: 100%;
 text-align: center;
}
form .text h3 a{
  color: #4070f4;
  text-decoration: none;
}
form .text h3 a:hover{
  text-decoration: underline;
}
        </style>

   </head>
<body>
  <div class="wrapper">
    <h2>Registration</h2>
    <form action="" method="POST">
      <div class="input-box">
      <input type="text" name="name" id="name" value="" placeholder="Enter Parent Name"></br></br>
      </div>
      <div class="input-box">
      <input type="text" name="child_name" id="child_name" value="" placeholder="Enter Your Girl/Boy Name"></br>
      </div>
      <div class="input-box">
      <input type="password" name="password" id="myInput" value="" placeholder="Enter Your Password"></br>
      </div>
      <div class="input-box">
      <input type="text" name="contact" id="contact" value="" placeholder="Enter Your Contact Number"></br>
      </div>
      <div class="input-box">
      <input type="text" name="address" id="address" value="" placeholder="Enter Your Address"></br>

      </div>
      <div class="input-box">
      <h3><b> *Class*</b></h3>
			<select id="class" name="class">
			<option value="">Select type</option>
			<option value="nursery">NURSERY</option>
			<option value="lkg">LKG</option></br>
			</select>      </div>
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" name="btn-signup" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="demo.php">Login now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>