<!--2020.06.17 16011164 윤소현-->
<?php
  include './dbconn.php';

  $query = "SELECT a.*, b.이름, b.호실, c.의사이름 from 수술중 as a LEFT OUTER JOIN 
  환자 as b ON a.patid=b.환자번호 LEFT OUTER JOIN 의사 as c ON a.docid=c.의사번호;";
  //수술중인 환자의 정보를 보여주기 위해 수술중 테이블의 전부와
  //환자와 의사 정보가 번호로 되어있기 때문에 이름을 가져오기 위해
  //환자테이블과 의사테이블을 수술중 테이블에 left outer join
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
		<title>수술실 예약현황</title>
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
							<h1 id="logo">수술실 예약 현황</h1>

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
										<li><a href="res_member.html">예약하기</a></li>
										<li><a href="res_search.html">예약 조회</a></li>
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
									

								</article>
								<div>
								<?php
									while ($row = mysqli_fetch_array($result)){
										echo "<tr>	
											<td>$row[수술방] 호실에서 &nbsp</td>		
											<td>$row[의사이름] 의사선생님이 &nbsp</td>			
											<td>환자 $row[이름] 님을 수술중&nbsp&nbsp</td>";
											if($row['응급'] == true){
												echo "<td>응급환자&nbsp&nbsp</td>";
											}
											if($row['마취'] == true){
												echo "<td>마취중&nbsp&nbsp</td>";
											}
											if($row['입원'] == true){
												echo "<td>$row[호실] 병실&nbsp&nbsp</td>";
											}
											if($row['어린이'] == true){
												echo "<td>어린이&nbsp&nbsp</td>";
											}
											if($row['노인'] == true){
												echo "<td>노인&nbsp&nbsp</td>";
											}
											if($row['장기이식'] == true){
												$query1 = "SELECT * from 장기기증 where id=$row[장기이식]";
												$result1 = mysqli_query($conn, $query1);
												$row1 = mysqli_fetch_array($result1);
												echo $row1['name'];
												echo "<td>장기이식수술&nbsp&nbsp</td>";
											}
											if($row['VIP'] == true){
												echo "<td>VIP&nbsp&nbsp</td>";
											}
											echo"환자입니다.<br>                                           
										</tr>";
										}
								?>  

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
