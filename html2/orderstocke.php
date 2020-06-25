<!--2020.06.012 16011164 윤소현-->
<?php
include './dbconn.php';
$eid = $_GET["stename"];
$random = mt_rand(1,30);
$query = "UPDATE 기타재고 SET num=num+$random WHERE name='$eid'";
//재고페이지에서 주문 버튼을 눌렀을 때 랜덤값으로 개수 값이 올라가고
//해당 재고 이름이 들어간 네이버쇼핑 화면 open
$result = mysqli_query($conn, $query);
echo "<script>window.open('https://search.shopping.naver.com/search/all?where=all&frm=NVSCTAB&query=$eid', '네이버쇼핑');</script>";


$query1 = "UPDATE 기타재고 SET outofstock='N' WHERE num>10";
$result1 = mysqli_query($conn, $query1);
//랜덤값으로 올라간 재고 개수가 10개가 넘어가면 재고부족(outofstock)값이 N이 됨

echo "<script>location.href='./기타재고.php'; </script>";
?>
