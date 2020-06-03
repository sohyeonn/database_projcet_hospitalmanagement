<!--2020.06.03 16011164 윤소현-->
<!-- 해야할 것
1. db값과 같을 때 에러메세지 띄우기
-->
<?php

  include './dbconn.php';

  $bs = $_GET['book-select'];
  $rs = $_GET['room-select'];
  $pn = $_GET['patientnum'];
  $dn = $_GET['docnum'];
  $on = $_GET['orgname'];
  $eme = $_GET['eme'];
  $ane = $_GET['ane']; //마취
  $hos = $_GET['hos'];
  $chi = $_GET['chi'];
  $old = $_GET['old'];
  $org = $_GET['org'];
  $vip = $_GET['vip'];

  if($bs == 'in'){
    $query1 = "UPDATE 수술방 SET 빈방여부='N', 환자=$pn, 담당의사=$dn WHERE 호실=$rs";
    $query2 = "INSERT INTO 수술중 VALUES(NULL, $pn, $dn, $rs, $eme, $ane, $hos, $chi, $old, $org, $vip)";
    if($org != NULL & $on != 0){
      $query3 = "UPDATE 장기기증 SET num=num-1 WHERE id=$on";
      $result3 = mysqli_query($conn, $query3);
      echo " <script> location.href='./장기기증.php'; </script>";
    }
    $result1 = mysqli_query($conn, $query1);
    $result2 = mysqli_query($conn, $query2);
    echo " <script> location.href='./수술실관리.php'; </script>";
  }
  else {
    $query4 = "UPDATE 수술방 SET 빈방여부='Y', 환자=NULL, 담당의사=NULL WHERE 호실=$rs";
    $query5 = "DELETE from 수술중 WHERE patid=$pn AND docid=$dn AND 수술방=$rs";
    $query6 = "UPDATE 수술실재고 SET num=num-1";
    $result4 = mysqli_query($conn, $query4);
    $result5 = mysqli_query($conn, $query5);
    $result6 = mysqli_query($conn, $query6);
    echo " <script> location.href='./수술실재고관리.php'; </script>";
  }

  /*$query = "UPDATE 환자 SET 이름='$n', 연락처='$p', 병명='$s', 담당교수=$dc, 치료날짜='$dt', 수술여부='$sr', 호실=$ro, 비용=$pa, 장기이식필요유무='$o', 특이사항='$r' WHERE 환자번호=$nu";
  echo $query; $query5 = "DELETE from 수술중 WHERE patid=$pn AND docid=$dn AND 수술방=$rs";
  $result = mysqli_query($conn, $query);
  echo " <script> location.href='./환자관리.php'; </script>";
*/
//신장, 간장, 췌장, 심장, 폐, 소장, 췌도, 안구, 골수, 말초혈, 손·팔, 발·다리
//update 수술방 호실 빈방여부 환자 담당의사
//insert 수술중 id | patid | docid | 수술방 | 응급 | 마취 | 입원 | 어린이 | 노인 | 장기이식 | VIP