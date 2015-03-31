<?php
$succes = false;

// login form feldolgozása:
if (isset($_POST['loginSubmit'])) {

    $uName = $_POST['uName'];
    $uPass = $_POST['uPass'];


    // acc a db-ből:

    $query = "SELECT * FROM `users` WHERE `uname`='$uName'";
    $result = $db->query($query);
    if ($db->errno) {
        die($db->error);
    }

    // kiszedem az eredményből az 1db sort:
    $uData = $result->fetch_array();

    if ($uData['upass'] == crypt($uPass, $uData['upass']))
        $success = true;  //hashed password ellenőrzése


        
//if ($uData['upass'] == $uPass) $success = true; //hash nélküli jelszók ellenőrzése

    if ($success) {
        // admin oldalakhoz hozzáférés
        $_SESSION['logged'] = true;
        $_SESSION['name'] = $uData['name'];
        $_SESSION['rights'] = $uData['rights'];
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>EventRent - <?php echo $pageTitle; ?></title>
        <!--Gallery-->       

        <!-- jQuery: -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <!-- Bootstrap: -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="views/css/base.css">
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <link href="lib/datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet">
        <script src="lib/datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="lib/datepicker/locales/bootstrap-datepicker.hu.min.js"></script>
        <script>
            $(document).ready(function() {

                $('#login-trigger').click(function() {
                    $(this).next('#login-content').slideToggle();
                    $(this).toggleClass('active');

                    if ($(this).hasClass('active'))
                        $(this).find('span').html('&#x25B2;')
                    else
                        $(this).find('span').html('&#x25BC;')
                });

                $('#eventdate').datepicker({
                    format: "yyyy-mm-dd",
                    langauge: "hu"
                   
                    
                });

            });
        </script>
    </head>
    <body>

        <div id="header">
            <?php if (isset($_SESSION['logged'])) : ?>
                <a href="?q=kijelentkezes">Kijelentkezés</a>
<?php else : ?>
                <nav>
                    <ul>
                        <li id="login">
                            <a id="login-trigger" href="#">
                                Bejelentkezés <span>▼</span>
                            </a>
                            <div id="login-content">
                                <form  name="loginForm" method="post">
                                    <fieldset id="inputs">
                                        <input id="username" type="text" name="uName" placeholder="Felhasználónév" required>   
                                        <input id="password" type="password" name="uPass" placeholder="Jelszó" required>
                                    </fieldset>
                                    <fieldset id="actions">
                                        <input type="submit" id="submit" name="loginSubmit">

                                    </fieldset>
                                </form>
                            </div>                     
                        </li>
                        <li id="signup">
                            <a href="?q=regisztracio">Regisztráció</a>
                        </li>
                    </ul>
                </nav>
<?php endif; ?>

            <div id="logo">
                <a href="?q=kezdolap"><img src="imgs/ERcalendar.png" id="eventrentlogo"></a> 
            </div>
            <div id="subtitle">
                <h2 id="subtitle"> Rendezvények, műsorok, exkluzív előadások</h2>
            </div>

        </div>
        <div id="page">
            <div id="sidebar">
<?php include('navigation.php'); ?> 
            </div>