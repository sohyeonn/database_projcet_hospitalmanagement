<?php

$db_host = "localhost";
$db_user = "root";
$db_passwd = "0000";
$db_name = "project";

$mysqli = new mysqli ($db_host, $db_user, $db_passwd, $db_name);

if ($mysqli->connect_errno) {
    die('Connection Error : '.$mysqli->connect_error);
} else {
    echo "<center>DB 연결 완료!!</center>";
}
$department=$_GET['Depart_radio'];

echo $department;
?>