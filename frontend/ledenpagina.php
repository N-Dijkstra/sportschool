<!DOCTYPE html>
<html>
<head>
    <title>Fit4You</title>
    <link rel="stylesheet" href="../styling/stylesheet.css"/>
</head>
<body>
    <header>
        <div>
            <h2>Fit4You Roosendaal</h2>
        </div>
    </header>

    <section id="banner">
        <div id="picturecard">
         <img src= "../images/Sportschool.jpg" alt="sportschool">
        </div>
    </section>

     <!--navigatiebalk-->
    <nav>
    <ul>
      <li><a href="Sportschool.php">Registreren</a></li>
      <li><a href="ledenpagina.php"class="selected">Leden</a></li>
    </ul>
    </nav>

     <!--tabel met gegevens van leden-->
    <table>
        <tr>
            <th>Voornaam</th>
            <th>Achternaam</th>
            <th>Adres</th>
            <th>Postcode</th>
            <th>Woonplaats</th>
            <th>Geboortedatum</th>
            <th>Trainingsdagen</th>
        </tr>
        <tr>

<?php
require("../backend/LedenController.php");
    $lc= new LedenController();
    $lc -> sessiedoorlopen();
?>
</body>
</html>


