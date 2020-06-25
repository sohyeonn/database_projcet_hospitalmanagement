<!--2020.06.12 16011164 윤소현-->
<?php
  include './dbconn.php';
  //$cid = $_GET['id']; //main2.php 19번줄

  $query = "SELECT * from 기타재고";
  //기타재고 값 뿌려주기 위해 모두 선택
  $result = mysqli_query($conn, $query);

  $query1 = "UPDATE etctest SET cnt=cnt-1";
  //화면이 새로고침될 때 마다 etctest 값 1개 감소
  $result1 = mysqli_query($conn, $query1);

  $query2 = "SELECT * from etctest";
  $result2 = mysqli_query($conn, $query2);
  $r2 = mysqli_fetch_array($result2);
  if($r2['cnt'] < 0){ //etctest값이 10개 감소하면 기타재고 1개 감소 후 etctest는 10개로 업데이트
	$query3 = "UPDATE 기타재고 SET num=num-1";
	$result3 = mysqli_query($conn, $query3);
	$query4 = "UPDATE etctest SET cnt=cnt+10";
 	 $result4 = mysqli_query($conn, $query4);  
  }

  $query5 = "SELECT count(*) cntt FROM 기타재고 WHERE num<10"; //기타재고에서 10개가 넘지않는 재고 count
  $result5 = mysqli_query($conn, $query5);
  $row5 = mysqli_fetch_array($result5);
  if($row5['cntt']>0){//위에서 count한게 1개라도 있으면 재고부족(outofstock) Y로 변경 후 재고부족 alert문 띄어주기
	  $query6 = "UPDATE 기타재고 SET outofstock='Y' WHERE num<11";
	  $result6 = mysqli_query($conn, $query6);
	  echo "<script>alert('재고 부족!');</script>";
  }
?>

<!DOCTYPE HTML>
<!--
	Strongly Typed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>기타재고</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="no-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">
					<div class="container">

						<!-- Logo -->
							<h1 id="logo">기타 재고 관리</h1>

						<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a class="icon solid fa-home" href="index.html"><span>Introduction</span></a>
								<ul>
									<li><a href="doctor_search.html">의료진 조회</a></li>
								</ul>
							</li>

								<li>
										<a href="#" class="icon fa-chart-bar"><span>Reservation</span></a>
								<ul>
								<li><a href="#">예약 관리</a>
								<ul>
									<li><a href="res_department.html">예약하기</a></li>
									<li><a href="searching.html">예약 조회</a></li>
								</ul>
							</li>
								</ul>
							</li>
								<li>
									<a href="#" class="icon solid fa-sitemap"><span>Hospital Management</span></a>
									<ul>
										<li><a href="장기기증.php">장기기증</a></li>
										<li><a href="#">수술실 관리</a>
											<ul>
												<li><a href="수술실예약현황.php">수술실 현황</a></li>
												<li><a href="수술실관리.php">수술실 예약관리</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a class="icon solid fa-retweet" href="#"><span>Patient Management</span></a>
                                    <ul>
										<li><a href="#">환자관리</a>
											<ul>
												<li><a href="환자관리.php">환자관리</a></li>
												<li><a href="이전환자관리.php">이전환자</a></li>
											</ul>
                                        </li>
                                        <li><a href="환자검색및완료.php">환자검색&퇴원</a></li>
									</ul>
                                </li>
								<li><a class="icon solid fa-cog" href="#"><span>
									Inventory Management</span></a>
									<ul>
										<li><a href="수술실재고.php">수술실 재고</a></li>
										<li><a href="병실재고.php">병실 재고</a></li>
										<li><a href="기타재고.php">기타 재고</a></li>
									</ul>
								</li>
							</ul>
						</nav>

					</div>
				</section>

			<!-- Main -->
				<section id="main">
					<div class="container">
						<div id="content">

							<!-- Post -->
								<article class="box post">
								<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name"><br><br>
								
								<center>
											
											<form name="stock_content" action="orderstocke.php" method="GET">			
												<table id="myTable" width="800" border="1">
													<tr>
														<th>이름</th>
														<th>개수</th>
														<th>추가주문필요</th>
														<th>추가주문하기</th>
													</tr>
													<!--<td><a href='content.php?id=$row[id]'>$row[id]</a></td>-->
													<?php
													while ($row = mysqli_fetch_array($result)){
														?><form name="stock_content" action="orderstocke.php" method="GET"><?		
														echo "<tr>			
														<td>$row[name]</td>												
														<td>$row[num]</td>
														<td>$row[outofstock]</td>
														<input type='hidden' name='stename' value=$row[name]>
														<td><input type='submit' value='주문'></td>
													</tr>";?></form><?
														}
													?>  
												</table>											
										</center>

								</article>

						</div>
					</div>
				</section>

			<!-- Footer -->
				<section id="footer">
					<div class="container">
						<header>
							<h2>Questions or comments? <strong>Get in touch:</strong></h2>
						</header>
						<div class="row">
							<div class="col-6 col-12-medium">
								<section>
									<form method="post" action="#">
										<div class="row gtr-50">
											<div class="col-6 col-12-small">
												<input name="name" placeholder="Name" type="text" />
											</div>
											<div class="col-6 col-12-small">
												<input name="email" placeholder="Email" type="text" />
											</div>
											<div class="col-12">
												<textarea name="message" placeholder="Message"></textarea>
											</div>
											<div class="col-12">
												<a href="#" class="form-button-submit button icon solid fa-envelope">Send Message</a>
											</div>
										</div>
									</form>
								</section>
							</div>
							<div class="col-6 col-12-medium">
								<section>
									<div class="row">
										<div class="col-6 col-12-small">
											<ul class="icons">
												<li class="icon solid fa-home">
													209 Neungdong-ro <br />
													Gunja-dong<br /> Gwangjin-gu<br />
													Seoul
												</li>
												<li class="icon solid fa-phone">
													(02) 3408-3114
												</li>
												<li class="icon solid fa-envelope">
													<a href="#">sohyeon@sju.ac.kr</a>
												</li>
											</ul>
										</div>
										<div class="col-6 col-12-small">
											<ul class="icons">
												<li class="icon brands fa-twitter">
													<a href="http://bit.ly/35V7Typ">twitter.com</a>
												</li>
												<li class="icon brands fa-instagram">
													<a href="https://bit.ly/2LmOrB6">instagram.com</a>
												</li>
												<li class="icon brands fa-dribbble">
													<a href="https://bit.ly/2WtueQs">dribbble.com</a>
												</li>
												<li class="icon brands fa-facebook-f">
													<a href="https://bit.ly/2WsTGWf">facebook.com</a>
												</li>
											</ul>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
					<div id="copyright" class="container">
						<ul class="links">
							<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>
				</section>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

  window.setTimeout('window.location.reload()',43200000); //86400000=24시간, 1000= 1초 

</script>
<Style>
#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myInput {
  background-image: url('./images/search.jpg');
  background-size: 25px;
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

</style>
