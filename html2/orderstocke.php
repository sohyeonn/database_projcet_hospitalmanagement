<!--2020.06.012 16011164 윤소현-->
<?php
include './dbconn.php';
$eid = $_GET["stename"];
$random = mt_rand(1,30);
$query = "UPDATE 기타재고 SET num=num+$random WHERE name='$eid'";
$result = mysqli_query($conn, $query);
echo "<script>window.open('https://search.shopping.naver.com/search/all?where=all&frm=NVSCTAB&query=$eid', '네이버쇼핑');</script>";


$query1 = "UPDATE 기타재고 SET outofstock='N' WHERE num>10";
$result1 = mysqli_query($conn, $query1);
    

echo "<script>location.href='./기타재고.php'; </script>";
?>
