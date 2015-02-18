<?php

$pageTitle = "Hírek rögzítése";

// login form feldolgozása:
if (isset($_POST['newsSubmit'])) {
  
	$newsTitle = $_POST['title'];
	$newsText = $_POST['text'];
        $newsLead = $_POST['lead'];
	$newsDate = $_POST['date'];
	
	echo "$newsTitle $newsDate <br> $newsText"; die();
	
	// db-be írás:
	
	
}

?>