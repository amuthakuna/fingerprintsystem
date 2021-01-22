<?php 
	//require_once '../inc/connection.php';
	//include 'inc/functions.php';

session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Admin Add Students</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.min.css">
		<style type="text/css">

		.header
		{
			color:white;
			padding: 5px;
			font-size: 25px;
			height: 90px;
			background-color: #779;
		}
		.footer 
		{
			position: fixed;
			color:white;
			padding: 0px;
			font-size: 20px;
			height: 60px;
			background-color: #779;
			bottom: 0;
			width: 100%;
			margin-top: 10%;
		}

			#login-form
			{
				width: 40%;
				margin-left: 30%;
				margin-top: 5%;
			}
			.panel-heading{
				padding: 3px;
			}
			input, a{
				margin-top: 10px;

			}
			th{
				width: 20%;
				text-align: left;
			}
			.btn-clear{
				margin-left: 15px;
			}
			.form-control{
				width: 90%;
				float: right;
			}
			.btn{
				margin-left: 10%;
			}
			.panel-body{
				height: 260px;
			}

		</style>
	</head>
	<body>
		
		<div class="header">
			<center>
				<h1>Attendance Tracking with Alert System</h1>
			</center>
			<div style="float: right; margin-top: -4%;">
			<ul class="nav nav-pills">
		
					<li><h5><?php echo "Login as ".$_SESSION['user']; ?></h5></li>
					<li><a href="../home.php?='true'" class="btn btn-warning">Home</a> </li>
					<li><a href="../home.php?logout='true'" class="btn btn-warning">Logout</a> </li>

				</ul>
			</div>

		</div>

			
	<div id="login-form" class="panel panel-primary" align="center">
		<div class="panel-heading"> 
			<h3>Add Student</h3></div>
		<div class="panel-body">
			<form action="addstu.php" method="POST">
			<table>
				<tr>
				<th>Finger ID </th>
				<td><input class="form-control" type="text" name="fid" required></td>
			</tr>
			<tr>
				<th>Registration Number </th>
				<td><input class="form-control" type="text" name="reg" required></td>
			</tr>
			<tr>
				<th>Student Name </th>
				<td><input class="form-control" type="text" name="stname" required></td>
			</tr>
			<tr>
				
				<td></td>
				<td><br><button type="submit" class="btn btn-success" name="Create">Add Student</button></td>
			</tr>
		
		</table>
		</form>

		</div>
		
	</div>

			
	<br><br><br><br><br><br><br><br>
	<div class="footer">
			<center>
				<h4>Applied Science</h4>
				<h5>Vavuniya Campus of University of Jaffna</h5>
			</center>

		</div>

	</body>
</html>
