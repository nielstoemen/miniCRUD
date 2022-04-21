<?php 
    include('includes/session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminpage</title>
    <link rel="stylesheet" href="css/adminstyle.css">
</head>
<body>
        <?php
                include_once 'includes/connect.php';
                include_once 'includes/delete.php';

                $sql = "SELECT * FROM menu";
                $stmt = $connect->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchALL();

                echo "<table>";
                foreach ($result as $menu) {
                    echo "<tr>" . "<th>" . $menu['titel'] . ':' . ' ' . $menu['beschrijving']. '..........€' . $menu['prijs'] . "</th>" .  "</tr>";
                    echo "<div class='prijskaartje'></div>";
                }
                echo "</table>";
            ?>
        <?php
                include_once 'includes/connect.php';
                include_once 'includes/delete.php';

                $sql = "SELECT * FROM ijs";
                $stmt = $connect->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchALL();

                echo "<table>";
                foreach ($result as $menu) {
                    echo "<tr>" . "<th>" . $menu['titel'] . ':' . ' ' . $menu['beschrijving']. '..........€' . $menu['prijs'] . "</th>". "<input type='submit' name='delete-button' value='delete'/>" . "</tr>";
                }
                echo "</table>";
            ?>
    <!-- Link aanmaken naar includes/logout.php -->
    <br><a href="includes/logout.php">logout</a>
</body>
</html>