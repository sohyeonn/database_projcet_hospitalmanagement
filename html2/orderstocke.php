<!--2020.05.31 16011164 윤소현-->
<?php
    $eid = $_GET["stename"];
    echo "<script>window.open('https://search.shopping.naver.com/search/all?where=all&frm=NVSCTAB&query=$eid', '네이버쇼핑');</script>";
    echo " <script> location.href='./기타재고.php'; </script>";


?>
