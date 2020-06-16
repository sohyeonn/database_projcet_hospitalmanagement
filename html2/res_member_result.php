<?php
		$host = 'localhost';
		$user = 'root';
		$pw = '0000';
		$dbName = 'project';
		$mysqli = new mysqli($host, $user, $pw, $dbName);

		$name=$_POST['name'];
		$id_num=$_POST['id_num'];
		$phone=$_POST['phone'];

		$sql1 = "insert into 환자 values (0, '$name', $id_num, '$phone', null, null, null, null, null, null, null, null)";
		$result1 = mysqli_query($mysqli,$sql1);

		$sql2 = "select * from 환자 where 이름='$name' and 연락처='$phone'";
		$result2 = mysqli_query($mysqli,$sql2);

		$row =mysqli_fetch_array($result2);
		$num=$row["환자번호"];

		$sql3 = "insert into 예약 values ($num, '$name',NULL, NULL)";
		$result3 = mysqli_query($mysqli,$sql3);

		echo "<script>location.href='res_department.html'</script>";

?>
