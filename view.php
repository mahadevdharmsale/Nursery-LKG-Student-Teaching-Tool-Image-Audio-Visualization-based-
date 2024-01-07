<?php
include("config.php");

$get=$_GET['view'];

if(isset($_POST['submit']))
{
	$repdf=$_POST['n_pdf'];
	
}

$qry=mysqli_query($con,"SELECT n_pdf FROM notice WHERE n_id='$get' ");
while($row=mysqli_fetch_array($qry))
{
	?>
	<form action="" method="POST">
<iframe src="upload/<?php echo $row['n_pdf'];?>" height="150" width="50%"></iframe>
</form>
<?php


}

?>
<html>
<body>
<button><a href="home.php">Back</a></button>
</body>
</html>