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
        <img src="image/huis.jpg" class="huisfoto" width="40px" height="40px">
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
            echo $menu['titel'] . ':' . ' ' . $menu['beschrijving'] . "<br>";
            echo "<div class='prijskaartje'></div>";
        }
    ?>
    </div>
    <div class="ijsmenu">
    <?php
        include_once 'includes/connect.php';

        $sql = "SELECT * FROM ijs";
        $stmt = $connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchALL();

        foreach ($result as $menu) {
            echo $menu['titel'] . ':' . ' ' . $menu['beschrijving'] ;
        }
    ?>
    </div>
</body>
</html>