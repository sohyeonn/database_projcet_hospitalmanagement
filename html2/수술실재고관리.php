<!--2020.06.03 16011164 윤소현-->
<?php
  include './dbconn.php';
  //$cid = $_GET['id']; //main2.php 19번줄
  $test = "SELECT count(num) FROM 수술실재고 WHERE num<1";

  $tresult = mysqli_query($conn, $test);
    
  $row = mysqli_fetch_array($tresult);

 
  print_r($row);

 
  if(print_r($row) != '[0] => 0 [count(num)] => 0'){
      echo "??";
    //echo " <script> location.href='./수술실관리.php'; </script>";
    }
  else{
    $query = "UPDATE 수술실재고 SET outofstock='Y' WHERE num<1";
    $result = mysqli_query($conn, $query);
    echo "ok";
    //echo "<script>alert('재고 부족!');</script>";
    //echo " <script> location.href='./수술실재고.php'; </script>";
  }
  
?>
