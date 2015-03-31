<?php

$pageTitle = "Kezdőlap";
// Hírek kiolvasása adatbázisból:

$query = "SELECT * FROM `news` order by date desc";
$news = $db->query($query);
if ($db->errno) {
  die($db->error);
}

