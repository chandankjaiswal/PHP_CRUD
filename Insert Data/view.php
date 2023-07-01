<?php

 
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />

</head>
<body>
<div class="form">
<p><a href="index.php">Home</a> | <a href="insert.php">Insert New Record</a> | <a href="view.php">View Record</a> | <a href="logout.php">Logout</a></p>
<h2>View Records</h2>

<input type="text" id="myInput" onkeyup="searchTable()" placeholder="Search here.." type='text'>
<br>
<table id='myTable' width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr><th><strong>S.No</strong></th><th><strong>Name</strong></th><th><strong>Age</strong></th><th><strong>Email id</strong></th><th><strong>Phone Number</strong></th><th><strong>Qualification</strong></th><th><strong>Institute Name</strong></th><th><strong>Skills</strong></th><th><strong>Experience</strong></th><th><strong>Resume</strong></th><th><strong>Edit</strong></th><th><strong>Delete</strong></th></tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from new_record ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td><td align="center"><?php echo $row["name"]; ?></td><td align="center"><?php echo $row["age"]; ?></td><td align="center"><?php echo $row["email"]; ?></td><td align="center"><?php echo $row["mobile"]; ?></td><td align="center"><?php echo $row["qualification"]; ?></td><td align="center"><?php echo $row["institute"]; ?></td><td align="center"><?php echo $row["skill"]; ?></td><td align="center"><?php echo $row["experience"]; ?></td><td align="center"><?php echo $row["fileToUpload"];  ?></td><td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td><td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>

<script>
function searchTable() {
    var input, filter, found, table, tr, td, i, j;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        for (j = 0; j < td.length; j++) {
            if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
                found = true;
            }
        }
        if (found) {
            tr[i].style.display = "";
            found = false;
        } else {
            tr[i].style.display = "none";
        }
    }
}
</script>
<br /><br /><br /><br />
For More Details check my LinkedIn Profile: <a href="https://www.linkedin.com/in/chandan-kumar-b70b95126/">Chandan Kumar</a>
</div>
</body>
</html>
