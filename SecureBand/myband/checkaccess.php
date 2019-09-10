<?php 
session_start();
if(isset($_SESSION["access"])){
    if($_SESSION['access'] !== 1){
    header("Location: key.php");
    exit;
    }
}
?>