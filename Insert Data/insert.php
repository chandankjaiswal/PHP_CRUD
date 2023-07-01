<?php

 
require('db.php');
include("auth.php");

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$trn_date = date("Y-m-d H:i:s");
$name =$_REQUEST['name'];
$age = $_REQUEST['age'];
$email = $_REQUEST['email'];
$mobile = $_REQUEST['mobile'];
$qualification = $_REQUEST['qualification'];
$institute = $_REQUEST['institute'];
$skill = $_REQUEST['skill'];
$experience = $_REQUEST['experience'];
$fileToUpload = $_REQUEST['fileToUpload'];

$submittedby = $_SESSION["username"];
$ins_query="insert into new_record (`trn_date`,`name`,`age`,`email`,`mobile`,`qualification`,`institute`,`skill`,`experience`,`fileToUpload`,`submittedby`) values ('$trn_date','$name','$age', '$email', '$mobile', '$qualification', '$institute', '$skill', '$experience', '$fileToUpload', '$submittedby')";
mysqli_query($con,$ins_query) or die(mysql_error());
$status = "New Record Inserted Successfully.</br></br><a href='view.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> | <a href="view.php">View Records</a> | <a href="logout.php">Logout</a></p>

<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="name" placeholder="Enter Name" required /></p>
<p><input type="text" name="age" placeholder="Enter Age" required /></p>
<p><input type="text" name="email" placeholder="Enter Email id" required /></p>
<p><input type="text" name="mobile" placeholder="Enter Phone Number" required /></p>
<p><input type="text" name="qualification" placeholder="Qualification" required /></p>
<p><input type="text" name="institute" placeholder="Institute Name" required /></p>
<p><input type="text" name="skill" placeholder="Skills" required /></p>
<p><input type="text" name="experience" placeholder="Experience" required /></p>
Select a File to upload:
<p><input type="file" name="fileToUpload" id="fileToUpload"></p>

<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>

<br /><br /><br /><br />
For More Details check my LinkedIn Profile: <a href="https://www.linkedin.com/in/chandan-kumar-b70b95126/">Chandan Kumar</a>
</div>
</div>
</body>
</html>
