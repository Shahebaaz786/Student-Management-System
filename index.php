<html>
<head>
<title>
 Student Management System
</title>
</head>
<body bgcolor="yellow" >
	<h3 align="right" style="margin-right:20px;"><a href="login.php">Admin Login</a></h3>
	<h1 align="center">Welcome to Student Management System</h1>
	<form method="post" action="index.php">
	<table style="width:30%;" align="center" border="1">
	<tr>
	<th colspan="2" align="center">Student Information</th>
	</tr>
	<tr>
		<th align="left">Choose Standerd</th>
		<td>
			<select name="std" required>
			<option value="1">1st</option>
			<option value="2">2nd</option>
			<option value="3">3rd</option>
			<option value="4">4th</option>
			<option value="5">5th</option>
			<option value="6">6th</option>
			<option value="7">7th</option>
			<option value="8">8th</option>
			<option value="9">9th</option>
			<option value="10">10th</option>
			<option value="11">11th</option>
			<option value="12">12th</option>
			<option value="13">13th</option>
			<option value="14">14th</option>
			<option value="15">15th</option>
			<option value="16">16th</option>
			
			</select>
		</td>
		</tr>
		<tr>
		<th  align="left">Enter RollNo</th>
		<td><input type="number" name="rollno" required></td>
		</tr>
		<tr>
		<td colspan="2"  align="center"><input type="submit" name="submit" value="Show Details"></td>
		</tr>
		</table>
		</form>
</body>
</html>
<?php 
if(isset($_POST['submit']))
{
	$standerd=$_POST['std'];
	$rollno=$_POST['rollno'];
	include('dbcon.php');
	include('function.php');
	showdetails($standerd,$rollno);
}
?>