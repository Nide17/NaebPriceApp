<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "id2087542_search_db");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$term = mysqli_real_escape_string($link, $_REQUEST['term']);
 
if(isset($term)){
    // Attempt select query execution

$sql = "SELECT * FROM beneficiaries_of_fruits_seedlings_season_2016_2017_e WHERE CONCAT(farmer_name,Id_Farmer,Tel_Farmer) LIKE '%" . $term . "%'";
	
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
				
				echo "<p>" . $row['farmer_name'] . "</p>";
				echo "<p>" . $row['Id_Farmer'] . "</p>";
				echo "<p>" . $row['Tel_Farmer'] . "</p>";
            }
            // Close result set
            mysqli_free_result($result);
        } else{
            echo "<p>No matches found</p>";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
 
// close connection
mysqli_close($link);
?>