<?php
session_start();
unset($_SESSION["user"]);
unset($_SESSION["id"]);
unset($_SESSION["msg"]);
header('location:index.php');
?>