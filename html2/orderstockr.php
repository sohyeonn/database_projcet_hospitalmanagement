<!--2020.06.03 16011164 윤소현-->
<?php
    include './dbconn.php';
    $rid = $_GET["strname"];
    $query = "UPDATE 병실재고 SET num=num+20 WHERE name='$rid'";
    $result = mysqli_query($conn, $query);
    echo "<script>window.open('https://search.shopping.naver.com/search/all?where=all&frm=NVSCTAB&query=$rid', '네이버쇼핑');</script>";
    echo " <script> location.href='./병실재고.php'; </script>";
?>
