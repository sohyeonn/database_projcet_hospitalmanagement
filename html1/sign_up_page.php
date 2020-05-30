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

    $id = $_GET['id'];
    $pw = $_GET['psw'];
    $name = $_GET['name'];
    $age = $_GET['age'];
    $ident = $_GET['ident'];
    $gender = $_GET['gender'];
    $phone = $_GET['phone'];

    
    $query = "INSERT INTO 환자(이름, 아이디, 비밀번호, 주민번호, 연락처, 나이, 성별) VALUES('$name', '$id', '$pw', '$ident', '$phone', '$age', '$gender')"; 
    //echo $query;

    mysqli_query($conn, $query);
    
    echo "<script>alert('입력 완료!'); location.href='index.html#about'</script>"
    

?>