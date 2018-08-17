<?php 
	session_start();

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'id2087542_search_db');

	// variable declaration
	$username = "";
	$email    = "";
	$errors   = array(); 

	// call the register() function if register_btn is clicked
	if (isset($_POST['register_btn'])) {
		register();
	}
	// call the addmember() function if add_member is clicked
	if (isset($_POST['add_member'])) {
		addmember();
	}
	// call the login() function if register_btn is clicked
	if (isset($_POST['login_btn'])) {
		if (isset($_SESSION['user'])) {
			array_push($errors, "Logout first"); 
		}else{
				login();
		}
	
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['user']);
		header("location:login.php");
	}

	
	// REGISTER USER
	function register(){
		global $db, $errors;

		// receive all input values from the form
		$name    =  e($_POST['name']);
		$username    =  e($_POST['username']);
		$email       =  e($_POST['email']);
		$password_1  =  e($_POST['password_1']);
		$password_2  =  e($_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($name)) { 
			array_push($errors, "Name is required"); 
			}
		if (empty($username)) { 
			array_push($errors, "Username is required"); 
		}
		if (empty($email)) { 
			array_push($errors, "Email is required"); 
		}
		if (empty($password_1)) { 
			array_push($errors, "Password is required"); 
		}
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database

			if (isset($_POST['user_type'])) {
				$user_type = e($_POST['user_type']);
				$query = "INSERT INTO users (name,username, email, user_type, password) 
						  VALUES('$name','$username', '$email', '$user_type', '$password')";
				mysqli_query($db, $query);
				$_SESSION['success']  = "New user successfully created!!";
				header('location: login.php');
			}else{
				$query = "INSERT INTO users (name,username, email, user_type, password) 
						  VALUES('$name','$username', '$email', 'user', '$password')";
				mysqli_query($db, $query);

				// get id of the created user
				$logged_in_user_id = mysqli_insert_id($db);
                $_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session	
				session_destroy();  // destroying logged in user's session	
				unset($_SESSION['userSession']);  // unsetting user in session
?>
<script>
window.alert("Account created successfully, please Login to access it");
</script>	
<?php			
				header("Location: login.php");
				
			}

		}

	}

	
	// addmember
	function addmember(){
		global $db, $errors;

		// receive all input values from the form
		$name    =  e($_POST['name']);
		$username    =  e($_POST['username']);
		$email       =  e($_POST['email']);
		$password_1  =  e($_POST['password_1']);
		$password_2  =  e($_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($name)) { 
			array_push($errors, "name is required"); 
		}
		if (empty($username)) { 
			array_push($errors, "Username is required"); 
		}
		if (empty($email)) { 
			array_push($errors, "Email is required"); 
		}
		if (empty($password_1)) { 
			array_push($errors, "Password is required"); 
		}
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// add member user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database

			if (isset($_POST['user_type'])) {
				$user_type = e($_POST['user_type']);
				$query = "INSERT INTO users (name, username, email, user_type, password) 
						  VALUES('$name','$username', '$email', '$user_type', '$password')";
				mysqli_query($db, $query);
				$_SESSION['success']  = "New user successfully created!!";
				header('location: displaymembers.php');
			}else{
				$query = "INSERT INTO users (name,username, email, user_type, password) 
						  VALUES('$name','$username', '$email', 'user', '$password')";
				mysqli_query($db, $query);

				// get id of the created user
				
				header('location: displaymembers.php');				
			}

		}

	}
	
	// return user array from their id
	function getUserById($id){
		global $db;
		$query = "SELECT * FROM users WHERE id=" . $id;
		$result = mysqli_query($db, $query);

		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	// LOGIN USER
	function login(){
		global $db, $email,$username, $errors;

		// grap form values
		$email = e($_POST['email']);
		$password = e($_POST['password']);

		// make sure form is filled properly
		if (empty($email)) {
			array_push($errors, "email is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		// attempt login if no errors on form
		if (count($errors) == 0) {
			$password = md5($password);

			$query = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) { // user found
				// check if user is admin or user
				$logged_in_user = mysqli_fetch_assoc($results);
				if ($logged_in_user['user_type'] == 'admin') {

					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('location: ophome.php');		  
				}
				elseif ($logged_in_user['user_type'] == 'horticulture') {
					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('location: hortihome.php');
				}
				elseif ($logged_in_user['user_type'] == 'coffee') {
					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('location: coffeehome.php');
				}
				else{
					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('location: index.php');
				}
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

	function isLoggedIn()
	{
		if (isset($_SESSION['user'])) {
			return true;
		}else{
			return false;
		}
	}

	function isAdmin()
	{
		if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
			return true;
		}else{
			return false;
		}
	}
	function isHorticulture()
	{
		if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'horticulture' ) {
			return true;
		}else{
			return false;
		}
	}
	function isCoffee()
	{
		if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'coffee' ) {
			return true;
		}else{
			return false;
		}
	}

	// escape string
	function e($val){
		global $db;
		return mysqli_real_escape_string($db, trim($val));
	}

	function display_error() {
		global $errors;

		if (count($errors) > 0){
			echo '<div class="error">';
				foreach ($errors as $error){
					echo $error .'<br>';
				}
			echo '</div>';
		}
	}

?>