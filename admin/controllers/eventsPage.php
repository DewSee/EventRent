<?php

$pageTitle = "Események";
// Hírek kiolvasása adatbázisból:

$query = "SELECT * FROM `events` order by expectdate";
$events = $db->query($query);
if ($db->errno) {
  die($db->error);
}