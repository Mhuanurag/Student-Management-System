
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN DASHBOARD</title>
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
  	<?php 
  	session_start();
  	$connection = 
  	        mysqli_connect("localhost","root","");
			$db = mysqli_select_db($connection,"sms");		
  	 ?>
</head>
<body id="body">
	
	<div id ="header">
		<center>Student Management System <br><br>
			Email: <?php echo $_SESSION['email']; ?> &nbsp;&nbsp;
			Name:<?php echo $_SESSION['name'];
			 ?> <a href="logout.php" id="log">&nbsp;&nbsp;
			Logout</a></center>
	</div>
	<span id ="top_span"><marquee>Note: Admin Dashboard </marquee></span>
	<div id ="left_side"><br><br>
		<form action =" " method ="post">
			<table>
				<tr>
					<td>
						<input type="submit" id ="btn" name="Search_Student" value="Search Student">
					</td>
				</tr> 

				<tr>
					<td>
						<input type="submit" id ="btn" name="edit_Student" value="Edit Student">
					</td>
				</tr>

				<tr>
					<td>
						<input type="submit" id ="btn" name="add_Student" value="Add New Student">
					</td>
				</tr>

				<tr>
					<td>
						<input type="submit" id ="btn" name="delete_Student" value="Delete Student">
					</td>
				</tr>

				<tr>
					<td>
						<input type="submit" id ="btn" name="show_teachers" value="Show Teachers">
					</td>
				</tr>

			</table>
		</form>

	</div>
	<div id ="right_side"><br><br>
		<div id = "demo">
			<?php 
			if(isset($_POST['Search_Student']))
			{
				?>
				<center>
					<form action=" " method="post">
						<input type="text" placeholder="Enter Roll No" id="space" name="roll_no">
						<input type="submit" id ="btn" name="search_by_roll_no_for_search" value="Search">
					</form>
				</center>
				<?php
			}
			if(isset($_POST['search_by_roll_no_for_search']))
			{
				$query = "select * from students where roll_no = '$_POST[roll_no]'";
				$query_run = mysqli_query($connection,$query);
				while($row = mysqli_fetch_assoc($query_run))
				{
					?>
					<table>
						<tr>
							<td>
								<b>Roll No: &nbsp</b>
							</td>
							<td>
								<input type="text" id="ss" value="<?php echo $row['roll_no'];?>" disabled>
							</td>
						</tr>

							<tr>
							<td>
								<b>Name: &nbsp</b>
							</td>
							<td>
								<input type="text" id="ss" value="<?php echo $row['name'];?>" disabled>
							</td>
						</tr>

							<tr>
							<td>
								<b>Father Name: &nbsp</b>
							</td>
							<td>
								<input type="text" id="ss" value="<?php echo $row['father_name'];?>" disabled>
							</td>
						</tr>

							<tr>
							<td>
								<b>Class: &nbsp</b>
							</td>
							<td>
								<input type="text" id="ss" value="<?php echo $row['class'];?>" disabled>
							</td>
						</tr>

							<tr>
							<td>
								<b>Mobile No.: &nbsp</b>
							</td>
							<td>
								<input type="text" id="ss" value="<?php echo $row['mobile'];?>" disabled>
							</td>
						</tr>

						<tr>
							<td>
								<b>Email: &nbsp</b>
							</td>
							<td>
								<input type="text" id="ss" value="<?php echo $row['email'];?>" disabled>
							</td>
						</tr>

							<tr>
							<td>
								<b>Password: &nbsp</b>
							</td>
							<td>
								<input type="text" id="ss" value="<?php echo $row['password'];?>" disabled>
							</td>
						</tr>
						
							<tr>
							<td>
								<b>Remark: &nbsp</b>
							</td>
							<td>
								<textarea rows="3" cols="40" id="ss"disabled>
									<?php echo $row['remark'];?>
								</textarea>
							</td>
						</tr>
						
					</table>
					<?php
			    }
			}
			?>


			<?php 
			if(isset($_POST['edit_Student']))
			{
				?>
				<center>
					<form action=" " method="post">
						<input type="text" placeholder="Enter Roll No." id="space" name="roll_no">
						<input type="submit" id = "btn" name="search_by_roll_no_for_edit" value="Search">
					</form>
				</center>
				<?php
			}
			if(isset($_POST['search_by_roll_no_for_edit']))
			{
				$query = "select * from students where roll_no = '$_POST[roll_no]'";
				$query_run = mysqli_query($connection,$query);
				while($row = mysqli_fetch_assoc($query_run))
				{
					?>
					<form action="admin_edit_student.php" method="post">
						<table>
						<tr>
							<td>
								<!-- <b>Roll No: &nbsp</b> -->
							</td>
							<td>
								<input type="text" name="roll_no" value="<?php echo $row['roll_no'];?>" id="h" >
							</td>
						</tr>

							<tr>
							<td>
								<b>Name: &nbsp</b>
							</td>
							<td>
								<input type="text" name="name" value="<?php echo $row['name'];?>" id="ss">
							</td>
						</tr>

							<tr>
							<td>
								<b>Father Name: &nbsp</b>
							</td>
							<td>
								<input type="text" name="father_name" value="<?php echo $row['father_name'];?>" id="ss">
							</td>
						</tr>

							<tr>
							<td>
								<b>Class: &nbsp</b>
							</td>
							<td>
								<input type="text" name="class" value="<?php echo $row['class'];?>" id="ss">
							</td>
						</tr>

							<tr>
							<td>
								<b>Mobile No.: &nbsp</b>
							</td>
							<td>
								<input type="text" name="mobile" value="<?php echo $row['mobile'];?>" id="ss">
							</td>
						</tr>

						<tr>
							<td>
								<b>Email: &nbsp</b>
							</td>
							<td>
								<input type="text" name="email" value="<?php echo $row['email'];?>" id="ss">
							</td>
						</tr>

							<tr>
							<td>
								<b>Password: &nbsp</b>
							</td>
							<td>
								<input type="text" name="password" value="<?php echo $row['password'];?>" id="ss">
							</td>
						</tr>
						
							<tr>
							<td>
								<b>Remark: &nbsp</b>
							</td>
							<td>
								<textarea rows="3" cols="40" name="remark" id="ss">
									<?php echo $row['remark'];?>
								</textarea>
							</td>
						</tr><br>
						<tr>
							<td></td>
							<td><input type="submit" name ="edit" value="Save" id="btn"></td>
						</tr>
						
					</table>
					</form>
					<?php
			    }
			}
			?>

			<?php 
			if(isset($_POST['add_Student']))
			{
				?>
				<center><h4>Fill The Given Details</h4></center>
					<form action="add_Student.php" method="post">
						<table>
						<tr>
							<td>
								<b>Roll No: &nbsp</b>
							</td>
							<td>
								<input type="text" name="roll_no" id="ss" required >
							</td>
						</tr>

							<tr>
							<td>
								<b>Name: &nbsp</b>
							</td>
							<td>
								<input type="text" name="name" id="ss" required >
							</td>
						</tr>

							<tr>
							<td>
								<b>Father Name: &nbsp</b>
							</td>
							<td>
								<input type="text" name="father_name" id="ss" required >
							</td>
						</tr>

							<tr>
							<td>
								<b>Class: &nbsp</b>
							</td>
							<td>
								<input type="text" name="class" id="ss" required >
							</td>
						</tr>

							<tr>
							<td>
								<b>Mobile No.: &nbsp</b>
							</td>
							<td>
								<input type="text" name="mobile" id="ss" required>
							</td>
						</tr>

						<tr>
							<td>
								<b>Email: &nbsp</b>
							</td>
							<td>
								<input type="text" name="email" id="ss" required>
							</td>
						</tr>

							<tr>
							<td>
								<b>Password: &nbsp</b>
							</td>
							<td>
								<input type="text" name="password" id="ss" required>
							</td>
						</tr>
						
							<tr>
							<td>
								<b>Remark: &nbsp</b>
							</td>
							<td>
								<textarea rows="3" cols="40" name="remark" id="ss"></textarea>
							</td>
						</tr><br>
						<tr>
							<td></td>
							<td><input type="submit" id="btn" name ="add" value="Add Student"></td>
						</tr>
					
					</table>
					</form>
				
				<?php
			}
			?>

			<?php
			if(isset($_POST['delete_Student']))
			{
				?>
				<center><h4>Enter Roll No To Delete Student</h4><br>
					<form action="delete_Student.php" method="post">
						<input type="text" placeholder="Roll No" id="space" name="roll_no">
						<input type="submit" id="btn" name="search_by_roll_no_for_delete" value="Delete Student">
						
					</form>
				</center>
				
				<?php
			}
			     ?>

			      <?php
			      if(isset($_POST['show_teachers'])) 
			      {
			      	?>
			      	<center>
			      		<h5>Teachers Details</h5>
			      		<table>
			      			<tr>
			      				<td id= "td"><b>ID</b></td>
			      				<td id= "td"><b>Name</b></td>
			      				<td id= "td"><b>Mobile</b></td>
			      				<td id= "td"><b>Courses</b></td>
			      				<td id= "td"><b>View Details</b></td>
			      			</tr>
			      		</table>
			      	</center>

			      	<?php
                     $connection = mysqli_connect("localhost","root","");
				     $db = mysqli_select_db($connection,"sms");
				     $query = "select * from teachers";
				     $query_run = mysqli_query($connection,$query);
				     while($row = mysqli_fetch_assoc($query_run)){
				     	?>
				     	<center>
				     		<table>
				     			<tr>
				     				<td id="td"><?php echo $row['t_id']; ?></td>
				     				<td id="td"><?php echo $row['name']; ?></td>
				     				<td id="td"><?php echo $row['mobile']; ?></td>
				     				<td id="td"><?php echo $row['courses']; ?></td>
				     				<td id="td"><a href ="#">View Details</a></td>
				     			</tr>
				     		</table>
				     	</center>
				     	 <?php
				     }
			      }
			      ?>

		</div>
	</div>
</body>
</html>
