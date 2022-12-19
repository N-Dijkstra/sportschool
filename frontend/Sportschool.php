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
      <li><a href="Sportschool.php" class="selected">Registreren</a></li>
      <li><a href="ledenpagina.php">Leden</a></li>
    </ul>
    </nav>

    <!--registratieformulier-->
    <h3>Registratieformulier</h3>
    <Form method="POST">
        <p>Voornaam:</p>
        <input type="text" name="voornaam"/>
        <br/>
        <p>Achternaam:</p>
        <input type="text" name="achternaam"/>
        <br/>
        <p>Adres:</p>
        <input type="text" name="adres"/>
        <br/>
        <p>Postcode:</p>
        <input type="text" name="postcode"/>
        <br/>
        <p>Woonplaats:</p>
        <input type="text" name="woonplaats"/>
        <br/>
        <p>Geboortedatum:</p>
        <input type="date" name="gebdatum"/>
        <br/>
        <p>Aantal geschatte trainingsdagen:</p>
        <input type="number" name="trainingsdagen" min="1" max="7"/>
        <br/>
        <input type="submit" value="verstuur" name="btnverstuur"/>
    </form>
    
    <?php
    require("../backend/LedenController.php");
    //controleren of de button verstuur bestaat en gevuld is
    if(isset($_POST["btnverstuur"]))
    {
    //controleren of alle gegevens ingevuld zijn    
        if(empty($_POST["voornaam"]) || empty($_POST["achternaam"]) || empty($_POST["adres"]) || empty($_POST["postcode"]) || empty($_POST["woonplaats"]) || empty($_POST["gebdatum"]) || empty($_POST["trainingsdagen"]))
        {
            echo "Vul uw gegevens in";
        }else
        {
            $lc= new LedenController();
            $lc -> lidtoevoegen($_POST["voornaam"], $_POST["achternaam"], $_POST["adres"],$_POST["postcode"], $_POST["woonplaats"], $_POST["gebdatum"], $_POST["trainingsdagen"]);
        }
    }else
      echo "Geen data beschikbaar!";
    ?>

</body>
</html>