<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js"></script>
</head>
<body>
    <img src="image/logo.png" class="logo">
    <nav>
        <a href="index.php"><img src="image/huis.jpg" class="huisfoto" width="40px" height="40px"></a>
        <button class="buttonnav"><a href="index.php" class="navigatie">Home</a></button>
        <button class="buttonnav"><a href="menu.php" class="navigatie">Menu</a></button>
        <button class="buttonnav"><a href="voordeelpas.php" class="navigatie">Voordeelpas</a></button>
        <button class="buttonnav"><a href="contact.php" class="navigatie">Contact</a></button>
    </nav>

    <div class="menuhouder">
        <h3 class="menunaam">menu:</h3>
    <?php
        include_once 'includes/connect.php';

        $sql = "SELECT * FROM menu";
        $stmt = $connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchALL();

        foreach ($result as $menu) {
            echo $menu['titel'] . ':' . ' ' . $menu['beschrijving'] . '...........€' . $menu['prijs'] . "<br>";
        }
    ?>
    </div>
        <img src="image/burger3.jpg" class="menufotoburger">
    </div>
    <footer>
        <div class="opening">
            <h3 class="footertekst">Openingstijden</h3>
            <p class="footertekst">Dinsdag t/m zondag 11:30 – 21:00u</p>
            <p class="footertekst">Op maandag zijn wij helaas gesloten</p>
        </div>
        <div class="adres">
            <h3 class="footertekst">Contact</h3>
            <h4 class="footertekst">Adres:</h4>
            <p class="footertekst">Eetpaleis ’t Vosje</p>
            <p class="footertekst">Mercuriusplein 86</p>
            <p class="footertekst">5258AW Berlicum</p>
            <h4 class="footertekst">Telefoonnummer:</h4>
            <p class="footertekst">073 503 41 14</p>
            <h4 class="footertekst">Email:</h4>
            <p class="footertekst">info@eetpaleis-tvosje.nl</p>
        </div>
        <div class="socials">
            <a href="https://www.facebook.com/Eetpaleis-t-Vosje-580914481957929/" target="blank">
            <img src="image/fblogo.png" width="7%">
            <a href="https://www.instagram.com/eetpaleis_t_vosje_berlicum/" target="blank">
            <img src="image/ilogo.png" width="7%">
            <a href="https://www.tripadvisor.nl/Restaurant_Review-g3621317-d8430616-Reviews-Eetpaleis_t_Vosje-Berlicum_North_Brabant_Province.html" target="blank">
            <img src="image/tripadvisor.png" width="7%">
        </div>
    </footer>
</body>
</html>