<?php
    $host = 'localhost';
    $user = 'root';
    $pw = '0000';
    $dbName = 'project';
    $mysqli = new mysqli($host, $user, $pw, $dbName);

    $date=$_GET['date'];
    $num=$_GET['num'];



    echo $date;
    echo $num;

    $sql1 = "update 환자 set 치료날짜='$date' where 환자번호= $num";

  /*  if(mysqli_query($mysqli,$sql1)) {
      echo "okay";
    }
    else {
      echo mysqli_error($mysqli);
    }*/

    echo "<script>confirmtest($num)</script>";

?>
<script>

       function confirmtest(num){

             var confirmflag = confirm("입원을 원하십니까??");
           if(confirmflag){
             location.href='res_room.html?num='+num

           }else{
             location.href='res_payment.html?num='+num
           }
       }
</script>
