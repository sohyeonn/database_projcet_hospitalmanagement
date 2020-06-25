<!--2020.06.03 16011164 윤소현-->
<?php

  include './dbconn.php';

  $oname = $_GET['orgname'];
  $onum = $_GET['orgnum'];
  //추가할 장기 이름과 갯수를 입력받아 update
    $query = "UPDATE 장기기증 SET num=num+$onum WHERE id=$oname";
    $result = mysqli_query($conn, $query);
  echo " <script> location.href='./장기기증.php'; </script>";
