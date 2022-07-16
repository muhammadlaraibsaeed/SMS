
<?php include 'includes/header.php';?>

<body>
<?php include 'includes/sidebar.php';?>
    <!-- /# sidebar -->
<?php include 'includes/topheader.php';?>

    <div class="content-wrap">
	
		<?php 
		if(empty($_SESSION["type"])){
			header("Location:login.php");
		}
		?>
			<div class="table-wrapper">
			<?php if($_SESSION['type']==='admin'||$_SESSION['type']==='teacher'){ ?>
							<div class="col-sm-6">
								<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons"></i> <span>Add New User</span></a>
							</div>
							<?php } ?>
				
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>SL NO</th>
							<th>NAME</th>
							<th>EMAIL</th>
							<th>PHONE</th>
							<th>CITY</th>
							<th>TYPE</th>
							<th>VIEW</th>
						<?php	if($_SESSION['type'] === "admin"||$_SESSION['type'] === "teacher"){
							echo "<th>ACTION</th>";
						}
						?>
						</tr>
					</thead>
					<tbody>
						<?php
						if($_SESSION['type']==="student"){
							$email = $_SESSION['email'];
							$result = mysqli_query($conn,"SELECT * FROM crud WHERE type = 'student' AND email ='$email'");
						}else{
							$result = mysqli_query($conn,"SELECT * FROM crud WHERE type = 'student'");
						}
							$i=1;
							while($row = mysqli_fetch_array($result)) {
						?>
						<tr id="<?php echo $row["id"]; ?>">
							<td><?php echo $i; ?></td>
							<td><?php echo $row["name"]; ?></td>
							<td><?php echo $row["email"]; ?></td>
							<td><?php echo $row["phone"]; ?></td>
							<td><?php echo $row["city"]; ?></td>
							<td><?php echo $row["type"]; ?></td>
							<td><a class="text-primary" href="app-profile.php?name=<?php echo $row["name"]; ?>&email=<?php echo $row["email"]; ?>&phone=<?php echo $row["phone"]; ?>&city=<?php echo $row["city"]; ?>&type=<?php echo $row['type']; ?>&gender=<?php echo $row['gender']; ?>"><span class="material-symbols-outlined">visibility</span></a></td>
							<?php 
						if($_SESSION['type'] === "admin"||$_SESSION['type'] === "teacher"){
						?>   
							<td>
								<a href="#editEmployeeModal" class="edit text-success" data-toggle="modal">
									<i class="material-icons update" data-toggle="tooltip" 
									data-id="<?php echo $row["id"]; ?>"
									data-name="<?php echo $row["name"]; ?>"
									data-email="<?php echo $row["email"]; ?>"
									data-phone="<?php echo $row["phone"]; ?>"
									data-city="<?php echo $row["city"]; ?>"
									title="Edit"></i>
								</a>
								<a href="#deleteEmployeeModal" class="delete text-danger" data-id="<?php echo $row["id"]; ?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" 
									title="Delete"></i></a>
						
							</td>
						<?php }
						?>
						</tr>
						<?php
						$i++;
						}
						?>
					</tbody>
				</table>
				
			</div>	
		<!-- Add Modal HTML -->
		<div id="addEmployeeModal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<form id="user_form">
						<div class="modal-header">						
							<h4 class="modal-title">Add User</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						</div>
						<div class="modal-body">					
							<div class="form-group">
								<label>NAME</label>
								<input type="text" id="name" name="name" class="form-control" required>
							</div>
							<div class="form-group">
								<label>EMAIL</label>
								<input type="email" id="email" name="email" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" id="password" name="password" class="form-control" required>
							</div>
							
							<div class="form-group">
								<label>PHONE</label>
								<input type="phone" id="phone" name="phone" class="form-control" required>
							</div>
							<div class="form-group">
								<label>CITY</label>
								<input type="city" id="city" name="city" class="form-control" required>
							</div>	
							<div class="form-group">
								<label>Choose Your Status </label>
								<select class="form-select" name="type" >
									<option value="admin">Admin</option>
									<option value="teacher">Teacher</option>
									<option value="student">Student</option>
									<option value="parent">Parent</option>
								</select>				
							</div>
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
							<button type="button" class="btn btn-success" id="btn-add">Add</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Edit Modal HTML -->
		<div id="editEmployeeModal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<form id="update_form">
						<div class="modal-header">						
							<h4 class="modal-title">Edit User</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						</div>
						<div class="modal-body">
							<input type="hidden" id="id_u" name="id" class="form-control" required>					
							<div class="form-group">
								<label>Name</label>
								<input type="text" id="name_u" name="name" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" id="email_u" name="email" class="form-control" required>
							</div>
							<div class="form-group">
								<label>PHONE</label>
								<input type="phone" id="phone_u" name="phone" class="form-control" required>
							</div>
							<div class="form-group">
								<label>City</label>
								<input type="city" id="city_u" name="city" class="form-control" required>
							</div>					
						</div>
						<div class="modal-footer">
						<input type="hidden" value="2" name="type">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
							<button type="button" class="btn btn-info" id="update">Update</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Delete Modal HTML -->
		<div id="deleteEmployeeModal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<form>
						<div class="modal-header">						
							<h4 class="modal-title">Delete User</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						</div>
						<div class="modal-body">
							<input type="hidden" id="id_d" name="id" class="form-control">					
							<p>Are you sure you want to delete these Records?</p>
							<p class="text-warning"><small>This action cannot be undone.</small></p>
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
							<button type="button" class="btn btn-danger" id="delete">Delete</button>
						</div>
					</form>
				</div>
			</div>
		</div>
    </div>
    
    <?php include 'includes/footer.php';?>
</body>

</html>

 