<?php
session_start();

$usrToken = $_POST["authkey"];

if ($usrToken == $_SESSION['token']) {
    

    if ($_SESSION['state'] == "ADMIN") {
        header("Location: Admin.php"); 
    }
    if ($_SESSION['state'] = "USER") {
        header("Location: logged.php"); 
    }

}

else {
    header("Location: index.html");
}
?>