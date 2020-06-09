<!--2020.06.09 김효진-->
<html>
    <head>
        <title>Strongly Typed by HTML5 UP</title>
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
                    <li><a class="icon solid fa-home" href="index.html"><span>Introduction</span></a></li>
                    <li>
                        <a href="#" class="icon solid fa-cog"><span>Service</span></a>
                    <ul>
                    <li><a href="#">조회</a>
                    <ul>
                      <li><a href="searching.html">예약 조회</a></li>
                      <li><a href="doctor.html">의료진 조회</a></li>
                    </ul>
                  </li>
                    <li><a href="res_department.html">예약하기</a></li>
                    </ul>
                  </li>
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
                    <li><a class="icon solid fa-retweet" href="right-sidebar.html"><span>Right Sidebar</span></a></li>
                    <li><a class="icon solid fa-sitemap" href="no-sidebar.html"><span>No Sidebar</span></a></li>
                  </ul>
                </nav>
              </div>


            </section>
            <section id="features">
              <div class="container">
                <header>
                  <h2><strong>Reservation Search</strong></h2>
                  <?php
                      $host = 'localhost';
                      $user = 'root';
                      $pw = '0000';
                      $dbName = 'project';
                      $mysqli = new mysqli($host, $user, $pw, $dbName);

                      $search=$_GET['search'];

                      $sql = "select * from 환자 where 환자번호 = '$search'";
                      $result = mysqli_query($mysqli,$sql);

                      while ($row =mysqli_fetch_array($result)){
                        echo '이름 : '.$row['이름'].'   ';
                        echo '병명 : '.$row['병명'].'    ';
                        /*if($row['담당교수']=1)
                          echo '담당의사 : 김외과    ';
                        else if($row['담당교수']=15)
                            echo '담당의사 : 이흉부    ';
                        elseif($row['담당교수']=42)
                                echo '담당의사 : 강응급    ';*/
                        echo '담당의사 : '.$row['담당교수'].'    ';
                        echo '치료날짜 : '.$row['치료날짜'].'    ';
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
