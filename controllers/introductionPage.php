<?php

$pageTitle = "Cégünkről";

// oldal tartalmának betöltése adatbázisból:

$query = "SELECT * FROM `pages` WHERE `id`='cegunkrol'";
$result = $db->query($query);
if ($db->errno) {
  die($db->error);
}

// kiszedem az eredményből az 1db sort:
$page = $result->fetch_array();
