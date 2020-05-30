<!--2020.05.27 16011164 윤소현-->
<?php
  include './dbconn.php';
  //$cid = $_GET['id']; //main2.php 19번줄

  $query1 = "select * from 수술방 where 빈방여부='Y'";
  
  $result1 = mysqli_query($conn, $query1);

  $query2 = "select * from 수술방 where 빈방여부='N'";
  
  $result2 = mysqli_query($conn, $query2);

?>


<!DOCTYPE HTML>
<!--
	Strongly Typed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<html>

	<head>
		<title>수술방 관리</title>
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
							<h1 id="logo">수술실 예약 관리</h1>

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
												<li><a href="수술실재고.html">수술실 재고</a></li>
												<li><a href="병실재고.html">병실 재고</a></li>
												<li><a href="기타재고.html">기타 재고</a></li>
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
									
									<header>
										<center><h2>예약가능 수술방</h2></center>
									</header>

								</article>
								<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<?php
									while ($row = mysqli_fetch_array($result1)){
										echo "<tr>															
											<td>$row[호실]</label></td>
										</tr>";
										}
								?>  

								<header>
										<center><h2>퇴실가능 수술방</h2></center>
								</header>

								</article>
								<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<?php
									while ($row = mysqli_fetch_array($result2)){
										echo "<tr>															
											<td>$row[호실]</label></td>
										</tr>";
										}
								?>  
								<header>
										<center><h2>수술방을 선택해주세요</h2></center>
								</header>
								<div>&nbsp;&nbsp;&nbsp;
									<input type="radio" name="my-input" id="1">
									<label for="1">1번 수술방</label>
								  &nbsp;
									<input type="radio" name="my-input" id="2">
									<label for="2">2번 수술방</label>
									&nbsp;
									<input type="radio" name="my-input" id="3">
									<label for="3">3번 수술방</label>
								  &nbsp;
									<input type="radio" name="my-input" id="4">
									<label for="4">4번 수술방</label>
									&nbsp;
									<input type="radio" name="my-input" id="5">
									<label for="5">5번 수술방</label>
								  &nbsp;
									<input type="radio" name="my-input" id="6">
									<label for="6">6번 수술방</label>
									&nbsp;
									<input type="radio" name="my-input" id="7">
									<label for="7">7번 수술방</label>
								  &nbsp;
									<input type="radio" name="my-input" id="8">
									<label for="8">8번 수술방</label>
									&nbsp;
									<input type="radio" name="my-input" id="9">
									<label for="9">9번 수술방</label>
								  &nbsp;
									<input type="radio" name="my-input" id="10">
									<label for="10">10번 수술방</label>
									&nbsp;
									<br><br>
									<input type="radio" name="my-input" id="11">
									<label for="11">11번 수술방</label>
								  &nbsp;
									<input type="radio" name="my-input" id="12">
									<label for="12">12번 수술방</label>
									&nbsp;
									<input type="radio" name="my-input" id="13">
									<label for="13">13번 수술방</label>
								  &nbsp;
									<input type="radio" name="my-input" id="14">
									<label for="14">14번 수술방</label>
									&nbsp;
									<input type="radio" name="my-input" id="15">
									<label for="15">15번 수술방</label>
								  &nbsp;
									<input type="radio" name="my-input" id="16">
									<label for="16">16번 수술방</label>
									&nbsp;
									<input type="radio" name="my-input" id="17">
									<label for="17">17번 수술방</label>
								  &nbsp;
									<input type="radio" name="my-input" id="18">
									<label for="18">18번 수술방</label>
									&nbsp;
									<input type="radio" name="my-input" id="19">
									<label for="19">19번 수술방</label>
								  &nbsp;
									<input type="radio" name="my-input" id="20">
									<label for="20">20번 수술방</label>
									&nbsp;
									<br><br>
								  </div>

								  <div>
									  <hr><br>
									  <center><h2>특이사항</h2>
									<input type="checkbox" name="my-checkbox" id="opt-in">&nbsp;&nbsp;
									<label for="opt-in">응급</label>
									<input type="checkbox" name="my-checkbox" id="opt-in2">&nbsp;&nbsp;
									<label for="opt-in2">마취과 필요</label>
									<input type="checkbox" name="my-checkbox" id="opt-in3">&nbsp;&nbsp;
									<label for="opt-in3">입원</label>
									<input type="checkbox" name="my-checkbox" id="opt-in4">&nbsp;&nbsp;
									<label for="opt-in4">어린이</label>
									<input type="checkbox" name="my-checkbox" id="opt-in5">&nbsp;&nbsp;
									<label for="opt-in5">노인</label>
									<input type="checkbox" name="my-checkbox" id="opt-in6">&nbsp;&nbsp;
									<label for="opt-in6">장기이식수술</label>
									<input type="checkbox" name="my-checkbox" id="opt-in7">&nbsp;&nbsp;
									<label for="opt-in7">VIP</label>
								</center>
									<br><br>
									
								  </div>
								  <hr><br>
								<center>
								  <select name="my-select" id="surgery_res">
									<option value="opt1">예약</option>
									<option value="opt2">퇴실</option>
								  </select>
								  
								  &nbsp;&nbsp;
								  <input type=text placeholder="환자번호">
								<br><br>
								<p><input type="button" id="surgery_button" onclick="button1_click();" value="submit"/></p>
							</center>

									<script>
									function button1_click() {
										alert("complete!");
									}
									</script>
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
