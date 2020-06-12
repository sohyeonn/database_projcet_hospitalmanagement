<!--2020.06.03 16011164 윤소현-->
<!--
	해야될것
	1. 환자와 담당의사가 매치되지 않을때 에러 발생
	2. 환자 번호와 의사 번호가 아닌 이름으로
-->
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
		<title>수술실 관리</title>
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
										<li><a class="icon solid fa-retweet" href="#"><span>Patient Management</span></a>
                                    <ul>
										<li><a href="#">환자관리</a>
											<ul>
												<li><a href="환자관리.php">환자관리</a></li>
												<li><a href="이전환자관리.php">이전환자</a></li>
											</ul>
                                        </li>
                                        <li><a href="환자완료.php">환자퇴원</a></li>
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
									
									<header>
										<center><h2>예약가능 수술방</h2></center>
									</header>

								</article>
								<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<?php
										while ($row = mysqli_fetch_array($result1)){
											echo "<tr>															
												<td>$row[호실]호실&nbsp;</label></td>
											</tr>";
											}
									?>  
								</div>
								<header>
										<center><h2>퇴실가능 수술방</h2></center>
								</header>

								</article>
								<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<?php
										while ($row = mysqli_fetch_array($result2)){
											echo "<tr>															
												<td>$row[호실]호실&nbsp;</label></td>
											</tr>";
											}
									?>  
								</div>
								<form action="surgeryroomupdate.php">
									<br>
									<center>
										<input type=text name="patientnum" placeholder="환자 이름"><br>
										<input type=text name="docnum" placeholder="의사 이름"><br>
										<select name="book-select" id="surgery_res">
											<option value="in">예약</option>
											<option value="out">퇴실</option>
										</select>
										<br>
										<select name="room-select" id="surgeryroom_res">
											<option value="1">1번수술방</option>
											<option value="2">2번수술방</option>
											<option value="3">3번수술방</option>
											<option value="4">4번수술방</option>
											<option value="5">5번수술방</option>
											<option value="6">6번수술방</option>
											<option value="7">7번수술방</option>
											<option value="8">8번수술방</option>
											<option value="9">9번수술방</option>
											<option value="10">10번수술방</option>
											<option value="11">11번수술방</option>
											<option value="12">12번수술방</option>
											<option value="13">13번수술방</option>
											<option value="14">14번수술방</option>
											<option value="15">15번수술방</option>
											<option value="16">16번수술방</option>
											<option value="17">17번수술방</option>
											<option value="18">18번수술방</option>
											<option value="19">19번수술방</option>
											<option value="20">20번수술방</option>

										</select><br>
										<select name="orgname" id="surgeryorg">
											<option value="0">장기이식선택안함</option>
											<option value="1">신장</option>
											<option value="2">간장</option>
											<option value="3">췌장</option>
											<option value="4">심장</option>
											<option value="5">폐</option>
											<option value="6">소장</option>
											<option value="7">췌도</option>
											<option value="8">안구</option>
											<option value="9">골수</option>
											<option value="10">말초혈</option>
											<option value="11">손</option>
											<option value="12">팔</option>
											<option value="13">발</option>
											<option value="14">다리</option>
											
										</select>
											<br>
											
										
											<br><br>
											<div>
												<hr><br>
												<h2>특이사항</h2>
												<input type="checkbox" name="eme" id="opt-in">
												<label for="opt-in">응급</label>
												<input type="checkbox" name="ane" id="opt-in2">
												<label for="opt-in2">마취과 필요</label>
												<input type="checkbox" name="hos" id="opt-in3">
												<label for="opt-in3">입원</label>
												<input type="checkbox" name="chi" id="opt-in4">
												<label for="opt-in4">어린이</label>
												<input type="checkbox" name="old" id="opt-in5">
												<label for="opt-in5">노인</label>
												<input type="checkbox" name="org" id="opt-in6">
												<label for="opt-in6">장기이식수술</label>
												<input type="checkbox" name="vip" id="opt-in7">
												<label for="opt-in7">VIP</label>
											</div>
										</center>
											<br><br>
									<p><input type="submit"></p>
								</form>
						

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
