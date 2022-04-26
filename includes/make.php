<?php

    include('session.php');
    include_once 'connect.php';

    if(isset($_POST['submit']))
{    
     $titel = $_POST['titel'];
     $beschrijving = $_POST['beschrijving'];
     $prijs = $_POST['prijs'];
     $sql = "INSERT INTO menu ('id', 'titel', 'beschrijving', 'prijs') VALUES ('NULL', '$titel', '$beschrijving', '$prijs')";
}
?>