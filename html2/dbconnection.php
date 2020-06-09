<?php
    $host = 'localhost';
    $user = 'root';
    $pw = '0000';
    $dbName = 'project';
    $mysqli = new mysqli($host, $user, $pw, $dbName);

    if($mysqli){
        echo "MySQL 접속 성공\n";
    }else{
        echo "MySQL 접속 실패\n";
    }
?>
