<?php
session_start();
$_SESSION['access'] = 0;
header('Location: key.php');