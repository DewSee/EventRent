<?php include('includes/header.php'); ?>

<div id="content">
    <h2>Felhasználó kezelés</h2>

    <?php if (isset($_SESSION['msg'])) : ?>

        <p><?php print($_SESSION['msg']);
    unset($_SESSION['msg']); ?></p>
        <br>
        <ul id="navigation" class="nav nav-pills">
            <li role="presentation"><a href="?q=felhasznalok">Felhasználók</a></li>
        </ul>

<?php else : ?>

        <form name="usersForm" method="post" id="usersForm">
            <label>Felhasználónév:</label>
            <br>
            <input type="text" name="uname">
            <br>
            <label>Jelszó:</label>
            <br>
            <input type="text" name="upass">
            <br>
            <input type="submit" name="usersSubmit">
        </form>

<?php endif; ?>

</div>

<?php
include('includes/footer.php');

