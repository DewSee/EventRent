<?php

$pageTitle = "Felhasználók kezelése";

//jogosultságok kigyűjtése:
$query = "SELECT * FROM `rights`";
$result = $db->query($query);
if ($db->errno) {
    die($db->error);
}

$rights = array();
$c = 0;
while ($uData = $result->fetch_array()) {
    $rights[$c]['id'] = $uData['id'];
    $rights[$c]['description'] = $uData['description'];
    $c++;
}

//felhasználó keresés
if (isset($_POST['searchSubmit'])) {

    $where = '';
    $usersName = $_POST['uname'];
    if (!empty($usersName))
        $where.= "uname LIKE '%$usersName%'";
    $realName = $_POST['name'];
    if (!empty($realName))
        $where.= (!empty($where)) ? " AND `name` LIKE '%$realName%'" : "`name` LIKE '%$realName%'";
    $usersEmail = $_POST['email'];
    if (!empty($usersEmail))
        $where.= (!empty($where)) ? " AND email LIKE '%$usersEmail%'" : "email LIKE '%$usersEmail%'";

    $query = (!empty($where)) ? "SELECT * FROM `users` WHERE $where" : "SELECT * FROM `users` LIMIT 10";
    $found = $db->query($query);
    if ($db->errno) {
        die($db->error);
    }

    $_SESSION['sresult'] = array();
    $c = 0;
    while ($usersData = $found->fetch_array()) {
        $_SESSION['sresult'][$c]['uname'] = $usersData['uname'];
        $_SESSION['sresult'][$c]['email'] = $usersData['email'];
        $_SESSION['sresult'][$c]['name'] = $usersData['name'];
        $c++;
    }

    header("Location: $HOST/admin/?q=felhasznalok");
    exit;
}

// users form feldolgozása:
if (isset($_POST['usersSubmit'])) {
    $error = false;
    $userName = $_POST['uname'];
    $userPass = (!empty($_POST['upass'])) ? crypt($_POST['upass']) : '';
    $userRealName = $_POST['name'];
    $userEmail = $_POST['email'];
    $userRights = $_POST['rights'];
    if (empty($userName) || empty($userPass) || empty($userRealName) || empty($userEmail))
        $error = true;

    if ($error) {
        $_SESSION['msg'] = 'Minden mező kitöltése kötelező!';
    } else {
        // db-be írás:
        $query = "INSERT INTO users (uname, upass, name, email, rights) VALUES ('$userName', '$userPass', '$userRealName', '$userEmail', '$userRights');";
        $result = $db->query($query);
        if ($db->errno) {
            die($db->error);
        }

        $_SESSION['msg'] = 'Felhasználó rögzítve.';
    }


    

    header("Location: $HOST/admin/?q=felhasznalok");
    exit;
}
?>