<?php
$pageTitle = "Regisztráció";
// users form feldolgozása:
if (isset($_POST['usersSubmit'])) {
    $userName = $_POST['uname'];
    $userPass = crypt($_POST['upass']);
    $userRealName = $_POST['name'];
    $userEmail = $_POST['email'];
//$userRights = $_POST['rights'];
    $userRights = 4;

// Alap érték: Felhasználó
    $userActive = 1;
//Alap érték: Aktív 
// db-be írás:
    $query = "INSERT INTO users (uname, upass, name, email, rights, active) VALUES " . "('$userName', '$userPass', '$userRealName', '$userEmail', '$userRights', '$userActive');";
    $result = $db->query($query)
    ;
    if ($db->errno) {
        die($db->error);
    }
    $_SESSION['msg'] = 'Sikeres regisztráció.';
    header("Location: $HOST/?q=regisztracio");
    exit;
}

