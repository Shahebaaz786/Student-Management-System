 <?php
 session_start();
  if(isset($_SESSION['uid']))
  {
	  echo "";
	 
  }
  else
  {
	  header('location: ..login.php');
  }
 
 ?>
 <?php
 include('header.php');

 ?>
 <div class="admintitle" align="center" >
 <h4><a href="logout.php"  style="float:right; margin-right:30px; color:#fff; font-size:20px;">Logout</a></h4>
 <h1  style="font-size:45px;">Welcome to Admin DashBoard  </h1>
 
 </div>
 <div class="dashboard">
<table   style="width:50%;   font-size:30px;"  align="center"> 
<tr>
<td>1.</td><td><a href="addstudent.php">Insert Student Details</a></td>
</tr>
<tr>
<td>2.</td><td><a href="updatestudent.php">Update Student Details</a></td>
</tr>
<tr>
<td>3.</td><td><a href="deletestudent.php">Delete Student Details</a></td>
</tr>
</table>
 </div>
 </body>
</html>