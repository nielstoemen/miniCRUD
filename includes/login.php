<?php

include_once('connect.php');
   
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
   
if ($_SERVER["REQUEST_METHOD"]== "POST") {
      
    $adminname = test_input($_POST["adminname"]);
    $password = test_input($_POST["password"]);
    $stmt = $connect->prepare("SELECT * FROM adminlogin");
    $stmt->execute();
    $users = $stmt->fetchAll();
      
    foreach($users as $user) {
          
        if(($user['adminname'] == $adminname) && 
            ($user['password'] == $password)) {
                // Starting session
                session_start();
                
                // Storing session data
                $_SESSION["admin"] = "admin";

                header("Location: ../adminpage.php");
        }
        else {
            echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            echo "</script>";
        }
    }
}
?>