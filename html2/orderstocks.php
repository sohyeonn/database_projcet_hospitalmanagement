<!--2020.06.03 16011164 윤소현-->
<?php
include './dbconn.php';
    $sid = $_GET["stsname"];
    $query = "UPDATE 수술실재고 SET num=num+50 WHERE name='$sid'";
    $result = mysqli_query($conn, $query);
    echo "<script>window.open('https://search.shopping.naver.com/search/all?where=all&frm=NVSCTAB&query=$sid', '네이버쇼핑');</script>";
    echo "<script>location.href='./수술실재고.php'; </script>";
    
?>
