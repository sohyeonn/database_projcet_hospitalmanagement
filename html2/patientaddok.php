<?
  include './dbconn.php';

  $name = $_GET['pat_name'];
  $id = $_GET['pat_id'];
  $phone = $_GET['pat_phone'];
  $disease = $_GET['pat_pat'];
  $doctor1 = $_GET['pat_doc'];
  $surgery = $_GET['pat_sur'];
  $room = $_GET['pat_room'];
  $cost = $_GET['pat_pay'];
  $organ = $_GET['pat_org'];
  $etc = $_GET['pat_ref'];

  $d1 = "SELECT 의사번호 FROM 의사 WHERE 의사이름 = '$doctor1'";
  //입력받은 의사 이름과 일치하는 의사번호 찾는 쿼리
  $doctorname = mysqli_query($conn, $d1);
  $docrow = mysqli_fetch_array($doctorname);
  //만약 그 쿼리에 값이 없다면 해당 의사가 없는거임
  if($docrow['의사번호']==false){
  echo '<script> alert("해당 이름의 의사가 없습니다!");</script>';
  echo "<script> location.href='./patientadd.php'; </script>";
  exit;
}

  $test1 = "SELECT count(*) t1 FROM 환자 WHERE 이름 = '$name' AND 주민번호 = $id AND 병명 = '$disease' AND 담당교수 = $docrow[의사번호]";
  //같은 환자가 있는지 확인 (같은 병명과 같은 담당교수면 겹치기 때문에 이름 주민번호 뿐만아니라 병명과 담당교수도 같이 검색)
  $testq1 = mysqli_query($conn, $test1);
  $testrow1 = mysqli_fetch_array($testq1);
  if($testrow1['t1']>0){//동일한 값이 하나라도 있으면 안됨
    echo '<script>alert("동일 인물 존재!");</script>';
    echo "<script> location.href='./patientadd.php'; </script>";
    exit;
  }

  $q2 = "SELECT count(*) q2 FROM 호실 WHERE 호수=$room";
  //호실 테이블에서 해당 호수 검색
  $testq2 = mysqli_query($conn, $q2);
  $testrowq2 = mysqli_fetch_array($testq2);
  if($testrowq2['q2']==false){//호수 번호가 잘못된 경우
    echo '<script>alert("호실이 잘못되었습니다!");</script>';
    echo "<script> location.href='./patientadd.php'; </script>";
    exit;
  }

  if($room == NULL){
    $room = 0;
  }
  if($etc == NULL){
    $etc = N;
  }


  $query = "INSERT INTO 환자 VALUES(NULL, '$name', $id, '$phone', '$disease', $docrow[의사번호], now(), '$surgery', $room, $cost, '$organ', '$etc')";
  //echo $query;
  $result = mysqli_query($conn, $query);
  echo '<script> alert("완료!");</script>';
  echo "<script> location.href='./환자관리.php'; </script>";
    

?>

                                           