<?php 
    include_once('includes/session.php');
    include_once ('includes/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detailpage</title>
</head>
<body>
     <?php

       $sql = "UPDATE * 
          SET titel = :titel, beschrijving :beschrijving , prijs = :prijs , prijs = :prijs, afbeelding = :afbeelding
          WHERE ID = :ID";
          $stmt = $connect->prepare($sql);
          $stmt->bindParam(":ID" , $_GET['ID']);
          $stmt->bindParam(":titel", $_POST['titel']);
          $stmt->bindParam(":beschrijving" , $_POST['beschrijving']);
          $stmt->bindParam(":afbeelding" , $_POST['afbeelding']);
          $stmt->execute();
        foreach($result as $result){
        echo $result['titel'] . ':' . ' ' . $result['beschrijving'] . '' . $result['prijs'];
        }
     ?>
    <form action=".php" method="post" class="forum">
        <input type="text" name="id" value="<?php echo $_GET['id'];?>">
        <input name="submit" type="submit" value="send">
    </form>