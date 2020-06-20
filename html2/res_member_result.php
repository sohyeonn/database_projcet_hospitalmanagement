
<?
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

		$sql2 = "select * from 환자 where 이름='$name' and 주민번호='$id_num' and 연락처='$phone'";
		$result2 = mysqli_query($mysqli,$sql2);

		$row =mysqli_fetch_array($result2);
		$num=$row["환자번호"];

		echo("<script src=\"http://code.jquery.com/jquery-latest.min.js\"></script>");

	 echo "<script>location.href='res_department.html?num='+$num</script>";
	?>
