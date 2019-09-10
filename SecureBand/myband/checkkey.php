<?php 
$correct = "1234";

if ($_POST["key"] == $correct) {
    session_start();
    $_SESSION["access"]=1;
    header("Location: home.php");
} else {
    header("Location: key.php?error=1");
}

?>