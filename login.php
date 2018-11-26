<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="../../style/pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../../style/pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../../style/pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../style/pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="../../style/favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="../../style/style.css" rel="stylesheet" type="text/css" />
    <link href="../../style/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="../../style/assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../../style/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="../../style/assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="../../style/assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="../../style/assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="../../style/pages/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="../../style/pages/css/pages.css" rel="stylesheet" type="text/css" />
    <!--[if lte IE 9]>
        <link href="style/pages/css/ie9.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <style>
    * {
      box-sizing: border-box;
    }
    .hero-image {
      background-image: url("img/header-background.jpg");
      background-color: #cccccc;
      height: 180px;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
      }
      .btn {
        background-color: orange;
        color: black;
        cursor: pointer;
        border-radius:8px;
        width:100px;
        height: 40px;
      }

      .btn:hover {
        background-color: grey;
      }
      .col {
        float: left;
        width: 50%;
        margin: auto;
        padding: 0 50px;
        margin-top: 6px;
      }
      .vl {
        position: absolute;
        left: 50%;
        transform: translate(-50%);
        border: 2px solid #ddd;
        height: 175px;
      }

      /* text inside the vertical line */
      .vl-innertext {
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        background-color: #f1f1f1;
        border: 1px solid #ccc;
        border-radius: 50%;
        padding: 8px 10px;
      }

    </style>
  </head>
  <body class="fixed-header" style="background-color:#e0e6e8;">

    <div class="login-wrapper ">
      <!-- START Login Background Pic Wrapper-->
      <div class="bg-pic">
        <!-- START Background Pic-->
        <div class="hero-image">

        </div>
        <!-- END Background Pic-->
        <!-- START Background Caption-->
        <!-- END Background Caption-->
      </div>
      <!-- END Login Background Pic Wrapper-->
      <!-- START Login Right Container-->
      <div class="login-container row" style="padding-top:70px; text-align:center;">
        <div class="container">
          <?php
                if($_POST) {
                  $email=$_POST['email'];
                  $password=$_POST['password'];
                  $conn=mysqli_connect("localhost","root","","adatoko");
                  $query="SELECT * FROM `toko` where email='$email' and password='$password'";
                  $result = mysqli_query($conn,$query);
                  if(mysqli_num_rows($result)==1) {
                      session_start();
                      $_SESSION['auth'] = 'true';
                      $_SESSION['role'] = 'user';
                      $_SESSION['uname'] = $email;
                      header('location:index.php');
                  }
                  else {
                      $query="SELECT * FROM `anggota` where email='$email'";
                      $result = mysqli_query($conn,$query);
                      if(mysqli_num_rows($result)==1) {
                            echo "<br/><span class='red-color'><b>Wrong password</b></span>";
                      }
                      else {
                          $query="SELECT * FROM `anggota` where password='$password'";
                          $result = mysqli_query($conn,$query);
                          if(mysqli_num_rows($result)==1) {
                                echo "<br/><span class='red-color'><b>Wrong email</b></span>";
                          }
                          else {
                              echo "<br/><span class='red-color'><b>Wrong email and password</b></span>";
                          }
                      }
                  }
                 }
              ?>
          <div class="w3-container w3-white">
            <h2>Sign Into Your Account</h2>
          </div>
          <!-- START Login Form -->
          <form id="form-login" method="POST" class="p-t-15" role="form">
            <!-- START Form Control-->
            <div class="vl">
            <div class="form-group form-group-default">
              <label>Email</label>
              <div class="controls" style="padding-bottom:15px;">
                <input type="text" name="email" placeholder="Email" class="form-control" required>
              </div>
            </div>
            <!-- END Form Control-->
            <!-- START Form Control-->
            <div class="form-group form-group-default">
              <label>Password</label>
              <div class="controls" style="padding-bottom:15px;">
                <input type="password" class="form-control" name="password" placeholder="Credentials" required>
              </div>
            </div>
            <button class="btn btn-primary btn-cons m-t-10 log_in" type="submit" onClick="location.href='index.php'">Login</button>
            <button class="btn btn-primary btn-cons m-t-10 log_in" type="submit" onClick="location.href='signup.php'">Register</button>
          </form>
          <!--END Login Form-->
        </div>
      </div>
      <!-- END Login Right Container-->
    </div>
    <!-- START OVERLAY -->
    <!-- END OVERLAY -->
    <!-- BEGIN VENDOR JS -->
    <script src="../../style/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="../../style/assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="../../style/assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="../../style/assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="../../style/assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../style/assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
    <script src="../../style/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="../../style/assets/plugins/jquery-bez/jquery.bez.min.js"></script>
    <script src="../../style/assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    <script src="../../style/assets/plugins/jquery-actual/jquery.actual.min.js"></script>
    <script src="../../style/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script type="text/javascript" src="../../style/assets/plugins/bootstrap-select2/select2.min.js"></script>
    <script type="text/javascript" src="../../style/assets/plugins/classie/classie.js"></script>
    <script src="../../style/assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
    <script src="../../style/assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <!-- END VENDOR JS -->
    <script src="../../style/pages/js/pages.min.js"></script>
    <script>
    $(function()
    {
      $('#form-login').validate()
    })
    </script>
  </body>
</html>
