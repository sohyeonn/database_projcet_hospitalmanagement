<!--2020.05.14 16011164 윤소현-->
<?php

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

    $id = $_POST['uname'];
    $pw = $_POST['psw'];

    $query = "INSERT INTO login VALUES('$id', '$pw')";
    echo $query;
    //mysqli_query($conn, $query);
    //echo "<script>alert('입력 완료!'); location.href='main2.php'</script>"
    



    /* root database에 test 데이터베이스 생성 */
/* test 데이터베이스에 table id와 pwd생성 */

?>