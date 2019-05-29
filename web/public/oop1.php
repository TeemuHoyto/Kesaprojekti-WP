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

$Aurinko_sammuu= new App\Event();
$Aurinko_sammuu -> set_title("Aurinko Sammuu");
$Aurinko_sammuu -> set_startdate("22.07.300000000 Alkaen Klo: 15.10 Magneettikentän luhistumisella");
$Aurinko_sammuu -> set_enddate("22.07.300000010 Loppuen Klo: 12.15 Auringon räjähdykseen");

$Keksitehtaan_lakko= new App\Event();
$Keksitehtaan_lakko -> set_title("Keksitehtaan Lakko");
$Keksitehtaan_lakko -> set_startdate("18.12.2019 alkaen Klo: 06.10 Ulosmarssilla johtuen huonoista työoloista ja keksien laadun romahtamisesta");
$Keksitehtaan_lakko -> set_enddate("24.12.2019 Loppuen Klo: 06.15 Joululoman alkaessa ei voi lakkoilla");

?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My events</title>
    </head>
    <body>
        <h1>My events</h1>
        <ul><?php
         $lista=array($Utun_Syndet, $Wombon_Syndet, $Teemun_Syndet, $Aurinko_sammuu, $Keksitehtaan_lakko);
          foreach($lista as $value) {?>
            <li> <?php 
            
           

           
            echo "<b>Title: ".$value->title."</b><br> Start Date: ".$value->startdate."<br> End Date: ".$value ->enddate."<br><br><br>";
            
            ?></li><?php  }; ?>
        </ul>
    </body>
</html>