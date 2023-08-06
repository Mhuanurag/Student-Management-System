<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<style type="text/css">
		#btn{
			padding: 15px 50px;
			font-size: 25px;
			text-align: center;
			border-radius:20px;
			cursor: pointer;
			box-shadow: inset 400px 0 0 0 coral ;
		}
		#hero{
				background-image: linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.3)),url(student.jpg);
				font-size:35px;
				color: coral;
		}
	</style>
</head>
<body id="hero">
	<center><br>
		<h1>Student Management System</h1><br>
		<form action="" method="post">
			<input  type="submit" id ="btn" name="admin_login" value="Admin Login">&nbsp &nbsp
			<input type="submit" id ="btn" name="student_login" value="Student Login">
		</form>
		<?php
			if(isset($_POST['admin_login'])){
				header("Location: admin_login.php");
			}
			if(isset($_POST['student_login'])){
				header("Location: student_login.php");
			}
		?>
	</center>
</body>
</html>