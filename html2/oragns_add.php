<!--2020.05.26 16011164 윤소현-->
<?php
  include './dbconn.php';
  //$cid = $_GET['id']; //main2.php 19번줄

  $query = "select * from 기증";
  
  $result = mysqli_query($conn, $query);

?>

<!DOCTYPE HTML>
<!--
	Strongly Typed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>장기이식추가</title>
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
							<h1 id="logo">장기기증 관리</h1>

						<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a class="icon solid fa-home" href="index.html"><span>Introduction</span></a>
								<ul>
									<li><a href="doctor.html">의료진 조회</a></li>
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
								<li><a class="icon solid fa-retweet" href="환자관리.php"><span>Patient Management</span></a></li>
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
										
								</article>

						</div>
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


