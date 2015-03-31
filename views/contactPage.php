<?php include('includes/header.php'); ?>

<div id="content">
    <h2><?php echo $page['title']; ?></h2>

    <?php echo $page['text']; ?>

    <style>
        #contacttitle{
            font-size: 20px;
            font-weight: bold;}
        #fullname{
            line-height: 70%;}
        #contactname{
            font-weight: bold;}
        #phone{font-weight: bold;
               display: inline-block;
        margin-bottom: 0;}
        #phonenumber{display: inline-block;
        margin-bottom: 0;}
        #fax{font-weight: bold;
             display: inline-block;
        margin-top: 0;}
        #faxnumber{display: inline-block;
        margin-top: 0;}
        #email{ font-weight: bold;
                margin-bottom: 0;}
        #eadress{margint-top: 0;}
    </style>

    <p id="contacttitle">Kapcsolat</p>

    <div id="fullname">
        <p id="contactname">Event Rent Rendezvényszervező Iroda</p> Betéti Társaság</p>
    </div>


    <p id="adress">523 West 112th St, New York</p>
    <div id="phonediv">
        <p id="phone">Telefon:</p> <p id="phonenumber">(212) 111-2222
    </div>
    <div id="faxdiv">
        <p id="fax">Fax:</p><p id="faxnumber">(518) 222-3333
    </div>
    <p id="email">E-mail címünk:</p>
    <a href="mailto:webmaster@example.com">info@eventrent.com</a><br>
    <h3>Üzenetküldés:</h3>
    <form name="contactForm" method="post">
        <label>Név:</label>
        <br>
        <input type="text" name="contactName">
        <br>
        <label>e-mail:</label>
        <br>
        <input type="email" name="contactEmail">
        <br>
        <label>Üzenet:</label>
        <br>
        <textarea name="contactMessage"></textarea>
        <br>
        <input type="submit" name="contactSubmit">
    </form>
    <br>


    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:500px;width:600px;"><div id="gmap_canvas" style="height:500px;width:600px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://wordpress-themes.org" id="get-map-data">wordpress-themes.org</a></div><script type="text/javascript"> function init_map() {
            var myOptions = {zoom: 16, center: new google.maps.LatLng(40.804942011469265, -73.96436669311521), mapTypeId: google.maps.MapTypeId.HYBRID};
            map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
            marker = new google.maps.Marker({map: map, position: new google.maps.LatLng(40.804942011469265, -73.96436669311521)});
            infowindow = new google.maps.InfoWindow({content: "<b>Event Rent</b><br/>2880 Broadway<br/> New York"});
            google.maps.event.addListener(marker, "click", function() {
                infowindow.open(map, marker);
            });
            infowindow.open(map, marker);
        }
        google.maps.event.addDomListener(window, 'load', init_map);</script>
</div>

<?php
include('includes/footer.php');
