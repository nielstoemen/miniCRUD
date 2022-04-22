<?php 
    include('includes/session.php');
    include_once 'includes/connect.php';

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
        
        $sql = "SELECT * FROM ijs WHERE id =:id";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":id", $_GET['id']);
        $stmt->execute();
        $result = $stmt->fetchAll();

        foreach($result as $result){
        echo $result['titel'] . ':' . ' ' . $result['beschrijving'] . '..........€' . $result['prijs'];
        }
     ?>
    <form action="detail.php" method="post" class="forum">
        <input type="text" name="id" value="<?php echo $_GET['id'];?>">
        <input name="submit" type="submit" value="verwijder">
    </form>

    <?php
        if(isset($_POST['submit']))
        {
            var_dump($_POST);
            $sql = "DELETE FROM ijs WHERE id =:id";
            $stmt = $connect->prepare($sql);
            $stmt->bindParam(":id", $_POST['id']);
            $stmt->execute();
        }
    ?> 

</body>
</html>