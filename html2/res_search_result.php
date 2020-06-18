<!--2020.06.09 김효진-->
<html>
    <head>
        <title>세종병원</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
      <body class="homepage is-preload">
        <div id="page-wrapper">

          <!-- Header -->
            <section id="header">
              <div class="container">

                <!-- Logo -->
                  <h1 id="logo"><a href="Index.html">Hospital Reservation</a></h1>

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
            <section id="features">
              <div class="container">
                <header>
                  <h2><strong>Reservation Search</strong></h2>
                  <?php
                  include './dbconn.php';
                      $search=$_GET['search'];

                      $sql = "select * from 환자 where 환자번호 = '$search'";
                      $result = mysqli_query($conn,$sql);
                      
                      while ($row =mysqli_fetch_array($result)){
                        echo '이름 : '.$row['이름'].'   &nbsp&nbsp&nbsp&nbsp';
                        echo '병명 : '.$row['병명'].'    &nbsp&nbsp&nbsp&nbsp';
                        if($row['담당교수']==1)
                          echo '담당의사 : 김외과    '.'   ';
                        else if($row['담당교수']==2)
                          echo '담당의사 : 이외과    '.'   ';
                        else if($row['담당교수']==3)
                          echo '담당의사 : 박외과    '.'   ';
                        else if($row['담당교수']==4)
                          echo '담당의사 : 최외과    '.'   ';
                        else if($row['담당교수']==5)
                          echo '담당의사 : 강외과    '.'   ';
                        else if($row['담당교수']==6)
                          echo '담당의사 : 김내과    '.'   ';
                        else if($row['담당교수']==7)
                          echo '담당의사 : 이내과    '.'   ';
                        else if($row['담당교수']==8)
                          echo '담당의사 : 박내과    '.'   ';
                        else if($row['담당교수']==9)
                          echo '담당의사 : 최내과    '.'   ';
                        else if($row['담당교수']==10)
                          echo '담당의사 : 김내과    '.'   ';
                        else if($row['담당교수']==11)
                          echo '담당의사 : 장내과    '.'   ';
                        else if($row['담당교수']==12)
                          echo '담당의사 : 윤내과    '.'   ';
                        else if($row['담당교수']==13)
                          echo '담당의사 : 김흉부    '.'   ';
                        else if($row['담당교수']==14)
                          echo '담당의사 : 윤흉부    '.'   ';
                        else if($row['담당교수']==15)
                          echo '담당의사 : 이흉부    '.'   ';
                        else if($row['담당교수']==16)
                          echo '담당의사 : 김정형    '.'   ';
                        else if($row['담당교수']==17)
                          echo '담당의사 : 이정형    '.'   ';
                        else if($row['담당교수']==18)
                          echo '담당의사 : 윤정형    '.'   ';
                        else if($row['담당교수']==19)
                          echo '담당의사 : 진정형    '.'   ';
                        else if($row['담당교수']==20)
                          echo '담당의사 : 김정형    '.'   ';
                        else if($row['담당교수']==21)
                          echo '담당의사 : 김정형    '.'   ';
                        else if($row['담당교수']==22)
                          echo '담당의사 : 김신경    '.'   ';
                        else if($row['담당교수']==23)
                          echo '담당의사 : 김신경    '.'   ';
                        else if($row['담당교수']==24)
                          echo '담당의사 : 이신경    '.'   ';
                        else if($row['담당교수']==25)
                          echo '담당의사 : 강신경    '.'   ';
                        else if($row['담당교수']==26)
                          echo '담당의사 : 김산부    '.'   ';
                        else if($row['담당교수']==27)
                          echo '담당의사 : 김산부    '.'   ';
                        else if($row['담당교수']==28)
                          echo '담당의사 : 양산부    '.'   ';
                        else if($row['담당교수']==29)
                          echo '담당의사 : 김비뇨    '.'   ';
                        else if($row['담당교수']==30)
                          echo '담당의사 : 이비뇨    '.'   ';
                        else if($row['담당교수']==31)
                          echo '담당의사 : 김마취    '.'   ';
                        else if($row['담당교수']==32)
                          echo '담당의사 : 최마취    '.'   ';
                        else if($row['담당교수']==33)
                          echo '담당의사 : 김이비    '.'   ';
                        else if($row['담당교수']==34)
                          echo '담당의사 : 윤이비    '.'   ';
                        else if($row['담당교수']==35)
                          echo '담당의사 : 우이비    '.'   ';
                        else if($row['담당교수']==36)
                          echo '담당의사 : 김=강이비    '.'   ';
                        else if($row['담당교수']==37)
                          echo '담당의사 : 지이비    '.'   ';
                        else if($row['담당교수']==38)
                          echo '담당의사 : 김소아    '.'   ';
                        else if($row['담당교수']==39)
                          echo '담당의사 : 강소아    '.'   ';
                        else if($row['담당교수']==40)
                          echo '담당의사 : 이소아    '.'   ';
                        else if($row['담당교수']==41)
                          echo '담당의사 : 김응급    '.'   ';
                        else if($row['담당교수']==42)
                          echo '담당의사 : 강응급    '.'   ';
                        else if($row['담당교수']==43)
                          echo '담당의사 : 임응급    '.'   ';
                        else if($row['담당교수']==44)
                          echo '담당의사 : 진응급    '.'   ';

                        echo '&nbsp&nbsp&nbsp&nbsp치료날짜 : '.$row['치료날짜'].'    ';
                        echo '&nbsp&nbsp&nbsp&nbsp수술여부 : '.$row['수술여부'].'    ';
                        echo '&nbsp&nbsp&nbsp&nbsp입원실 : '.$row['호실'].'    ';
                        echo '&nbsp&nbsp&nbsp&nbsp비용 : '.$row['비용'].'    ';
                        echo '&nbsp&nbsp&nbsp&nbsp장기이식 : '.$row['장기이식필요여부'].'    ';
                        echo '&nbsp&nbsp&nbsp&nbsp특이사항 : '.$row['특이사항'].'    ';

                        echo '<br>';
                    }
                  ?>
                </header>
                <div class="row aln-center">
                  <div class="col-4 col-6-medium col-12-small">
                  <div class="col-12">
                    <ul class="actions">
                    </ul>
                  </div>
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
