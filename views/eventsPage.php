<?php include('includes/header.php'); ?>

<div id="content">




    <?php if (isset($_SESSION['msg'])) : ?>

        <p><?php
            print($_SESSION['msg']);
            unset($_SESSION['msg']);
            ?></p>
        <br>
        <ul id="navigation" class="nav nav-pills">
            <li role="presentation"><a href="?q=esemenyek">Vissza</a></li>
        </ul>

    <?php else : ?>



        <h3>Új esemény:</h3>
        <form name="eventForm" method="post">
            <label>Név:</label>
            <br>
            <input type="text" name="eventsName">
            <br>
            <label>e-mail:</label>
            <br>
            <input type="email" name="eventsEmail">
            <br>
            <label>Telefonszám:</label>
            <br>
            <input type="text" name="eventsNumber">
            <br>
            <label>Leírás:</label>
            <br>
            <textarea rows="7" cols="60" name="eventsText"></textarea>
            <br>
            <label>Tervezett dátum:</label>
            <br>
            <input type="text" name="eventsExdate" id="eventdate" class="form-control">
            <br>
            <label>Feladás dátuma:</label>
            <br>
            <input type="text" name="eventsRecdate" class="shortText">
            <br>
            <label>Kategória:</label>
            <br>           
            <select name="types" id="selectmenu">
                <?php
                foreach ($types as $id => $types) {
                    echo '<option value="' . $id . '">' . $types . '</option>';
                }
                ?>
            </select>
            <br>
            <input type="submit" name="eventSubmit">
        </form>

    <?php endif; ?>


</div>

<?php
include('includes/footer.php');
