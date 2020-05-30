<!--2020.05.31 16011164 윤소현-->
<?php
    $sid = $_GET["stsname"];
    echo "<script>window.open('https://search.shopping.naver.com/search/all?where=all&frm=NVSCTAB&query=$sid', '네이버쇼핑');</script>";
    echo " <script> location.href='./수술실재고.php'; </script>";


?>
