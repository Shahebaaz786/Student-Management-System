<?php
session_start();
if(isset($_SESSION['uid'])) 
{
header('location:admin/admindash.php');
}
?>
<html>
<head>
<title>
Admin Login
</title>
</head>
<body  >
<img src = "haphiz.jpg">
	<h1 align="center" style="margin-top:200px">Admin Login</h1>
	<form action="login.php" method="post">
	<table style="width:30%; " align="center" border="1">
	<tr>
	<td>UserName</td>
	<td><input type="text" name="uname" required></td>
	</tr>
	<tr>
	<td>PassWord</td>
	<td><input type="password" name="pass" required></td>
	</tr>
	<tr>
	<td colspan="2" align="center"><input type="submit" name="login" value="Login"></td>
	</tr>
	</table>
	</form>
</body>
</html>
<?php

	include('dbcon.php');
	if(isset($_POST['login']))
	{
		$username = $_POST['uname'];
		$password = $_POST['pass'];
		
		
		$qry="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
		$run=mysqli_query($con,$qry);
		$row = mysqli_num_rows($run);
		if($row <1)
		{
			?>
			<script>
			alert('UserName or PassWord not Match !!');
			window.open('login.php','_self');
			</script>
			<?php
		}
		else
		{
			$data=mysqli_fetch_assoc($run);
			$id=$data['id'];
			echo "id =".$id;
		
			$_SESSION['uid']=$id;
			header('location:admin/admindash.php');
			}
	}
?>