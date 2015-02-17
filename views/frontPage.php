<?php include('includes/header.php'); ?>

<div id="content">
    <h2>Kezdőlap</h2>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="imgs/slideshow/festival.jpg" alt="Festival">
            </div>

            <div class="item">
                <img src="imgs/slideshow/restaurant.jpg" alt="Restaurant">
            </div>

            <div class="item">
                <img src="imgs/slideshow/flashmob.jpg" alt="Flashmob">
            </div>

            <div class="item">
                <img src="imgs/slideshow/concert.jpg" alt="Concert">
            </div>
        </div>

        <!-- Left and right controls--> 
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>


    </div>



    <?php
    foreach ($news as $item) {
        echo '<div class="news">';
        echo '<div class="title">' . $item['title'] . '</div>';
        echo '<div class="text">' . $item['text'] . '</div>';
        echo '<div class="date">' . $item['date'] . '</div>';
        echo '</div>';
    }
    ?>
</div>

<?php
include('includes/footer.php');
