<!DOCTYPE html>
<html>
<head>
	<title>STUDENT DASHBOARD</title>
  	<style type="text/css">
  		#ss{
  			cursor: pointer;
  			height: 29px;
            width: 50%;
            border-radius:10px;
            text-align: center;
            border: none;

  		}
  		#h{
  			cursor: pointer;
  			height: 29px;
            width: 50%;
            border-radius:10px;
            text-align: center;
            border: none;
  			 visibility: hidden;
  		}

  		#space{
  			cursor: pointer;
  			padding: 10px 30px;
            border: none;
            border-radius:40px;
            font-size: 19px;
            text-align: center;
  		}
  		#btn{

			padding: 10px 20px;
			font-size: 16px;
			text-align: center;
			border-radius:40px;
			border: none;
			cursor: pointer;
			font-family: sans-serif;
            box-shadow: inset 400px 0 0 0 #D80286;

		}

		#body{
			background-color: #41b3a3;
		}
		
		#log{
			font-style: italic;
			color: blue;
			
		}
  		#header{
  			height: 12%;
  			width: 100%;
  			background-color: #5cdb95;
  			position: fixed;
  			color: red;
  			font-weight: bolder;
  			font-size: larger;
  		}
  		#left_side{
  			height: 75%;
  			width: 15%;
  			top: 10%;
  			position: fixed;
  		}
  		#right_side{
  			height: 75%;
  			width: 80%;
  			background-color: #6fb3b8;
  			position: fixed;
  			left: 17%;
  			top: 21%;
  			color: red;
  			border: solid 1px black;
  		}
  		#top_span{
  			top: 15%;
  			width: 80%;
  			left: 17%;
  			position: fixed;
			font-size: 15px;
			font-style: bold;
  		}

  		#td{
  			border: solid 1px black;
  			padding-left: 2px;
  			text-align: center;
  			width: 200px;
  		}

  	</style>
  	<?<?php 
  	session_start();
  	$connection = 
  	        mysqli_connect("localhost","root","");
			$db = mysqli_select_db($connection,"sms");		
  	 ?>
</head>
<body id="body">
	
	<div id ="header">
		<center>Student Management System <br><br>Email: <?php echo $_SESSION['email']; ?> &nbsp;&nbsp;Name:<?php echo $_SESSION['name']; ?>&nbsp;&nbsp; <a href="logout.php">&nbsp;&nbsp;Logout</a></center>
	</div>
	<span id ="top_span"><marquee>Note: Student Dashboard </marquee></span>
	<div id ="left_side"><br><br>
		<form action =" " method ="post">
			<table>
				<tr>
					<td>
						<input type="submit" id="btn" name="show_detail" value="Show Details">
					</td>
				</tr>

				<tr>
					<td>
						<input type="submit" id="btn" name="edit_detail" value="Edit details">
					</td>
				</tr>

			</table>
		</form>

	</div>
	<div id ="right_side"><br><br>
		<div id = "demo">
			<?php
			if(isset($_POST['show_detail']))
			{
				$query = "select * from students where email = '$_SESSION[email]'";
				$query_run = mysqli_query($connection,$query);
				while($row = mysqli_fetch_assoc($query_run))
				{
					?>
					<table>
				<tr>
					<td>
						<b>Roll No:</b>
					</td>
					<td>
						<input type="text" id="ss" value="<?php echo $row['roll_no'] ?>" disabled>
					</td>
				</tr>

				<tr>
					<td>
						<b>Name</b>
					</td>
					<td>
						<input type="text" id="ss" value="<?php echo $row['name'] ?>" disabled>
					</td>
				</tr>

                <tr>
					<td>
						<b>Father name</b>
					</td>
					<td>
						<input type="text" id="ss" value="<?php echo $row['father_name'] ?>" disabled>
					</td>
				</tr>

                <tr>
					<td>
						<b>class</b>
					</td>
					<td>
						<input type="text" id="ss" value="<?php echo $row['class'] ?>" disabled>
					</td>
				</tr>

				<tr>
					<td>
						<b>Mobile No:</b>
					</td>
					<td>
						<input type="text" id="ss" value="<?php echo $row['mobile'] ?>" disabled>
					</td>
				</tr>

                <tr>
					<td>
						<b>Email</b>
					</td>
					<td>
						<input type="text" id="ss" value="<?php echo $row['email'] ?>" disabled>
					</td>
				</tr>

				<tr>
					<td>
						<b>Password</b>
					</td>
					<td>
						<input type="text" id="ss" value="<?php echo $row['password'] ?>" disabled>
					</td>
				</tr>

				<tr>
					<td>
						<b>Remark</b>
					</td>
					<td>
						<textarea rows="3" cols="40" id="ss" disabled><?php echo$row['remark'] ?></textarea>
					</td>
				</tr>




			</table>
			<?php
				}
			}
			?>


			<?php
			if(isset($_POST['edit_detail'])){
				$query = "select * from students where email = '$_SESSION[email]'";
				$query_run = mysqli_query($connection,$query);
				while($row = mysqli_fetch_assoc($query_run))
				{
			?>
		    <form action="edit_student.php" method="post"> 
		    <table>
				<tr>
					<td>
						<!-- <b>Roll No:</b> -->
					</td>
					<td>
						<input type="text" id="h" name="roll_no" value="<?php echo $row['roll_no'] ?>" >
					</td>
				</tr>

				<tr>
					<td>
						<b>Name</b>
					</td>
					<td>
						<input type="text" id="ss" name="name" value="<?php echo $row['name'] ?>" >
					</td>
				</tr>

                <tr>
					<td>
						<b>Father name</b>
					</td>
					<td>
						<input type="text" id="ss" name="father_name" value="<?php echo $row['father_name'] ?>" >
					</td>
				</tr>

                <tr>
					<td>
						<b>class</b>
					</td>
					<td>
						<input type="text" id="ss" name="class" value="<?php echo $row['class'] ?>" >
					</td>
				</tr>

				<tr>
					<td>
						<b>Mobile No:</b>
					</td>
					<td>
						<input type="text" id="ss" name="mobile" value="<?php echo $row['mobile'] ?>" >
					</td>
				</tr>

                <tr>
					<td>
						<b>Email</b>
					</td>
					<td>
						<input type="text" id="ss" name="email" value="<?php echo $row['email'] ?>" >
					</td>
				</tr>

				<tr>
					<td>
						<b>Password:</b>
					</td>
					<td>
						<input type="text" id="ss"  name="password" value="<?php echo $row['password'] ?>" >
					</td>
				</tr>

				<tr>
					<td>
						<b>Remark</b>
					</td>
					<td>
						<textarea rows="3" cols="40" name="remark" id="ss"><?php echo$row['remark'] ?></textarea>
					</td>
				</tr>

				<tr>
					<td></td>
					<td><input type="submit" id="btn" name = "Save" value="Save"></td>
				</tr>

			</table>
			</form>
			<?php
		}
			} 

			 ?>
		</div>
	</div>
</body>
</html>