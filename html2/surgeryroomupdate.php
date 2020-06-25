<!--2020.06.17 16011164 윤소현-->

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

  if($bs == 'in'){ // 수술실 예약인 경우
    //in할 수술방이 차있는경우
    $test1 = "SELECT count(*) t1 FROM 수술중 WHERE 수술방 = '$rs'";
    $testq1 = mysqli_query($conn, $test1);
    $testrow1 = mysqli_fetch_array($testq1);
    if($testrow1['t1']>0){
      echo '<script> alert("이미 수술실이 사용중입니다!");</script>';
      echo "<script> location.href='./수술실관리.php'; </script>";
    exit;
    }

    //환자 없는 경우
    $test2 = "SELECT count(*) t2 FROM 환자 WHERE 이름 = '$pname'";
    $testq2 = mysqli_query($conn, $test2);
    $testrow2 = mysqli_fetch_array($testq2);
    if($testrow2['t2']==false){
      echo '<script> alert("해당 이름의 환자가 없습니다!");</script>';
      echo "<script> location.href='./수술실관리.php'; </script>";
      exit;
    }

    //의사 없는 경우
    $test3 = "SELECT count(*) t3 FROM 의사 WHERE 의사이름 = '$dname'";
    $testq3 = mysqli_query($conn, $test3);
    $testrow3 = mysqli_fetch_array($testq3);
    if($testrow3['t3']==false){
      echo '<script> alert("해당 이름의 의사가 없습니다!");</script>';
      echo "<script> location.href='./수술실관리.php'; </script>";
      exit;
    }
  
    //환자 수술여부 X
    $test9 = "SELECT count(*) t9 FROM 환자 WHERE 이름 = '$dname' AND 수술여부 = 'N'";
    $testq9 = mysqli_query($conn, $test9);
    $testrow9 = mysqli_fetch_array($testq9);
    if($testrow9['t9']==true){
      echo '<script> alert("해당 환자는 수술하지 않는 환자입니다!");</script>';
      echo "<script> location.href='./수술실관리.php'; </script>";
      exit;
    }

    //의사가 이미 수술하고 있는경우
    $test4 = "SELECT count(*) t4 from 수술중 WHERE docid=(SELECT 의사번호 from 의사 where 의사이름='$dname')";
    $testq4 = mysqli_query($conn, $test4);
    $testrow4 = mysqli_fetch_array($testq4);
    if($testrow4['t4']==true){
      echo '<script> alert("해당 의사는 이미 수술중입니다!");</script>';
      echo "<script> location.href='./수술실관리.php'; </script>";
      exit;
    }

    //환자와 의사가 안맞는경우
    $test5 = "SELECT count(*) t5 from 환자 WHERE 이름='$pname' AND 담당교수=(SELECT 의사번호 from 의사 where 의사이름='$dname')";
    $testq5 = mysqli_query($conn, $test5);
    $testrow5 = mysqli_fetch_array($testq5);
    if($testrow5['t5']==false){
      echo '<script> alert("환자와 담당의사가 일치하지 않습니다!");</script>';
      echo "<script> location.href='./수술실관리.php'; </script>";
      exit;
    }

    //장기이식 옵션 두개 다 선택이 안된경우
    if(($on == 0 && $org == 'on') || ($on == true && $org == NULL)){
      echo '<script> alert("장기를 이식받을 신체를 선택하고 장기이식수술을 체크해주세요!");</script>';
      echo "<script> location.href='./수술실관리.php'; </script>";
      exit;
    }

    //환자가 장기이식 환자가 아닌경우
    if($org == 'on' && $on == true){
      $test6 = "SELECT count(*) t6 from 환자 WHERE 이름='$pname' AND 장기이식필요유무='Y'";
      $testq6 = mysqli_query($conn, $test6);
      $testrow6 = mysqli_fetch_array($testq6);
      if($testrow6['t6']==false){
        echo '<script> alert("해당 환자는 장기이식 환자가 아닙니다!");</script>';
        echo "<script> location.href='./수술실관리.php'; </script>";
        exit;
      }
    }
      //환자가 이미 수술하고 있는경우 - 동일인물때문에안됨
    /*$test4 = "SELECT count(a.이름) t4 from 환자 as a right outer join 수술중 as b on a.환자번호=b.patid where a.이름='$pname' AND ";
    $testq4 = mysqli_query($conn, $test4);
    $testrow4 = mysqli_fetch_array($testq4);
    if($testrow3['t4']==true){
      echo '<script> alert("해당 환자는 이미 수술중입니다!");</script>';
      echo "<script> location.href='./수술실관리.php'; </script>";
    }*/

    
   
  }
  else{ //수술실 퇴실인 경우
    //out할 수술방이 없는 경우
    $test7 = "SELECT count(*) t7 from 수술중 WHERE 수술방=$rs";
    $testq7 = mysqli_query($conn, $test7);
    $testrow7 = mysqli_fetch_array($testq7);
    if($testrow7['t7']==false){
      echo '<script> alert("현재 해당 수술방은 비어있습니다!");</script>';
      echo "<script> location.href='./수술실관리.php'; </script>";
      exit;
    }

    //out할 수술방에 환자와 의사가 안맞는 경우
    $test8 = "SELECT count(*) t8 from 수술중 WHERE patid=(SELECT 환자번호 from 환자 where 이름='$pname') 
    AND docid=(SELECT 의사번호 from 의사 where 의사이름='$dname') AND 수술방=$rs";
    $testq8 = mysqli_query($conn, $test8);
    $testrow8 = mysqli_fetch_array($testq8);
    if($testrow8['t8']==false){
      echo '<script> alert("해당 수술방의 환자와 의사를 한번 더 확인해주세요!");</script>';
      echo "<script> location.href='./수술실관리.php'; </script>";
      exit;
    }
    
  }
  
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
  //환자 이름이 $pname인 환자번호 들고오기
  $pn = mysqli_query($conn, $p1);
  $d1 = "SELECT 의사번호 FROM 의사 WHERE 의사이름 = '$dname'";
  //의사 이름이 $dname인 의사번호 들고오기
  $dn = mysqli_query($conn, $d1);

  $row1 = mysqli_fetch_array($pn);
  $row2 = mysqli_fetch_array($dn);

  if($bs == 'in'){//예약
    $query1 = "UPDATE 수술방 SET 빈방여부='N', 환자=$row1[환자번호], 담당의사=$row2[의사번호] WHERE 호실=$rs";
    //호실이 $rs인 수술방 table에 빈방여부를 N으로 변경하고 환자 정보와 담당의사 정보를 넣기
    $query2 = "INSERT INTO 수술중 VALUES(NULL, $row1[환자번호], $row2[의사번호], $rs, $eme, $ane, $hos, $chi, $old, $on, $vip)";
    //수술중인 환자 정보 넣기 (장기기증, 응급, 어린이 등 )
    if($org != NULL & $on != 0){//만약 장기기증 환자라면
      $query3 = "UPDATE 장기기증 SET num=num-1 WHERE id=$on";
      //해당 장기 갯수 -1
      $result3 = mysqli_query($conn, $query3);
    }
    $result1 = mysqli_query($conn, $query1);
    $result2 = mysqli_query($conn, $query2);
    echo " <script> location.href='./수술실관리.php'; </script>";
  }
  else {//퇴실
    $query4 = "UPDATE 수술방 SET 빈방여부='Y', 환자=NULL, 담당의사=NULL WHERE 호실=$rs";
    //호실이 $rs인 수술방 table의 정보 리셋
    $query5 = "DELETE from 수술중 WHERE patid=$row1[환자번호] AND docid=$row2[의사번호] AND 수술방=$rs";
    //수술중 테이블의 환자 정보 삭제
    $query6 = "UPDATE 수술실재고 SET num=num-1";
    //수술실 재고 -1
    $result4 = mysqli_query($conn, $query4);
    $result5 = mysqli_query($conn, $query5);
    $result6 = mysqli_query($conn, $query6);
    $roomstock = "SELECT count(*) cntt FROM 수술실재고 WHERE num<11";
    //수술실재고에서 10이 넘지않는 재고 count
    $rst = mysqli_query($conn, $roomstock);
    $row3 = mysqli_fetch_array($rst);
    if($row3['cntt']>0){
      $query7 = "UPDATE 수술실재고 SET outofstock='Y' WHERE num<11";
      //재고가 하나라도 10이 넘지 않으면 재고부족을 Y로 변경하고 수술실재고관리페이지로 이동
      $result7 = mysqli_query($conn, $query7);
      echo "<script> location.href='./수술실재고관리.php'; </script>";}
    else echo " <script> location.href='./수술실관리.php'; </script>";
  }

?>
