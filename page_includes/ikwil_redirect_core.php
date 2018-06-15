<?php
require_once 'data_config.php';

//USER_ID uit de sessie halen
$user_id = $_SESSION['usr_id'];




//======================================================================
// Account definieren om te bepalen welke extra's geladen mogen worden
//======================================================================

//Selecteer de role om vervolgens het account de categoriseren.
$sql = "SELECT role FROM md_users WHERE id = '$user_id'";
$result = mysqli_query($con, $sql);

while($row = $result->fetch_assoc()) {
	
//Het recht van de gebruiker
$user_role = $row['role'];

  
} 

//Waarde voor de rechten vastleggen
$Admin = "Admin";
$Planning= "Planning";


if($user_role == $Admin)
{
if($Page_id == $Admin){
	
	
}
	else{
 header('Location: ad-log-results.php');	
		}
}

?>