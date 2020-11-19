<!DOCTYPE html>
<html>
<head>
  <title>Patient Data</title>
  <style>
    table {
		border: "2";
		line-height: 25px;
		width: 100%;
		color: #d96459;
		font-family: monospace;
		font-size: 18px;
		text-align: center;
	}
	th {
		background-color: #d96459;
		color: white;
	}
	tr:nth-child(even) {
		background-color: #f2f2f2;
	}
  </style>
</head>
<body>
<h1 align="center">PATIENT DETAILS</h1>
<table>
  <tr>
    <th>Id</th>
	<th>Patient Name</th>
	<th>Gender</th>
	<th>Address</th>
    <th>Email</th>
    <th>Phone Number</th>
	<th>Date Of Birth</th>
	<th>Blood Group</th>
	<th>Emergency Contact Name</th>
    <th>Relationship</th>
    <th>Emergency Phone Number</th>
	<th>Reason For Registration</th>
	<th>Additional Information</th>
	<th>Doctor Name</th>
    <th>Taking Any Medications Currently</th>
    <th>If Yes Please List It Here</th>
    
  </tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "doctorpanel");
if ($conn-> connect_error) {
	die("Connection failed:". $conn-> connect_error);
}

$sql = "SELECT id, pname, gender, address, email, pnumber, dob, bgrp, ename, relationship, enumber, reason, addinfo, dname, yesno, info from addpatient";
$result = $conn-> query($sql);

if	($result-> num_rows >0) {
 while ($row = $result-> fetch_assoc()) {
    echo "<tr><td>". $row["id"] ."</td><td>". $row["pname"] ."</td><td>". $row["gender"] ."</td><td>". $row["address"] ."</td><td>". $row["email"] ."</td><td>". $row["pnumber"] ."</td><td>". $row["dob"] ."</td><td>". $row["bgrp"] ."</td><td>". $row["ename"] ."</td><td>". $row["relationship"] ."</td><td>". $row["enumber"] ."</td><td>". $row["reason"] ."</td><td>". $row["addinfo"] ."</td><td>". $row["dname"] ."</td><td>". $row["yesno"] ."</td><td>". $row["info"] ."</td></tr>"; 
 }
 echo "</table>";
}
else {
	echo "0 result";
}

$conn-> close();	
?>
</table>
</body>
</html> 