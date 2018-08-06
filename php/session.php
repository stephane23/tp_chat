<?php


session_start();
$_SESSION['user'] = $_COOKIE["user"];
header("location: ../page/chat.php");