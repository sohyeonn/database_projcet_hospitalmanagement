<?
  include './dbconn.php';

  $name = $_GET['pat_name'];
  $id = $_GET['pat_id'];
  $phone = $_GET['pat_phone'];
  $disease = $_GET['pat_pat'];
  $doctor1 = $_GET['pat_doc'];
  $surgery = $_GET['pat_sur'];
  $room = $_GET['pat_room']; //마취
  $cost = $_GET['pat_pay'];
  $organ = $_GET['pat_org'];
  $etc = $_GET['pat_ref'];


  $test1 = "SELECT count(*) t1 FROM 환자 WHERE 이름 = '$name' AND 주민번호 = '$id' AND 병명 = '$disease' AND 담당교수 = '$doctor1'";
  $testq1 = mysqli_query($conn, $test1);
  $testrow1 = mysqli_fetch_array($testq1);
  if($testrow1['t1']>0){
    echo '<script>alert("동일 인물 존재!");</script>';
    echo "<script> location.href='./patientadd.php'; </script>";
  }

  if($room == NULL){
    $room = 0;
  }
  if($etc == NULL){
    $etc = N;
  }

  $d1 = "SELECT 의사번호 FROM 의사 WHERE 의사이름 = '$doctor1'";
  $doctorname = mysqli_query($conn, $d1);
  $docrow = mysqli_fetch_array($doctorname);

  $query = "INSERT INTO 환자 VALUES(NULL, '$name', $id, '$phone', '$disease', $docrow[의사번호], now(), '$surgery', $room, $cost, '$organ', '$etc')";
  //echo $query;
  $result = mysqli_query($conn, $query);
  echo "<script> location.href='./환자관리.php'; </script>";
    

?>

                                           