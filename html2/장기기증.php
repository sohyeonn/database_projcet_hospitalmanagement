<!--2020.06.03 16011164 윤소현-->
<?php
  include './dbconn.php';
  //$cid = $_GET['id']; //main2.php 19번줄

  $query = "select * from 장기기증";
  
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
		<title>장기기증</title>
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
										<center>
											
											<form name="frm_content" action="update.php?uid=<? echo $cid; ?>" method="post">
												<table id="myTable" width="800" border="1">
													<tr>
														<th>기증품목이름</th>
														<th>갯수</th>
													</tr>
													<!--<td><a href='content.php?id=$row[id]'>$row[id]</a></td>-->
													<?php
													while ($row = mysqli_fetch_array($result)){
														echo "<tr>				
															<td>$row[name]</td>
															<td>$row[num]</td>
														</tr>";
													  }
													?>  
													<tr>
														<td><input type="button" value="추가" onclick="organs_add()"></td> <!--submit을 사용하기 위해서는 form태그가 필요하다-->
														<!--<td><input type="button" value="사용" onclick="organs_delete()"></td>-->
													</tr>
												</table>
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

function organs_add(){ //장기기증 업데이트
	location.href="./organs_add.php";
}

function rgans_delete(){
    location.href="./organs_delete.php";
}

</script>

<style>
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
</style>