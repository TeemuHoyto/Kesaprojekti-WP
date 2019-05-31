<?php

include '../app/vendor/autoload.php';

// An example of creating an event.
$event = new App\Event2();
$Utun_Syndet = new App\Event2();
$Utun_Syndet -> set_title("Utun Syndet");
$Utun_Syndet -> set_start_date(new \DateTime("2019-12-05T12:00:00Z"));
$Utun_Syndet -> set_start_date_comment("Alkaen Maito hetkellä");
$Utun_Syndet -> set_end_date(new \DateTime("2019-12-05T14:00:00Z"));
$Utun_Syndet -> set_end_date_comment("Loppuen Unen loppumiseen");

$Wombon_Syndet = new App\Event2();
$Wombon_Syndet -> set_title("Wombon Syndet");
$Wombon_Syndet -> set_start_date(new \DateTime("2020-02-07T13:00:00Z"));
$Wombon_Syndet -> set_start_date_comment("Alkaen kaakao hetkellä");
$Wombon_Syndet -> set_end_date(new \DateTime("2020-02-07T13:00:00Z"));
$Wombon_Syndet -> set_end_date_comment("Keksit loppui");

$Teemun_Syndet = new App\Event2();
$Teemun_Syndet -> set_title("Teemun Syndet");
$Teemun_Syndet -> set_start_date(new \DateTime("2019-06-25T12:32:00Z"));
$Teemun_Syndet -> set_start_date_comment("Alkaen Lohikäärmeen kutituksella");
$Teemun_Syndet -> set_end_date(new \DateTime("2019-06-25T12:33:00Z"));
$Teemun_Syndet -> set_end_date_comment("Loppuen Vieraiden tuhkien kierrättämiseen");

$Aurinko_sammuu= new App\Event2();
$Aurinko_sammuu -> set_title("Aurinko Sammuu");
$Aurinko_sammuu -> set_start_date(new \DateTime("3000-07-05T06:00:00Z"));
$Aurinko_sammuu -> set_start_date_comment("Alkaen Magneettikentän luhistumisella");
$Aurinko_sammuu -> set_end_date(new \DateTime("3010-07-05T06:00:00Z"));
$Aurinko_sammuu -> set_end_date_comment("Loppuen Auringon räjähdykseen");

$Keksitehtaan_lakko= new App\Event2();
$Keksitehtaan_lakko -> set_title("Keksitehtaan Lakko");
$Keksitehtaan_lakko -> set_start_date(new \DateTime("2019-12-15T06:00:00Z"));
$Keksitehtaan_lakko -> set_start_date_comment("alkaen Ulosmarssilla johtuen huonoista työoloista ja keksien laadun romahtamisesta");
$Keksitehtaan_lakko -> set_end_date(new \DateTime("2019-12-24T06:00:00Z"));
$Keksitehtaan_lakko -> set_end_date_comment("Joululoman alkaessa ei voi lakkoilla");

$finnish_format = 'j.n.Y H:i';
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My events</title>
        <style>
            body{
                background-color:rgba(13,225,242,0.1);
            }
        .li{
            text-align:center;
            list-style-type: none; 
            color:#717171;
            font-size:1.5em;
        }
        .h1:after {
          content: ""; 
         display: block; 
         margin: 0 auto; 
          width: 30%;
          padding-top: 20px; 
          border-bottom: 3px solid aqua;
}
        .h1{
            font-size:7em;
            color:pink;
            text-align:center;
            margin-bottom:1em;
        }
        </style>
    </head>
    <body>
        <h1 class="h1">My events</h1>
        <ul><?php
         $lista=array($Utun_Syndet, $Wombon_Syndet, $Teemun_Syndet, $Aurinko_sammuu, $Keksitehtaan_lakko);
          foreach($lista as $value) {?>
            <li class="li"> <?php 

echo "<b style='font-size:3em;'> ".$value->title."</b><br><br> Start Date: ".$value->get_start_date( $finnish_format )."<br> Why Start: ".$value ->start_date_comment."<br> End Date: ".$value ->get_end_date( $finnish_format )."<br> Why End: ".$value ->end_date_comment."<br><br><br><br><br>";            
            ?></li><?php  }; ?>
        </ul>
    </body>
</html>