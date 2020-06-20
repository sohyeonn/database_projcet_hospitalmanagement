
<?php
		$host = 'localhost';
		$user = 'root';
		$pw = '0000';
		$dbName = 'project';
		$mysqli = new mysqli($host, $user, $pw, $dbName);

		$room=$_GET['room'];
		$num=$_GET['num'];

		$sql1 = "update 환자 set 호실 = $room where 환자번호=$num ";
		$result1 = mysqli_query($mysqli,$sql1);

		echo "<script>location.href='res_payment.html?num='+$num</script>";

?>
