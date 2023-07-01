<?php

 
require('db.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from new_record where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> | <a href="insert.php">Insert New Record</a> | <a href="logout.php">Logout</a></p>
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$trn_date = date("Y-m-d H:i:s");
$name =$_REQUEST['name'];
$age =$_REQUEST['age'];
$email = $_REQUEST['email'];
$mobile = $_REQUEST['mobile'];
$qualification = $_REQUEST['qualification'];
$institute = $_REQUEST['institute'];
$skill = $_REQUEST['skill'];
$experience = $_REQUEST['experience'];
$fileToUpload = $_REQUEST['fileToUpload'];
$submittedby = $_SESSION["username"];

$update="update new_record set trn_date='".$trn_date."', name='".$name."', age='".$age."', email='".$email."', mobile='".$mobile."', qualification='".$qualification."', institute='".$institute."', skill='".$skill."', experience='".$experience."', fileToUpload='".$fileToUpload."', submittedby='".$submittedby."' where id='".$id."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br><a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="name" placeholder="Enter Name" required value="<?php echo $row['name'];?>" /></p>
<p><input type="text" name="age" placeholder="Enter Age" required value="<?php echo $row['age'];?>" /></p>
<p><input type="text" name="email" placeholder="Enter Email id" required value="<?php echo $row['email'];?>" /></p>
<p><input type="text" name="mobile" placeholder="Enter Phone Number" required value="<?php echo $row['mobile'];?>"/></p>
<p><input type="text" name="qualification" placeholder="Qualification" required value="<?php echo $row['qualification'];?>" /></p>
<p><input type="text" name="institute" placeholder="Institute Name" required value="<?php echo $row['institute'];?>" /></p>
<p><input type="text" name="skill" placeholder="Skills" required value="<?php echo $row['skill'];?>" /></p>
<p><input type="text" name="experience" placeholder="Experience" required value="<?php echo $row['experience'];?>"/></p>
Select a File to upload:
<p><input type="file" name="fileToUpload" id="fileToUpload" required value="<?php echo $row['fileToUpload'];?>"/></p>

<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>

<br /><br /><br /><br />
For More Details check my LinkedIn Profile: <a href="https://www.linkedin.com/in/chandan-kumar-b70b95126/">Chandan Kumar</a>
</div>
</div>
</body>
</html>
