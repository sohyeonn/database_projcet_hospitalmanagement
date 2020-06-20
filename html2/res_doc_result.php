<?php
//header("Content-Type: application/json");

		$host = 'localhost';
		$user = 'root';
		$pw = '0000';
		$dbName = 'project';
		$mysqli = new mysqli($host, $user, $pw, $dbName);

		$num=$_GET['num'];

		$doctor =$_GET['doctor'];

		$sql1 = "update 환자 set 담당교수 = $doctor where 환자번호= $num";
		$result1 = mysqli_query($mysqli,$sql1);

		echo "<script>location.href='res_date.html?num='+$num</script>";

?>
