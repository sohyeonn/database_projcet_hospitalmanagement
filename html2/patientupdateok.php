<!--2020.05.29 16011164 윤소현-->
<?php

  include './dbconn.php';

  $n = $_GET['pat_name'];
  $p = $_GET['pat_phone'];
  $s = $_GET['pat_sick'];
  $dc = $_GET['pat_doc'];
  $dt = $_GET['pat_date'];
  $sr = $_GET['pat_sur'];
  $ro = $_GET['pat_room'];
  $pa = $_GET['pat_pay'];
  $o = $_GET['pat_org'];
  $r = $_GET['pat_ref'];
  $nu = $_GET['pat_num'];

  $query1 = "SELECT 의사번호 FROM 의사 WHERE 의사이름 = '$dc'";
  $r1 = mysqli_query($conn, $query1);

  echo $rl;
/*  $query = "UPDATE 환자 SET 이름='$n', 연락처='$p', 병명='$s', 담당교수=$r1, 치료날짜='$dt', 수술여부='$sr', 호실=$ro, 비용=$pa, 장기이식필요유무='$o', 특이사항='$r' WHERE 환자번호=$nu";
  echo $query; 
  $result = mysqli_query($conn, $query);
  echo " <script> location.href='./환자관리.php'; </script>";
*/
?>