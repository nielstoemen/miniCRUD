<?php
    include_once 'session.php';

    if(isset($_POST['delete-button'])){

        header("Location: includes/delete.php");

        $sql = "DELETE FROM menu WHERE id=?";
        $stmt = $connect->prepare($sql);
        $stmt->execute();

        sleep(3);;

        header("Location: adminpage.php");
    }
?>