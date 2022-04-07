<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <img src="image/logo.png" class="logo">
    <nav>
        <img src="image/huis.jpg" class="huisfoto" width="40px" height="40px">
        <button class="buttonnav"><a href="index.php" class="navigatie">Home</a></button>
        <button class="buttonnav"><a href="menu.php" class="navigatie">Menu</a></button>
        <button class="buttonnav"><a href="voordeelpas.php" class="navigatie">Voordeelpas</a></button>
        <button class="buttonnav"><a href="contact.php" class="navigatie">Contact</a></button>
    </nav>
    
    <?php
       if (isset($_POST['submit'])){
            $fname = $_POST['fname'];
            $from = 'From: My Contact Form';
            $to = 'nielstoemen@gmail.com';
            $subject = 'Wassup?';
    
            $body = "From: $fname\n";
    
            if ($_POST['submit']) {
                if (mail ($to, $subject, $body, $from)) {
                echo '<p>Message Sent Successfully!</p>';
                } else {
                echo '<p>Ah! Try again, please?</p>';
                }
            }
       }


       ?>

    <div class="contactform">
        <div class="contact">
        <form action="#" method="post" class="forum">
            <label class="form">Voornaam:</label> <br>
            <input class="form" name="fname" placeholder="Voornaam"> <br>
            <label class="form">Achternaam:</label> <br>
            <input class="form" name="lname" placeholder="Achternaam"> <br>
            <label class="form">Uw nummer:</label> <br>
            <input class="form" name="nummer" placeholder="nummer"> <br>
        <input id="submit" name="submit" type="submit" value="Submit">
        </form>
        </div>
        <div class="infoform">
            <h4>Contact</h4>
            <p>Voer hier uw gegevens in en wij zullen zo snel mogenlijk reageren op uw vraag.</p>
        </div>
    </div>
    <div class="fotocontact">
        <img src="image/contact-title.jpg" class="contactfoto">
    </div>
</body>
</html>
