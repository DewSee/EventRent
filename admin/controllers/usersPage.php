<?php

$pageTitle = "Felhasználók kezelése";

// login form feldolgozása:
if (isset($_POST['usersSubmit'])) {
  
	$usersName = $_POST['uname'];
	$usersPass = $_POST['upass'];
	

	
	// db-be írás:
	$query = "INSERT INTO users (uname, upass) VALUES ('$usersName', '$usersPass');";
	$result = $db->query($query);
	if ($db->errno) {
		die($db->error);
	}
	
	$_SESSION['msg'] = 'Felhasználó felvéve.';
		
	header("Location: $HOST/admin/?q=felhasznalok");
	exit;
}

?>