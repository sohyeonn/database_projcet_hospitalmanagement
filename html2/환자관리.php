<!--2020.05.28 16011164 윤소현-->
<?php
  include './dbconn.php';
  //$cid = $_GET['id']; //main2.php 19번줄

  $query = "select * from 환자";
  
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
		<title>No Sidebar - Strongly Typed by HTML5 UP</title>
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
							<h1 id="logo">환자 관리</h1>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li><a class="icon solid fa-home" href="index.html"><span>Introduction</span></a></li>
									<li>
										<a href="#" class="icon fa-chart-bar"><span>Hospital Management</span></a>
										<ul>
											<li><a href="수술실관리.html">수술실 관리</a></li>
											<li><a href="장기기증.html">장기기증</a></li>
											<li>
												<a href="#">재고관리</a>
												<ul>
													<li><a href="수술실재고.html">수술실 재고</a></li>
													<li><a href="병실재고.html">병실 재고</a></li>
													<li><a href="기타재고.html">기타 재고</a></li>
												</ul>
											</li>
											<li><a href="환자관리.html">환자 관리</a></li>
										</ul>
									</li>
									<li><a class="icon solid fa-cog" href="left-sidebar.html"><span>Left Sidebar</span></a></li>
									<li><a class="icon solid fa-retweet" href="right-sidebar.html"><span>Right Sidebar</span></a></li>
									<li><a class="icon solid fa-sitemap" href="no-sidebar.html"><span>No Sidebar</span></a></li>
								</ul>
							</nav>

					</div>
				</section>

			<!-- Main -->
				<section id="main">
					
							<!-- Post -->
								<article class="box post">

								<input type="button" value="추가" onclick="patientadd()"> <!--submit을 사용하기 위해서는 form태그가 필요하다-->
										
									<center>
											
										<form name="frm_content" action="patientupdate.php" method="GET">			
											<table id="myTable" width="800" border="1">
												<tr>
													<th>환자번호</th>
													<th>이름</th>
													<th>연락처</th>
													<th>병명</th>
													<th>담당교수</th>
													<th>치료날짜</th>
													<th>수술여부</th>
													<th>호실</th>
													<th>비용</th>
													<th>장기이식</th>
													<th>특이사항</th>
													<th>관리</th>
												</tr>
												<!--<td><a href='content.php?id=$row[id]'>$row[id]</a></td>-->
												<?php
												while ($row = mysqli_fetch_array($result)){?>
													<form name="frm_content" action="patientupdate.php" method="GET"><?		
													echo "<tr>			
													<td>$row[환자번호]</td>												
													<td>$row[이름]</td>
													<td>$row[연락처]</td>
													<td>$row[병명]</td>
													<td>$row[담당교수]</td>
													<td>$row[치료날짜]</td>
													<td>$row[수술여부]</td>
													<td>$row[호실]</td>
													<td>$row[비용]</td>
													<td>$row[장기이식필요유무]</td>
													<td>$row[특이사항]</td>
													<input type='hidden' name='patnum' value=$row[환자번호]>
													<td><input type='submit'><td>
												</tr>";?></form><?
													}
												?>  
											</table>
										
									</center>
									
								</article>
					
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
			
			<Script>
				function patientadd(){ //장기기증 업데이트
					location.href="./patientadd.php";
				}

				function patientupdate(){
					location.href="./patientupdate.php";
				}
			</script>

	</body>
</html>