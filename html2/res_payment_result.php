
<?
		$host = 'localhost';
		$user = 'root';
		$pw = '0000';
		$dbName = 'project';
		$mysqli = new mysqli($host, $user, $pw, $dbName);

		$amount=$_GET['amount'];
		$num=$_GET['num'];

		$sql1 = "update 환자 set 비용 = $amount where 환자번호=$num ";
		$result1 = mysqli_query($mysqli,$sql1);

		echo "<script>location.href='index.html'</script>";
	?>
