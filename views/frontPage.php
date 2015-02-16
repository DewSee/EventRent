<?php include('includes/header.php'); ?>

<div id="content">
  <h2>Kezdőlap</h2>
  
  
  
  <div id="titletext" title="The main title">
<h1 class="title"><a href="index.php">Event Rent</a></h1>
<p class="subtitle"> Rendezvények, műsorok, exkluzív előadások </p>
</div>
<!--Slideshow-->
<img class="header" src="imgs/header.jpg" alt="Header">
<div id="menubar" title="menubar">
<a class="menubar" href="index.php">Kezdőlap</a>
<a class="menubar" href="pages/news.php">Hírek</a>
<a class="menubar" href="pages/about.php">Cégünkről</a>
<a class="menubar" href="pages/services.php">Szolgáltatások</a>
<a class="menubar" href="pages/contact.php">Kapcsolat</a>
</div>
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
<img src="imgs/festival.jpg" alt="Festival">
</div>
<div class="item">
<img src="imgs/restaurant.jpg" alt="Restaurant">
</div>
<div class="item">
<img src="imgs/flashmob.jpg" alt="Flashmob">
</div>
<div class="item">
<img src="imgs/concert.jpg" alt="Concert">
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
    echo '<div class="title">'.$item['title'].'</div>';
    echo '<div class="text">'.$item['text'].'</div>';
    echo '<div class="date">'.$item['date'].'</div>';
    echo '</div>';
  }
  ?>
</div>

<?php
include('includes/footer.php');
