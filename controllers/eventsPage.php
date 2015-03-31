<?php

$pageTitle = "Új esemény";
$found = array();


//eseménytípusok kigyűjtése:
$query = "SELECT * FROM `types`";
$result = $db->query($query);
if ($db->errno) {
	die($db->error);
}

$types = array();
$c = 0;
while ($typesData = $result->fetch_array()) {
	$id = $typesData['id'];
	$types[$id] = $typesData['description'];
	$c++;
}


// A POST-ban rossz névvel kerestél adatot, ezért nem futott le az alábbi rész.
if (isset($_POST['eventSubmit'])) { // <--Ha "eventSubmit" van a formnál, akkor itt is azt kell várni.
  
	// ugyan az volt itt is a hiba, mint feljebb. A "name" után megadott neveket kell beírni a POST tömbbe.
	//a POST tömbbe is olyan nevek kerülnek, amik a formon szerepeltek, tehát azokat kell itt kigyűjteni
	$eventsName = $_POST['eventsName']; // <-- tehát nem "name", hanem "eventsName", stb...
	$eventsEmail = $_POST['eventsEmail'];
	$eventsNumber = $_POST['eventsNumber'];
	$eventsText = $_POST['eventsText'];
        $eventsExdate = $_POST['eventsExdate'];
        $eventsRecdate = $_POST['eventsRecdate'];
	$eventsTypes = $_POST['types'];
	
	
	// db-be írás:
	$query = "INSERT INTO events (name, email, phonenumber, text, expectdate, recdate, types) VALUES ('$eventsName', '$eventsEmail', '$eventsNumber', '$eventsText', '$eventsTypes', '$eventsExdate', '$eventsRecdate');";
	$result = $db->query($query);
	if ($db->errno) {
		die($db->error);
	}
	
	$_SESSION['msg'] = 'Kérés felvéve.';
		
	header("Location: $HOST?q=esemenyek");
	exit;
}



?>