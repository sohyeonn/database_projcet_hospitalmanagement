<!--2020.06.03 16011164 윤소현-->
<?php

  include './dbconn.php';

  $oname = $_GET['orgname'];
  $onum = $_GET['orgnum'];
  

  
    $query = "UPDATE 장기기증 SET num=num+$onum WHERE id=$oname";
    $result = mysqli_query($conn, $query);
  echo " <script> location.href='./장기기증.php'; </script>";
  /*$query = "UPDATE 환자 SET 이름='$n', 연락처='$p', 병명='$s', 담당교수=$dc, 치료날짜='$dt', 수술여부='$sr', 호실=$ro, 비용=$pa, 장기이식필요유무='$o', 특이사항='$r' WHERE 환자번호=$nu";
  echo $query; 
  $result = mysqli_query($conn, $query);
  echo " <script> location.href='./환자관리.php'; </script>";
*/
//신장, 간장, 췌장, 심장, 폐, 소장, 췌도, 안구, 골수, 말초혈, 손·팔, 발·다리
//update 수술방 호실 빈방여부 환자 담당의사
//insert 수술중 id | patid | docid | 수술방 | 응급 | 마취 | 입원 | 어린이 | 노인 | 장기이식 | VIPecho " <script> location.href='./장기기증.php'; </script>";