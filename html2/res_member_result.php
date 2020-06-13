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

		echo "<script>location.href='res_department.html'</script>";

?>
