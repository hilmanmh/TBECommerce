<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>adaToko</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">
    <style>
    .overlay {
      height: 100%;
      width: 100%;
      display: none;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: rgb(0,0,0);
      background-color: rgba(0,0,0, 0.9); /* Black with a little bit see-through */
    }

    /* The content */
    .overlay-content {
      top: 46%;
      width: 80%;
      text-align: center;
      margin-top: 30px;
      margin: auto;
    }

    /* Close button */
    .overlay .closebtn {
      position: absolute;
      top: 20px;
      right: 45px;
      font-size: 60px;
      cursor: pointer;
      color: white;
    }

    .overlay .closebtn:hover {
      color: #ccc;
    }

    /* Style the search field */
    .overlay input[type=text] {
      padding: 10px;
      font-size: 17px;
      border: none;
      float: left;
      width: 80%;
      background: white;
    }

    .overlay input[type=text]:hover {
      background: #f1f1f1;
    }

    /* Style the submit button */
    .overlay button {
      float: left;
      width: 20%;
      padding: 15px;
      background: #ddd;
      font-size: 17px;
      border: none;
      cursor: pointer;
    }

    .overlay button:hover {
      background: #bbb;
    }
    .row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="nearme.php">Near Me</a></li>
                    <li class="active"><a href="cart.php">Cart</a></li>
                </ul>
            </nav>
            <!-- Button Group -->
            <div class="amado-btn-group mt-30 mb-100">
                <a href="#" class="btn amado-btn mb-15">%Discount%</a>
                <a href="#" class="btn amado-btn active">New this week</a>
            </div>
            <!-- Cart Menu -->
            <div class="cart-fav-search mb-100">
                <a href="cart.php" class="cart-nav"><img src="img/core-img/cart.png" alt=""> Cart <span>(0)</span></a>
                <a href="#" class="fav-nav"><img src="img/core-img/favorites.png" alt=""> Favourite</a>
                <a href="#" class="search-nav"><img src="img/core-img/search.png" alt=""> Search</a>
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

        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="cart-title mt-50">
                            <h2>nearmeping Cart</h2>
                        </div>

                        <div class="cart-table clearfix">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="cart_product_img">
                                            <a href="#"><img src="img/bg-img/cart1.jpg" alt="Product"></a>
                                        </td>
                                        <td class="cart_product_desc">
                                            <h5>White Modern Chair</h5>
                                        </td>
                                        <td class="price">
                                            <span>$130</span>
                                        </td>
                                        <td class="qty">
                                            <div class="qty-btn d-flex">
                                                <p>Qty</p>
                                                <div class="quantity">
                                                    <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                    <input type="number" class="qty-text" id="qty" step="1" min="1" max="300" name="quantity" value="1">
                                                    <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cart_product_img">
                                            <a href="#"><img src="img/bg-img/cart2.jpg" alt="Product"></a>
                                        </td>
                                        <td class="cart_product_desc">
                                            <h5>Minimal Plant Pot</h5>
                                        </td>
                                        <td class="price">
                                            <span>$10</span>
                                        </td>
                                        <td class="qty">
                                            <div class="qty-btn d-flex">
                                                <p>Qty</p>
                                                <div class="quantity">
                                                    <span class="qty-minus" onclick="var effect = document.getElementById('qty2'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                    <input type="number" class="qty-text" id="qty2" step="1" min="1" max="300" name="quantity" value="1">
                                                    <span class="qty-plus" onclick="var effect = document.getElementById('qty2'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cart_product_img">
                                            <a href="#"><img src="img/bg-img/cart3.jpg" alt="Product"></a>
                                        </td>
                                        <td class="cart_product_desc">
                                            <h5>Minimal Plant Pot</h5>
                                        </td>
                                        <td class="price">
                                            <span>$10</span>
                                        </td>
                                        <td class="qty">
                                            <div class="qty-btn d-flex">
                                                <p>Qty</p>
                                                <div class="quantity">
                                                    <span class="qty-minus" onclick="var effect = document.getElementById('qty3'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                    <input type="number" class="qty-text" id="qty3" step="1" min="1" max="300" name="quantity" value="1">
                                                    <span class="qty-plus" onclick="var effect = document.getElementById('qty3'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="cart-summary">
                            <h5>Cart Total</h5>
                            <ul class="summary-table">
                                <li><span>subtotal:</span> <span>$140.00</span></li>
                                <li><span>delivery:</span> <span>Free</span></li>
                                <li><span>total:</span> <span>$140.00</span></li>
                            </ul>
                            <div class="cart-btn mt-100">
                              <div id="myOverlay" class="overlay">
                                <span class="closebtn" onclick="closeSearch()" title="Close Overlay">x</span>
                                <div class="overlay-content">
                                    <div class="row">
                                <div class="col-75">
                                  <div class="container">
                                    <form action="/action_page.php">

                                      <div class="row">
                                        <div class="col-50">
                                          <h3>Billing Address</h3>
                                          <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                          <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
                                          <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                          <input type="text" id="email" name="email" placeholder="john@example.com">
                                          <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                                          <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                                          <label for="city"><i class="fa fa-institution"></i> City</label>
                                          <input type="text" id="city" name="city" placeholder="New York">

                                          <div class="row">
                                            <div class="col-50">
                                              <label for="state">State</label>
                                              <input type="text" id="state" name="state" placeholder="NY">
                                            </div>
                                            <div class="col-50">
                                              <label for="zip">Zip</label>
                                              <input type="text" id="zip" name="zip" placeholder="10001">
                                            </div>
                                          </div>
                                        </div>

                                        <div class="col-50">
                                          <h3>Payment</h3>
                                          <label for="fname">Accepted Cards</label>
                                          <div class="icon-container">
                                            <i class="fa fa-cc-visa" style="color:navy;"></i>
                                            <i class="fa fa-cc-amex" style="color:blue;"></i>
                                            <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                            <i class="fa fa-cc-discover" style="color:orange;"></i>
                                          </div>
                                          <label for="cname">Name on Card</label>
                                          <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                                          <label for="ccnum">Credit card number</label>
                                          <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                                          <label for="expmonth">Exp Month</label>
                                          <input type="text" id="expmonth" name="expmonth" placeholder="September">

                                          <div class="row">
                                            <div class="col-50">
                                              <label for="expyear">Exp Year</label>
                                              <input type="text" id="expyear" name="expyear" placeholder="2018">
                                            </div>
                                            <div class="col-50">
                                              <label for="cvv">CVV</label>
                                              <input type="text" id="cvv" name="cvv" placeholder="352">
                                            </div>
                                          </div>
                                        </div>

                                      </div>
                                      <label>
                                        <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                                      </label>
                                      <input type="submit" value="Continue to checkout" class="btn">
                                    </form>
                                  </div>
                                </div>

                                <div class="col-25">
                                  <div class="container">
                                    <h4>Cart
                                      <span class="price" style="color:black">
                                        <i class="fa fa-shopping-cart"></i>
                                        <b>4</b>
                                      </span>
                                    </h4>
                                    <p><a href="#">Product 1</a> <span class="price">$130</span></p>
                                    <p><a href="#">Product 2</a> <span class="price">$10</span></p>
                                    <p><a href="#">Product 3</a> <span class="price">$10</span></p>
                                    <hr>
                                    <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
                                  </div>
                                </div>
                              </div>
                                  </form>
                                </div>
                              </div>
                                <button class="btn amado-btn w-100" onclick="openSearch()">Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <!-- ##### Newsletter Area End ##### -->
    // Open the full screen search box
    <script>
    function openSearch() {
      document.getElementById("myOverlay").style.display = "block";
    }

    // Close the full screen search box
    function closeSearch() {
      document.getElementById("myOverlay").style.display = "none";
    }
    </script>
</body>

</php>
