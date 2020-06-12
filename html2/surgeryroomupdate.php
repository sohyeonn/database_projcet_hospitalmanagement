<!--2020.06.09 16011164 윤소현-->
<!-- 해야할 것
1. db값과 같을 때 에러메세지 띄우기
-->
<?php

  include './dbconn.php';

  $bs = $_GET['book-select'];
  $rs = $_GET['room-select'];
  $pname = $_GET['patientnum'];
  $dname = $_GET['docnum'];
  $on = $_GET['orgname'];
  $eme = $_GET['eme'];
  $ane = $_GET['ane']; //마취
  $hos = $_GET['hos'];
  $chi = $_GET['chi'];
  $old = $_GET['old'];
  $org = $_GET['org'];
  $vip = $_GET['vip'];
  
  if ($eme == NULL){$eme = 0;}
  else {$eme = 1;}
  if ($ane == NULL){$ane = 0;}
  else {$ane = 1;}
  if ($hos == NULL){$hos = 0;}
  else {$hos = 1;}
  if ($chi == NULL){$chi = 0;}
  else {$chi = 1;}
  if ($old == NULL){$old = 0;}
  else {$old = 1;}
  if ($org == NULL){$org = 0;}
  else {$org = 1;}
  if ($vip == NULL){$vip = 0;}
  else {$vip = 1;}


  $p1 = "SELECT 환자번호 FROM 환자 WHERE 이름 = '$pname'";
  $pn = mysqli_query($conn, $p1);
  $d1 = "SELECT 의사번호 FROM 의사 WHERE 의사이름 = '$dname'";
  $dn = mysqli_query($conn, $d1);

  $row1 = mysqli_fetch_array($pn);
  $row2 = mysqli_fetch_array($dn);
 //echo "$row1[의사번호]";

  if($bs == 'in'){
    $query1 = "UPDATE 수술방 SET 빈방여부='N', 환자=$row1[환자번호], 담당의사=$row2[의사번호] WHERE 호실=$rs";
    $query2 = "INSERT INTO 수술중 VALUES(NULL, $row1[환자번호], $row2[의사번호], $rs, $eme, $ane, $hos, $chi, $old, $org, $vip)";
    if($org != NULL & $on != 0){
      $query3 = "UPDATE 장기기증 SET num=num-1 WHERE id=$on";
      $result3 = mysqli_query($conn, $query3);
    }
    $result1 = mysqli_query($conn, $query1);
    $result2 = mysqli_query($conn, $query2);
    $result3 = mysqli_query($conn, $query3);
    echo " <script> location.href='./수술실관리.php'; </script>";
  }
  else {
    $query4 = "UPDATE 수술방 SET 빈방여부='Y', 환자=NULL, 담당의사=NULL WHERE 호실=$rs";
    $query5 = "DELETE from 수술중 WHERE patid=$row1[환자번호] AND docid=$row2[의사번호] AND 수술방=$rs";
    $query6 = "UPDATE 수술실재고 SET num=num-1";
    $result4 = mysqli_query($conn, $query4);
    $result5 = mysqli_query($conn, $query5);
    $result6 = mysqli_query($conn, $query6);
    $roomstock = "SELECT count(*) cntt FROM 수술실재고 WHERE num<10";
    $rst = mysqli_query($conn, $roomstock);
    $row3 = mysqli_fetch_array($rst);
    if($row3['cntt']>0){
      $query7 = "UPDATE 수술실재고 SET outofstock='Y' WHERE num<10";
      $result7 = mysqli_query($conn, $query7);
      echo "<script> location.href='./수술실재고관리.php'; </script>";}
    else echo " <script> location.href='./수술실관리.php'; </script>";
  }
  /*$query = "UPDATE 환자 SET 이름='$n', 연락처='$p', 병명='$s', 담당교수=$dc, 치료날짜='$dt', 수술여부='$sr', 호실=$ro, 비용=$pa, 장기이식필요유무='$o', 특이사항='$r' WHERE 환자번호=$nu";
  echo $query; $query5 = "DELETE from 수술중 WHERE patid=$pn AND docid=$dn AND 수술방=$rs";
  $result = mysqli_query($conn, $query);
  echo " <script> location.href='./환자관리.php'; </script>";
*/
//신장, 간장, 췌장, 심장, 폐, 소장, 췌도, 안구, 골수, 말초혈, 손·팔, 발·다리
//update 수술방 호실 빈방여부 환자 담당의사
//insert 수술중 id | patid | docid | 수술방 | 응급 | 마취 | 입원 | 어린이 | 노인 | 장기이식 | VIP