<?php
    $host = 'localhost';
    $user = 'root';
    $pw = '0000';
    $dbName = 'project';
    $mysqli = new mysqli($host, $user, $pw, $dbName);

    $number=$_GET['date'];
    $name=$_GET['name'];
    $date=$_GET['date'];
    $doctor=$_GET['doctor'];

    echo date;
?>
