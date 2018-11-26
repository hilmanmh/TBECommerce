<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>AdaToko</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

    <style>
    .tablink {
        background-color: #2e353e;
        color: white;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 26px;
        font-size: 17px;
        width: 100%;
      }

      .tablink:hover {
        background-color: #777;
      }
      .tabcontent {
          color: white;
          display: none;
          padding: 60px 20px;
          height: 100%;
      }
      .tabbuy {
        background-color: #ffb400;
        color: white;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 26px;
        font-size: 17px;
        width: 20%;
      }
      .tabcontentbuy {
          color: white;
          display: none;
          padding: 60px 20px;
          height: 100%;
      }
      .tabsell {
        background-color: #ffb400;
        color: white;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 26px;
        font-size: 17px;
        width: 16.66%;
      }
      .tabcontentsell {
          color: white;
          display: none;
          padding: 60px 20px;
          height: 100%;
      }
    </style>
</head>

<body>
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="img/core-img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="index.php"><img src="img/core-img/logo.png" alt=""></a>
                <?php
                    // Create connection
                    $conn = mysqli_connect("localhost","root","","adatoko");
                    $query = "select namaToko from toko where email = '".$_SESSION['uname']."'";
                    $result = mysqli_query($conn,$query);
                    if (! $result){
                       throw new My_Db_Exception('Database error: ' . mysql_error());
                    }

                    while($row = $result->fetch_assoc()){
                      echo "<span  class='semi-bold'>Hai " . $row['namaToko'] . "</span>";
                    }
                ?>
            </div>

            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="index.php"><img src="img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="status.php">Our Status</a></li>
					<li><a href="produk.php">Our Product</a></li>
                </ul>
            </nav>
            <!-- Button Group -->
            <div class="amado-btn-group mt-30 mb-100">
                <a href="#" class="btn amado-btn mb-15"></a>
                <a href="signup.php" class="btn amado-btn active"></a>
            </div>
            <!-- Cart Menu -->
            <div class="cart-fav-search mb-100">
                <a href="cart.php" class="cart-nav"><img src="img/core-img/cart.png" alt=""> Cart <span>(0)</span></a>
                <a href="#" class="fav-nav"><img src="img/core-img/favorites.png" alt=""> Favourite</a>
                <a href="#" class="search-nav"><img src="img/core-img/search.png" alt=""> Search</a>
                <a href="status.php" class="status-nav"><img src="img/core-img/bell.png" alt=""> Status</a>
            </div>
            <!-- Social Button -->
            <div class="social-info d-flex justify-content-between">
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </header>
        <!-- Header Area End -->

        <!-- Product Catagories Area Start -->
        <div class="products-catagories-area clearfix">
            <div class="amado-pro-catagory clearfix">

              <div class="content" style="padding-top:30px;">
      <!-- START CONTAINER FLUID -->
         <button class="tablink" onclick="openPage('Sell', this, '#1b1919')" id="defaultOpen">Penjualan</button>
			<?php
				$conn = new mysqli('localhost','root','','adatoko');
			?>
			<?php
			 if (isset($_POST['save'])){
			 $fileName = $_FILES['gbjalan']['name'];
			 $nama = $_POST['nama'];
			 $harga = $_POST['harga'];
			  // Simpan ke Database
			  $produk = "INSERT INTO `produk`(`nama`,`harga`) VALUES ('".$nama."','".$harga."')";
			  $gambar = "INSERT INTO `produk`(`gambar`, `keterangan`) VALUES ('$fileName', '".$_POST['kete']."')";
			  if(mysqli_query($conn,$produk)){
					echo "<script type='text/javascript'>alert('Masukan Produk berhasil!')</script>";
				}
			  if(mysqli_query($conn,$gambar)){
					echo "<script type='text/javascript'>alert('Masukan Gambar berhasil!')</script>";
				} 
			}
			?>
			<form action='produk.php' method="POST">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" name="nama" value="" placeholder="First Name" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" name="harga" value="" placeholder="Last Name" required>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <form method="post" enctype="multipart/form-data">
<td colspan="4">Upload Gambar (Ukuran Maks = 1 MB) : <input type="file" name="gbjalan" required /> | 
 Keterangan : <input type="text" name="kete"  /> | 
<input type="submit" value="Upload" name="save"></td>
</form>
                                    </div>
									</form>
        
          <!-- END PLACE PAGE CONTENT HERE -->
      </div>
            </div>
        </div>
        <!-- Product Catagories Area End -->
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    <!-- ##### Newsletter Area Start ##### -->
    <section class="newsletter-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <!-- Newsletter Text -->
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="newsletter-text mb-100">
                        <h2>Subscribe for a <span>25% Discount</span></h2>
                        <p>Nulla ac convallis lorem, eget euismod nisl. Donec in libero sit amet mi vulputate consectetur. Donec auctor interdum purus, ac finibus massa bibendum nec.</p>
                    </div>
                </div>
                <!-- Newsletter Form -->
                <div class="col-12 col-lg-6 col-xl-5">
                    <div class="newsletter-form mb-100">
                        <form action="#" method="post">
                            <input type="email" name="email" class="nl-email" placeholder="Your E-mail">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

    <script>
      function openPage(pageName,elmnt,color) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
              tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablink");
          for (i = 0; i < tablinks.length; i++) {
              tablinks[i].style.backgroundColor = "";
          }
          document.getElementById(pageName).style.display = "block";
          elmnt.style.backgroundColor = color;
      }
      function openPageSell(pageName,elmnt,color){
        var i, tabcontentsell, tabsell;
          tabcontentsell = document.getElementsByClassName("tabcontentsell");
          for (i = 0; i < tabcontentsell.length; i++) {
              tabcontentsell[i].style.display = "none";
          }
          tabsell = document.getElementsByClassName("tabsell");
          for (i = 0; i < tabsell.length; i++) {
              tabsell[i].style.backgroundColor = "";
          }
          document.getElementById(pageName).style.display = "block";
          elmnt.style.backgroundColor = color;
      }
      document.getElementById("defaultOpen").click();
      document.getElementById("defaultOpenSell").click();
    </script>
</body>

</php>
