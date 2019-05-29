<?php

include '../app/vendor/autoload.php';

// An example of creating an event.
$event = new App\Event();
$Utun_Syndet = new App\Event();
$Utun_Syndet -> set_title("Utun Syndet");
$Utun_Syndet -> set_startdate("05.12.2019 Alkaen Klo: 13.00 Maito hetkellä");
$Utun_Syndet -> set_enddate("05.12.2019 Loppuen Klo: 14.15 Unen loppumiseen");

$Wombon_Syndet = new App\Event();
$Wombon_Syndet -> set_title("Wombon Syndet");
$Wombon_Syndet -> set_startdate("07.02.2020 Alkaen Klo: 12.00 kaakao hetkellä");
$Wombon_Syndet -> set_enddate("07.02.2020 Loppuen Klo: 12.15 keksien loppumiseen");

$Teemun_Syndet = new App\Event();
$Teemun_Syndet -> set_title("Teemun Syndet");
$Teemun_Syndet -> set_startdate("25.06.2019 Alkaen Klo: 12.10 Lohikäärmeen kutituksella");
$Teemun_Syndet -> set_enddate("25.06.2019 Loppuen Klo: 12.15 Vieraiden tuhkien kierrättämiseen");


?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My events</title>
    </head>
    <body>
        <h1>My events</h1>
        <ul><?php
         $lista=array($Utun_Syndet, $Wombon_Syndet, $Teemun_Syndet);
          foreach($lista as $value) {?>
            <li> <?php 
            
           

           
            echo "<b>Title: ".$value->title."</b><br> Start Date: ".$value->startdate."<br> End Date: ".$value ->enddate."<br><br><br>";
            
            ?></li><?php  }; ?>
        </ul>
    </body>
</html>