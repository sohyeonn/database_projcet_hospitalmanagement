<!--2020.65.09 16011164 윤소현-->
<?php
  include './dbconn.php';
  $pid = $_GET["patnum"]; 
  
  $query = "SELECT a.이름, a.연락처, a.병명, b.의사이름, a.치료날짜, a.수술여부, a.호실, a.비용, a.장기이식필요유무, a.특이사항 from 환자 
  as a LEFT OUTER JOIN 의사 as b ON a.담당교수=b.의사번호 where a.환자번호='$pid';";
  
  $result = mysqli_query($conn, $query);

  $query1 = "SELECT 의사번호 FROM 의사 WHERE 의사이름 = '$dc'";
  $r1 = mysqli_query($conn, $query1);
?>
<!DOCTYPE HTML>
<!--
	Strongly Typed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>환자업데이트</title>
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
							<h1 id="logo">환자정보 업그레이드</h1>

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
											
										<form name="frm_content" action="patientupdateok.php?uid=<? echo $cid; ?>" method="GET">
											<table id="myTable" width="800" border="1">
												<tr>
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
												</tr>
												<!--<td><a href='content.php?id=$row[id]'>$row[id]</a></td>-->
												<?php
												while ($row = mysqli_fetch_array($result)){
													echo "<tr>															
													<td><input type='text' name='pat_name' value=$row[이름]></td>
													<td><input type='text' name='pat_phone' value=$row[연락처]></td>
													<td><input type='text' name='pat_sick' value=$row[병명]></td>
													<td><input type='text' name='pat_doc' value=$row[의사이름]></td>
													<td><input type='text' name='pat_date' value=$row[치료날짜]></td>
													<td><input type='text' name='pat_sur' value=$row[수술여부]></td>
                                                    <td><input type='text' name='pat_room' value=$row[호실]></td>
                                                    <td><input type='text' name='pat_pay' value=$row[비용]></td>
													<td><input type='text' name='pat_org' value=$row[장기이식필요유무]></td>
                                                    <td><input type='text' name='pat_ref' value=$row[특이사항]></td>
													<input type='hidden' name='pat_num' value=$pid>
													</tr>";
													}
												?>  
												
													
                                            </table>
                                            <input type="submit" value="완료">
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
			
<!--			<Script>
				function patientupdateok(){
                    <?
                        $query = "update 환자 set  where 환자번호 = '$pid'";
                        mysqli_query($conn, $query);

                        echo " <script> location.href='./main2.php'; </script>";

                    ?>


				}
			</script>
            -->
	</body>
</html>
