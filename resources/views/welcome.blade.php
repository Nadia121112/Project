<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>e-Hadir</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- =======================================================
        Theme Name: Mentor
        Theme URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
        Author: BootstrapMade.com
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
  <body>
    <!--Navigation bar-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>


        <img src="../img/logo_ukm.jpg" width="50%"/a>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{ url('/login') }}">Login</a></li>
          <li><a href="{{ url('/register') }}">Register</a></li>
          {{-- <li><a href="{{ url('/registersubj') }}">Subjects</a></li>
          <li><a href="{{ url('/attendance') }}">Attendance</a></li>
          <li><a href="{{ url('/registerstudent') }}">Student</a></li> --}}

        </ul>
        </div>
      </div>
    </nav>
    <!--/ Navigation bar-->
    <!--Modal box-->
    <div class="modal fade" id="login" role="dialog">
      <div class="modal-dialog modal-sm">

        <!-- Modal content no 1-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title text-center form-title">Login</h4>
          </div>
          <div class="modal-body padtrbl">

            <div class="login-box-body">
              <p class="login-box-msg">Sign in to start your session</p>
              <div class="form-group">
                <form name="" id="loginForm">
                 <div class="form-group has-feedback"> <!----- username -------------->
                      <input class="form-control" placeholder="Username"  id="loginid" type="text" autocomplete="off" />
            <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span><!---Alredy exists  ! -->
                      <span class="glyphicon glyphicon-user form-control-feedback"></span>
                  </div>
                  <div class="form-group has-feedback"><!----- password -------------->
                      <input class="form-control" placeholder="Password" id="loginpsw" type="password" autocomplete="off" />
            <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span><!---Alredy exists  ! -->
                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>
                  <div class="row">
                      <div class="col-xs-12">
                          <div class="checkbox icheck">
                              <label>
                                <input type="checkbox" id="loginrem" > Remember Me
                              </label>
                          </div>
                      </div>
                      <div class="col-xs-12">
                          <button type="button" class="btn btn-green btn-block btn-flat" onclick="userlogin()">Sign In</button>
                      </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!--/ Modal box-->
    <!--Banner-->

    <div class="banner">
        <div class="container">
          <div class="row">
            <br>
            <br>
          </div>
        </div>
    </div>

    <section id="faculity-member" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Meet Our Faculty Member</h2>
            <p>Faculty of Informtion Science & Technology<br> Guardian of Nation <br>Inspiring Futures, Nurturing Possibilities</p>
            <hr class="bottom-line">
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="pm-staff-profile-container" >
              <div class="pm-staff-profile-image-wrapper text-center">
                <div class="pm-staff-profile-image">
                  <img src="img/dekan.jpg" alt="" class="img-thumbnail img-circle" />
                  <br>
                </div>
              </div>
              <div class="pm-staff-profile-details text-center">
                <p class="pm-staff-profile-name">Prof Dr. Abdullah Mohd Zain</p>
                <p class="pm-staff-profile-title">Dean</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="pm-staff-profile-container" >
              <div class="pm-staff-profile-image-wrapper text-center">
                <div class="pm-staff-profile-image">
                  <img src="img/drrozi.jpg" alt="" class="img-thumbnail img-circle" />
                </div>
              </div>
              <div class="pm-staff-profile-details text-center">
                <p class="pm-staff-profile-name">Assoc. Prof Dr Rozilawati Razali</p>
                <p class="pm-staff-profile-title">Deputy Dean Undergraduate</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="pm-staff-profile-container" >
              <div class="pm-staff-profile-image-wrapper text-center">
                <div class="pm-staff-profile-image">
                    <img src="img/azmi.jpg" alt="" class="img-thumbnail img-circle" />
                </div>
              </div>
              <div class="pm-staff-profile-details text-center">
                <p class="pm-staff-profile-name">Mr Azmi Nasir</p>
                <p class="pm-staff-profile-title">HEAD of ICT Unit</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id ="contact" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Contact Us</h2>
          <br>Faculty of Information Science & Technology, <br>Universiti Kebangsaan Malaysia, 43600 UKM, Bangi Selangor, MALAYSIA<br><br>
 Admission Requirement : Undergraduate: +6 03 - 8921 6789/6183/6787 <br>
 Admission Requirement : Postgraduate: +6 03 - 8921 6812/6184 <br>
 Administration : +6 03 - 8921 6141 <br>
 Fax: +6 03 - 8925 6732 <br>

          </div>




        </div>
      </div>
    </section>
    <!--/ Contact-->
    <!--Footer-->
    <footer id="footer" class="footer">
      <div class="container text-center">

        ©2017 e-Hadir. Faculty of Information Science & Technology
        <div class="credits">

        </div>
      </div>
    </footer>
    <!--/ Footer-->

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>

  </body>
</html>
