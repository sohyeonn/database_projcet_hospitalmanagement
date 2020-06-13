<!--2020.05.29 16011164 윤소현-->

<!DOCTYPE HTML>
<!--
	Strongly Typed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>환자추가</title>
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
							<h1 id="logo">환자 추가</h1>

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
									<center>
											
										<form name="frm_content" action="patientaddok.php" method="GET">
											
												<input type='text' name='pat_name' placeholder="환자 이름" required><br>
												<input type='text' name='pat_id' placeholder="주민번호" required><br>
												<input type='text' name='pat_phone' placeholder="전화번호" required><br>
												<input type='text' name='pat_pat' placeholder="병명" required><br>
												<input type='text' name='pat_doc' placeholder="담당 의사" required><br>
												<input type='text' name='pat_sur' placeholder="수술 여부" required><br>
												<input type='text' name='pat_room' placeholder="호실"><br>
												<input type='text' name='pat_pay' placeholder="비용" required><br>
												<input type='text' name='pat_org' placeholder="장기이식여부" required><br>
												<input type='text' name='pat_ref' placeholder="특이사항"><br>
                                           
                                            
										<input type="submit" value="submit"> <!--submit을 사용하기 위해서는 form태그가 필요하다-->
											
										</form>
									</center>
									
								</article>

						</div>
					</div>
				</section>

			<!-- Footer -->
				<section id="footer">
					<div class="container">
						<header>
							<h2>Questions or comments? <strong>Get in touch :)</strong></h2>
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