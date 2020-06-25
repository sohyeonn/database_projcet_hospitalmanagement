<!--2020.06.12 16011164 윤소현-->
<?php

  include './dbconn.php';
  $pid = $_GET["patnum"]; 
  
  //echo $pid;
  $query1 = "SELECT * FROM 환자 WHERE 환자번호 = $pid";
  //echo $query1;
  $r1 = mysqli_query($conn, $query1);
  $row1 = mysqli_fetch_array($r1);
  
  $query2 = "INSERT INTO 이전환자기록(이름, 주민번호, 연락처, 병명, 담당교수, 치료날짜, 수술여부, 호실, 비용, 장기이식필요유무, 특이사항) 
  VALUES ('$row1[이름]', $row1[주민번호], '$row1[연락처]', '$row1[병명]', $row1[담당교수], '$row1[치료날짜]', '$row1[수술여부]', $row1[호실], 
  $row1[비용], '$row1[장기이식필요유무]', '$row1[특이사항]')";
  //환자 정보를 모두 이전환자기록으로 옮김
  $result2 = mysqli_query($conn, $query2);

  $query3 = "DELETE FROM 환자 wHERE 환자번호 = $pid AND 이름 = '$row1[이름]' AND 주민번호 = $row1[주민번호]";
  //환자정보 삭제
  $result3 = mysqli_query($conn, $query3);

  if($row1['호실'] != NULL){//호실이 비어있지 않다는 뜻은 입원을 했다는 뜻이니까 병실재고도 1씩 감소
    $query4 = "UPDATE 병실재고 SET num=num-1";
    $result4 = mysqli_query($conn, $query4);

  }

  $roomstock = "SELECT count(*) cntt FROM 병실재고 WHERE num<11";
  //재고가 10개가 이하인 재고 검색
  $rst = mysqli_query($conn, $roomstock);
  $row5 = mysqli_fetch_array($rst);

  if($row5['cntt']>0){//10개 이하인 재고가 있다면 재고부족을 Y로 바꾸고 재고관리 페이지로 이동
      $query7 = "UPDATE 병실재고 SET outofstock='Y' WHERE num<11";
      $result7 = mysqli_query($conn, $query7);
      echo "<script> location.href='./병실재고관리.php'; </script>";
    } 
  else {
    echo " <script> location.href='./이전환자관리.php'; </script>";
  }


?>
  