<?php
    session_start();
    $mysqli = new mysqli('localhost', 'root', '', 'resume');
    $mysqli->set_charset('utf8');
?>