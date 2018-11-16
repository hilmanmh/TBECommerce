<!DOCTYPE html>
<html>
  <head>
    <title>Register Your Own</title>
	<!-- <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script> -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGDPy6HEfhX7WRiwleZ_L8YVg1QyYVoHA&sensor=false" type="text/javascript"></script>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="../../style/pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../../style/pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../../style/pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../style/pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
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
     <script src="../../lib/jquery-3.1.1.min.js" type="text/javascript"></script>
     <style>
     body {
        font-family: Arial, Helvetica, sans-serif;
      }

      * {
        box-sizing: border-box;
      }

      /* style the container */
      .container {
        position: relative;
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px 0 30px 0;
      }

      /* style inputs and link buttons */
      input,
      .btn {
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 4px;
        margin: 5px 0;
        opacity: 0.85;
        display: inline-block;
        font-size: 17px;
        line-height: 20px;
        text-decoration: none; /* remove underline from anchors */
      }

      input:hover,
      .btn:hover {
        opacity: 1;
      }

      .btn-primary{
        background-color: orange;
        width:45%;
        position:relative;
      }

      .btn-primary:hover{
        background-color: grey;
      }

      .div-btn{
        padding-left: 100px;
      }

      /* style the submit button */
      input[type=submit] {
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
      }

      input[type=submit]:hover {
        background-color: #45a049;
      }

      /* Two-column layout */
      .col {
        float: left;
        width: 50%;
        margin: auto;
        padding: 0 50px;
        margin-top: 6px;
      }

      /* Clear floats after the columns */
      .row:after {
        content: "";
        display: table;
        clear: both;
      }

      /* vertical line */
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

      /* hide some text on medium and large screens */
      .hide-md-lg {
        display: none;
      }

      /* bottom container */
      .bottom-container {
        text-align: center;
        background-color: #666;
        border-radius: 0px 0px 4px 4px;
      }

      /* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
      @media screen and (max-width: 650px) {
        .col {
          width: 100%;
          margin-top: 0;
        }
        /* hide the vertical line */
        .vl {
          display: none;
        }
        /* show the hidden text on small screens */
        .hide-md-lg {
          display: block;
          text-align: center;
        }
      }
      </style>
  </head>
    <body class="fixed-header " style="background-color:#e0e6e8;">
    <div class="register-container full-height sm-p-t-30">
      <div class="container-sm-height full-height">
        <div class="row row-sm-height">
          <div class="col-sm-12 col-sm-height col-middle">
            <?php
              if($_POST) {
                  $email=$_POST['email'];
                  $password=$_POST['pass'];
                  $confpassword=$_POST['confpass'];
                  $nama=$_POST['name'];
                  $notelp=$_POST['phone'];
                  $alamat=$_POST['address'];
        				  $k_lat=$_POST['lat'];
        				  $k_long=$_POST['lng'];

                  $conn=mysqli_connect("localhost","root","","adaToko");
                  $query="INSERT INTO `toko` (email, password, namaToko, alamatToko, noTelp, k_lat, k_long) VALUES ('$email', '$password', '$nama', '$alamat', '$notelp', '$k_lat', '$k_long')";

                    if($password==$confpassword) {
                      $_SESSION['message'] = 'Password changed successfully.';
                        if (mysqli_query($conn, $query)) {
                           echo "<script type='text/javascript'>alert('Registrasi Berhasil!')</script>";
                        }
                    }
                  else {
                    echo "<span class='red-color'><b>your password and confirmation password are did not match</b></span>";
                  }

                 }
                ?>

            <form id="form-register" class="p-t-15" role="form" method="POST">

              <div class="row">
                <h2 style="text-align:center; padding-bottom:15px; padding-top:15px;">Register Your Own Store</h2>
                <div class="vl">

                </div>

                <div class="col" style="padding-bottom:25px;">
                  <div class="form-group form-group-default" style="padding-bottom:10px;">
                    <label>Email</label><br>
                    <input type="text" name="email" placeholder="email" class="form-control" required>
                  </div>
                  <div class="form-group form-group-default" style="padding-bottom:10px;">
                    <label>Password</label><br>
                    <input type="password" name="pass" placeholder="password" class="form-control" required>
                  </div>
                  <div class="form-group form-group-default" style="padding-bottom:10px;">
                    <label>Confirm Password</label> <br>
                    <input type="password" name="confpass" placeholder="confirm password" class="form-control" required>
                  </div>
                  <div class="form-group form-group-default"style="padding-bottom:10px;">
                    <label>Nama Toko</label><br>
                    <input type="text" name="name" placeholder="name" class="form-control" required>
                  </div>
                  <div class="form-group form-group-default"style="padding-bottom:10px;">
                    <label>No Telepon</label><br>
                    <input type="text" name="phone" placeholder="phone number" class="form-control" required>
                  </div>
                  <div class="form-group form-group-default" style="padding-bottom:10px;">
                    <label>Alamat Toko</label><br>
                    <input type="text" name="address" placeholder="address" class="form-control" required>
                  </div>
                  <div class="form-group form-group-default" style="padding-bottom:10px;">
                    <label>Latitude</label><br>
                    <input type="text" name='lat' placeholder='lat' id='lat' class="form-control" required>
                  </div>
                  <div class="form-group form-group-default" style="padding-bottom:10px;">
                    <label>Longtitude</label><br>
                    <input type="text" name='lng' placeholder='lng' id='lng' class="form-control" required>
                  </div>
                </div>

                <div class="col">
                  <div class="hide-md-lg">
                    <p>Or sign in manually:</p>
                  </div>

                  <div id="map" style="width:600px;height: 650px;"></div>
                </div>

              </div>
              <div class="div-btn">
              <button class="btn btn-primary btn-cons m-t-10" type="submit">Register</button>
              <button class="btn btn-primary btn-cons m-t-10" onClick="location.href='index.php'" type="submit">Cancel</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

      

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
      $('#form-register').validate()
    })
    </script>
	<script type="text/javascript">
    document.getElementById('reset').onclick= function() {
        var field1= document.getElementById('lng');
 var field2= document.getElementById('lat');
        field1.value= field1.defaultValue;
 field2.value= field2.defaultValue;
    };
</script>
<script type="text/javascript">
     function updateMarkerPosition(latLng) {
  document.getElementById('lat').value = [latLng.lat()];
  document.getElementById('lng').value = [latLng.lng()];
  }

    var myOptions = {
      zoom: 7,
        scaleControl: true,
      center:  new google.maps.LatLng(-6.2103572705384975,106.85128400000008),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };


    var map = new google.maps.Map(document.getElementById("map"),
        myOptions);

 var marker1 = new google.maps.Marker({
 position : new google.maps.LatLng(-6.2103572705384975,106.85128400000008),
 title : 'lokasi',
 map : map,
 draggable : true
 });

 //updateMarkerPosition(latLng);

 google.maps.event.addListener(marker1, 'drag', function() {
  updateMarkerPosition(marker1.getPosition());
 });
</script>

  </body>
</html>
