<!--2020.05.31 16011164 윤소현-->
<?php
    $rid = $_GET["strname"];
    echo "<script>window.open('https://search.shopping.naver.com/search/all?where=all&frm=NVSCTAB&query=$rid', '네이버쇼핑');</script>";
    echo " <script> location.href='./병실재고.php'; </script>";


?>
