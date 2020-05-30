<!--2020.05.25 16011164 윤소현-->
<?
     $host_name = "localhost";
     $db_user_id = "hospital";
     $db_pwd = "0000";
     $db_name = "hospital";
     $conn = mysqli_connect($host_name, $db_user_id, $db_pwd, $db_name);

     /* check connection */
     if ($conn->connect_error) {
       printf("Connect failed: %s\n", $conn->connect_error);
       exit();
     }
?>
