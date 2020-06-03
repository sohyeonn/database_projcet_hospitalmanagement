<!--2020.06.03 16011164 윤소현-->
<?php
include './dbconn.php';
$eid = $_GET["stename"];
$query = "UPDATE 기타재고 SET num=num+10 WHERE name='$eid'";
$result = mysqli_query($conn, $query);
echo "<script>window.open('https://search.shopping.naver.com/search/all?where=all&frm=NVSCTAB&query=$eid', '네이버쇼핑');</script>";
echo "<script>location.href='./기타재고.php'; </script>";
?>
