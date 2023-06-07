
<?php  
include('db.php');
class Users extends dbcontroller {
	private $dbcon;
	public $erro;

	public function __construct(){
		$this->dbcon = $this->database_connection();
		$this->$erro = $this->$msg;
	}

	//add user
	public function addUser($data){

		//data from contact form
		$firstname = ucwords($data['firstname']);
		$lastname = ucwords($data['lastname']);
		$username = $data['username'];
		$email = $data['email'];


		


		$password = md5($data['password']);
		$cpassword = $data['cpassword'];
		$mobile = $data['mobile'];

		if($firstname == "" || $lastname == "" || $username == "" || $email == "" || $password == "" || $mobile == ""){
			$msg = "<div class='alert alert-danger'><strong>Error!</strong> Field must not be empty</div>";
			return $msg;
		}
		if(strlen($username) <3){
			$msg = "<div class='alert alert-danger'><strong>Error!</strong> Username is too short!</div>";
			return $msg;
		}

		elseif(!preg_match ("/^[a-zA-Z0-9_]*$/", $name) ){
			$msg = "<div class='alert alert-danger'><strong>Error!</strong> Username must only contain alpha, numerical & underscores!</div>";
			return $msg;
		}

		if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
			$msg = "<div class='alert alert-danger'><strong>Error!</strong> Invalid email address</div>";
			return $msg;
		}

		if(strlen($password) <5 || strlen($cpassword) <5){
			$msg = "<span class='alert alert-danger'><strong>Error!</strong> password is too short! minumim 6 charecter!</span>";
			return $msg;
		}

		if(strlen($password) !== strlen($cpassword) ){
			$msg = "<div class='alert alert-danger'><strong>Error!</strong> Password & Confirm password doesn't match</div>";
			return $msg;
		}

		if($chk_email == true ){
			$msg = "<div class='alert alert-danger'><strong>Error!</strong> Email already exist!</div>";
			return $msg;
		}

		//sql query insert
		$sql = "INSERT INTO `users`(`id`, `first_name`, `last_name`, `username`, `email`, `password`,  `mobile`) VALUES (NULL,'$firstname','$lastname','$username','$email','$password','$mobile')";

		$result = mysqli_query($this->dbcon,$sql);

		if($result){
            echo"Data Inserted successfully";
        }else{
            echo"Data not Inserted";
        }



	}

	// public function emailCheck($email){
	// 	$sqll = "SELECT `email` FROM `users` WHERE `email` = $email";
	// 	$res = mysqli_query($this->dbcon, $sqll);

	// 	if($res->mysqli_num_rows() > 0){
	// 		return true;
	// 	}
	// }



	//show user
	public function showUser(){

	}

	//delete user
	public function deleteUser(){

	}

	//edit user
	public function edituser(){

	}	
	//update user
	public function updateUser(){

	}
}




 ?>