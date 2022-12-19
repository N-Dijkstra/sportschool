<?php
session_start();
class LedenController
{
    //controleren of de variabele $_SESSION['leden'] al bestaat 
    function __construct(){
        if(!isset($_SESSION['leden'])){
            $_SESSION['leden']=array();
        }


    }
    function lidtoevoegen($voornaam, $achternaam, $adres, $postcode, $woonplaats, $gebdatum, $training){
        $leden=array();
        $leden['voornaam']=$voornaam;
        $leden['achternaam']=$achternaam;
        $leden['adres']=$adres;
        $leden['postcode']=$postcode;
        $leden['woonplaats']=$woonplaats;
        $leden['gebdatum']=$gebdatum;
        $leden['trainingsdagen']=$training;

    //gegevens in de array zetten
        array_push($_SESSION['leden'], $leden);
    }

    //met een loop de array uitlezen
    function sessiedoorlopen(){
        foreach($_SESSION['leden'] as $lid){
            echo "<tr>";
            echo "<td>".$lid['voornaam']."</td><td>".$lid['achternaam']."</td><td>".$lid['adres']."</td><td>".$lid['postcode']."</td><td>".$lid['woonplaats']."</td><td>".$lid['gebdatum']."</td><td>".$lid['trainingsdagen']."</td>";
            echo "</tr>";
        }
    }
}
?>