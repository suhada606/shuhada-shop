 
<?php include('inc/users.php');  ?>
<?php  include('inc/css.php');?>
<?php include('header.php');  ?>
<?php error_reporting(0); ?>

<?php  
	//users object
	$user = new Users();

	//insert user
	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_user'])){
		$userRegister = $user->addUser($_POST);
	}

 ?>

<div class="container">
	<div class="row justify-content-center">
				<div class="col-md-6">
					<?php 

					if(isset($userRegister)){
						echo $userRegister;
					}

					 ?>
					<div class="maintable">
						<h2 class="text-center">Add Users</h2>
						   <form method="POST" enctype="multipart/form-data">

								  <div class="mb-3">
								    <label for="firstname" class="form-label">first name</label>
								    <input type="text" class="form-control" name="firstname" >
								   
						
								    
								  </div>

								  <div class="mb-3">
								    <label for="lastname" class="form-label">last name</label>
								    <input type="text" class="form-control" name="lastname" >
								  </div>

								  <div class="mb-3">
								    <label for="username" class="form-label">Username</label>
								    <input type="text" class="form-control" name="username" >
								  </div>

								  <div class="mb-3">
								    <label for="email" class="form-label">Email address</label>
								    <input type="email" class="form-control" name="email" >
								  </div>
								  <div class="mb-3">
								    <label for="password" class="form-label">Password</label>
								    <input type="password" class="form-control" name="password" >
								  </div>
								  <div class="mb-3">
								    <label for="cpassword" class="form-label">Confirm Password</label>
								    <input type="password" class="form-control" name="cpassword" >
								  </div>

								  <div class="mb-3">
								    <label for="mobile" class="form-label">mobile number</label>
								    <input type="text" class="form-control" name="mobile">
								  </div>
								

								  <button type="submit" name="add_user" class="btn btn-primary">Submit</button>
							</form>
					</div>
				</div>
			</div>
</div>