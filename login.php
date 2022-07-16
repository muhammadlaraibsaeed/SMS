<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Hello, world!</title>
  </head>
  <body>
<div class="container">
<section class="vh-100">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 text-black"> 
          <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
            <form style="width: 23rem;" id="user_form">
              <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>
              <div class="alert alert-danger alert-dismissible" id="error" style="display:none;">
               Invalid email or password
              </div>
              <div class="form-outline mb-4">
                <input type="email" id="form2Example18" name="email" class="form-control form-control-lg" />
                <label class="form-label" for="form2Example18">Email address</label>
              </div>
              <div class="form-outline mb-4">
              <input type="hidden" name="login" value="yes">
                <input type="password" id="form2Example28" class="form-control form-control-lg" name="password" />
                <label class="form-label" for="form2Example28">Password</label>
              </div>
              <div class="pt-1 mb-4">
                <button class="btn btn-info btn-lg btn-block" type="button" id="btn-add">Login</button>
              </div>
              <p>Don't have an account? <a href="#addEmployeeModal"  data-toggle="modal">Register here</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
</section> 
</div>
<!-- Sign Up Data Now -->
<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="sign_up">
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
							<input type="email" id="email" name="email" class="form-control" placeholder="john@gmail.com" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" id="password" name="password" class="form-control" required>
						</div>
						
						<div class="form-group">
							<label>PHONE</label>
							<input type="text" id="phone" name="phone" class="form-control" placeholder="Much Be Paksitani Number" required>
						</div>
						<div class="form-group">
							<label>CITY</label>
							<input type="text" id="city" name="city" class="form-control" required>
						</div>	
						<label >Select Your Gender</label>
						<div class="form-group">
						  	<input type="radio" id="MALE" name="gender" value="MALE">
							  <label for="html">M</label><br>
							  <input type="radio" id="FEMALE" name="gender" value="FEMALE">
							  <label for="css">F</label><br>
						</div>
						<div class="form-group">
							<label>Choose Your Status </label>
							<select class="form-control" name="type" >
								<option value="admin">Admin</option>
								<option value="teacher">Teacher</option>
								<option value="student">Student</option>
								<option value="parent">Parent</option>
							</select>				
						</div>
					</div>
					<div class="modal-footer">
                        <input type="hidden" id="signup" name="signup" value="yes" class="form-control" required>
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-success" data-form-id="#sign_up" id="btn-sign">Sign Up</button>
					</div>
				</form>
			</div>
		</div>
	</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="ajax/ajax.js"></script>
  </body>
</html>