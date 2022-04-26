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

                $sql = "SELECT * FROM menu";
                $stmt = $connect->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchALL();
                ?>

                <table>
                <?php
                foreach ($result as $menu) 
                { ?>
                     <tr>
                         <th>
                         <?php 
                            echo $menu['titel'] . ':' . ' ' . $menu['beschrijving'] . '..........€' . $menu['prijs'];
                         ?> 
                         <a href="etendetail.php?id=<?php echo $menu['id']; ?>">Meer informatie</a></th> </tr>
                <?php 
            } ?>
            </table>

            <a href="aanmaken.php">aanmaken</a>

        
            
    <br><a href="includes/logout.php">logout</a>
</body>
</html>