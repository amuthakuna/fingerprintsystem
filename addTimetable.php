<?php 
//require_once '../inc/connection.php'; 
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Add Timetables</title>
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
				height: 320px;
			}

		</style>
	</head>
	<body>
		
		<div class="header">
			<center>
				<h1>Attendance Tracking With Alert System</h1>
			</center>
			<div style="float:right; margin-top:-4%;">
			<ul class="nav nav-pills">
		
					<li><h5><?php echo "Login as ".$_SESSION['user']; ?></h5></li>
					<li><a href="../home.php?='true'" class="btn btn-warning">Home</a> </li>
					<li><a href="../home.php?logout='true'" class="btn btn-warning">Logout</a> </li>

				</ul>
			</div>

		</div>


	<div id="login-form" class="panel panel-primary" align="center">
		<div class="panel-heading"> 
			<h3>Add Time Table</h3></div>
		<div class="panel-body">
			<form action="addTimetable.php" method="POST">
			<table>
				<tr>
				<th>User Name </th>
				<td>
					<select class="form-control" name="uname">
					</select>
				</td>
			</tr>
			<tr>
				<th>Day </th>
				<td><br><select class="form-control" name="date">
					<option>Monday</option>
					<option>Tuesday</option>
					<option>Wednesday</option>
					<option>Thursday</option>
					<option>Friday</option>
				</select></td>
			</tr>
			<tr>
				<th>Start Time </th>
				<td><input class="form-control" type="time" name="stime" required></td>
			</tr>
			<tr>
				<th>End Time </th>
				<td><input class="form-control" type="time" name="etime" required></td>
			</tr>
			<tr>
				<th>Subject Code </th>
				<td><br><select name="scode" class="form-control">
					<option>ICT3213</option>
					<option>ICT3222</option>
					<option>ICT3232</option>
					<option>ICT3242</option>
					<option>ICT3252</option>
					<option>ICT3262</option>
					<option>ICT3272</option>
				</select></td>
			</tr>

			<div id="b">
				<tr>
				
					<td></td>
					<td><br><button type="submit" class="btn btn-success" name="Create">Add Timetable</button></td>
				</tr>
			</div>
		</table>
		</form>

		</div>
		
	</div>
	<div class="footer">
			<center>
				<h4>Applied Science</h4>
				<h5>Vavuniya Campus of University of Jaffna</h5>
			</center>

		</div>

	</body>
</html>
