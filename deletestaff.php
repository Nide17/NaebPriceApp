  <?php 
//including the database connection file
$link = mysqli_connect("localhost", "root", "", "id2087542_search_db");

//Checkinf is Admin 
include('functions/functions.php');

	if (!isAdmin()) {
		$_SESSION['msg'] = "You must be Administrator";
		header('location: login.php');
	}
 
//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table
$result = mysqli_query($link, "DELETE FROM users WHERE id = $id");
 
//redirecting to the display page (index.php in our case)
header("Location:displaystaff.php");

mysqli_close($link);
?>