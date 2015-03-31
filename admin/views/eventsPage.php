<?php include('includes/header.php'); ?>

<div id="content">
    
    <?php
    foreach ($events as $item) {
        echo '<div class="events">';
        echo '<div class="name">'. $item['name'] . '</div>';
        echo '<div class="email">'. $item['email'] . '</div>';
        echo '<div class="types">'. $item['types'] . '</div>';
        echo '<div class="text">' . $item['text'] . '</div>';
        echo '<div class="expectdate">'. $item['expectdate'] . '</div>' ;
        echo '</div>';
    }
    ?>
</div>

<?php
include('includes/footer.php');


