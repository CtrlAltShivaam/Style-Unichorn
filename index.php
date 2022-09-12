<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Scraper Nerds</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/Logo - Black.png" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>

   <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <!-- Container wrapper -->
    <div class="container">
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <!-- Navbar brand -->
        <a class="navbar-brand  mt-2 mt-lg-0 " href="#">
          <img
            src="img/Logo - Black.png"
            height="40"
            alt="MDB Logo"
            loading="lazy"
          />
        </a>
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
            <a class="nav-link" href="src/men.html">Men</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="src/Women.html">Women</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="src/Kids.html">Kids</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="src/contactus.html">Contact us</a>
          </li>
        </ul>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->

      <!-- Right elements -->
      <div class="d-flex align-items-center">
        <a class="btn btn-secondary m-3" href="login.html">
          Login
        </a>
        <!-- Notifications 
        <div class="dropdown">
          <a
            class="link-secondary me-3 dropdown-toggle hidden-arrow"
            href="#"
            id="navbarDropdownMenuLink"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
            <i class="fas fa-bell"></i>
            <span class="badge rounded-pill badge-notification bg-danger">1</span>
          </a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdownMenuLink"
          >
            <li>
              <a class="dropdown-item" href="#">Some news</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Another news</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Something else here</a>
            </li>
          </ul>
        </div> -->
        <!-- Icon -->
        <a class="link-secondary me-3" href="src/cart.html">
          <i class="fas fa-shopping-cart"></i>
        </a>

        <!-- Avatar -->
        <div class="dropdown">
          <a
            class="dropdown-toggle d-flex align-items-center hidden-arrow"
            href="#"
            id="navbarDropdownMenuAvatar"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
            <img
              src="img/no-user"
              class="rounded-circle"
              height="25"
              alt="Black and White Portrait of a Man"
              loading="lazy"
            />
          </a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdownMenuAvatar"
          >
            <li>
              <a class="dropdown-item" href="#">Login to access your account</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">or Signup</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Logout</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
    <!--Navbar ends-->

<!--Carousel-->
  <div id="carouselExampleControls" class="carousel slide" data-mdb-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/unisex.webp" class="d-block w-100" alt="Wild Landscape"/>
      </div>
      <div class="carousel-item">
        <img src="img/men.webp" class="d-block w-100" alt="Camera"/>
      </div>
      <div class="carousel-item">
        <img src="img/unisex.webp" class="d-block w-100" alt="Exotic Fruits"/>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls" data-mdb-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls" data-mdb-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<!--Carousel ends-->

<!--Feature section-->
<section id="feature" class="section-p1">
  <div class="fe-box">
    <img class="imgfea" src="img/Features//f1.png" alt="">
    <h6>Free Shipping</h6>
  </div>
  <div class="fe-box">
    <img class="imgfea" src="img/Features//f2.png" alt="">
    <h6>Online order</h6>
  </div>
  <div class="fe-box">
    <img class="imgfea" src="img/Features//f3.png" alt="">
    <h6>Save Money</h6>
  </div>
  <div class="fe-box">
    <img class="imgfea" src="img/Features//f4.png" alt="">
    <h6>Promotions</h6>
  </div>
  <div class="fe-box">
    <img class="imgfea" src="img/Features//f5.png" alt="">
    <h6>Happy Sell</h6>
  </div>
  <div class="fe-box">
    <img class="imgfea" src="img/Features//f6.png" alt="">
    <h6>24 * 7 Support</h6>
  </div>
</section>
<!--Feature section ends-->
<!--Products-->
<section id="product1" class="section-p1">
  <div class="section-title mt-5">
  <h2>Featured products</h2>
  <div class="back-text">
      Featured
  </div>
  </div>
  <div class="pro-container container">
    <div class="pro" onclick="window.location.href='src/Product page.html';">
      <img src="img/products/f1.jpg" alt="">
      <div class="des">
        <span>adidas</span>
        <h5>Product Name</h5>
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h4> ₹399</h4>
      </div>
      <a href="#"><i class="fa-regular fa-heart addcart"></i></a>
    </div>
    <div class="pro" onclick="window.location.href='src/Product page.html';">
      <img src="img/products/f6.jpg" alt="">
      <div class="des">
        <span>adidas</span>
        <h5>Product Name</h5>
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h4> ₹399</h4>
      </div>
      <a href="#"><i class="fa-regular fa-heart addcart"></i></a>
    </div>
    <div class="pro" onclick="window.location.href='src/Product page2.html';">
      <img src="img/products/dress1.jpg" alt="">
      <div class="des">
        <span>adidas</span>
        <h5>Product Name</h5>
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h4> ₹399</h4>
      </div>
      <a href="#"><i class="fa-regular fa-heart addcart"></i></a>
    </div>
    <div class="pro" onclick="window.location.href='src/Product page.html';">
      <img src="img/products/dress2.jpg"alt="">
      <div class="des">
        <span>adidas</span>
        <h5>Product Name</h5>
        <div class="star">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <h4> ₹399</h4>
      </div>
      <a href="#"><i class="fa-regular fa-heart addcart"></i></a>
    </div>
  </div>
</div>
</section>

<!--cards-->

  <section id="product1" class="section-p1">
    <div class="section-title mt-5">
      <h2>Trending</h2>
      <div class="back-text">
          Trending
      </div>
      </div>
    <div class="pro-container container">
      <div class="pro">
        <img src="img/products/f2.jpg" alt="">
        <div class="des">
          <span>adidas</span>
          <h5>Product Name</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4> ₹399</h4>
        </div>
      <a href="#"><i class="fa-regular fa-heart addcart"></i></a>
      </div>
      <div class="pro">
        <img src="img/products/f6.jpg" alt="">
        <div class="des">
          <span>adidas</span>
          <h5>Product Name</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4> ₹399</h4>
        </div>
      <a href="#"><i class="fa-regular fa-heart addcart"></i></a>
      </div>
      <div class="pro">
        <img src="img/products/f2.jpg" alt="">
        <div class="des">
          <span>adidas</span>
          <h5>Product Name</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4> ₹399</h4>
        </div>
      <a href="#"><i class="fa-regular fa-heart addcart"></i></a>
      </div>
      <div class="pro">
        <img src="img/products/f6.jpg" alt="">
        <div class="des">
          <span>adidas</span>
          <h5>Product Name</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4> ₹399</h4>
        </div>
      <a href="#"><i class="fa-regular fa-heart addcart"></i></a>
      </div>
      <div class="pro">
        <img src="img/products/dress1.jpg" alt="">
        <div class="des">
          <span>adidas</span>
          <h5>Product Name</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4> ₹399</h4>
        </div>
      <a href="#"><i class="fa-regular fa-heart addcart"></i></a>
      </div>
      <div class="pro">
        <img src="img/products/dress2.jpg" alt="">
        <div class="des">
          <span>adidas</span>
          <h5>Product Name</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4> ₹399</h4>
        </div>
      <a href="#"><i class="fa-regular fa-heart addcart"></i></a>
      </div>
      <div class="pro">
        <img src="img/products/dress1.jpg" alt="">
        <div class="des">
          <span>adidas</span>
          <h5>Product Name</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4> ₹399</h4>
        </div>
      <a href="#"><i class="fa-regular fa-heart addcart"></i></a>
      </div>
      <div class="pro">
        <img src="img/products/dress2.jpg" alt="">
        <div class="des">
          <span>adidas</span>
          <h5>Product Name</h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h4> ₹399</h4>
        </div>
      <a href="#"><i class="fa-regular fa-heart addcart"></i></a>
      </div>
    </div>
  </div>
  </section>


<div class="container cards">
  <div class="section-title mt-5">
    <h2>Blogs</h2>
    <div class="back-text">
        Extras
    </div>
    </div>
<div class=" row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="img/men.jpg" class="card-img-top" alt="Skyscrapers"/>
      <div class="card-body">
        <h5 class="card-title">Men</h5>
        <p class="card-text">
          This is a wider card with supporting text below as a natural lead-in to
          additional content. This content is a little bit longer.
        </p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/women.jpg" class="card-img-top" alt="Los Angeles Skyscrapers"/>
      <div class="card-body">
        <h5 class="card-title">Women</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/unisex.jpg" class="card-img-top" alt="Palm Springs Road"/>
      <div class="card-body">
        <h5 class="card-title">Unisex</h5>
        <p class="card-text">
          This is a wider card with supporting text below as a natural lead-in to
          additional content. This card has even longer content than the first to show
          that equal height action.
        </p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  
</div></div>
<!--Cards ends-->




<div class="Features mt-5" style="margin-top: px;margin-bottom: px;padding: 28px 0 25px 0; background-color: rgba(182, 177, 177, 0.596);">
  <div class="container">
    <div class="shop-features">
      <div class="row text-center">
        <div class="col-lg-4">
        <i class="fa-solid fa-truck-fast"></i>
          <div class="content">
            <h2>FREE SHIPPING &amp; RETURN </h2><em></em>
            <p>Free shipping on all orders over Rs. 349.</p>
          </div>
        </div><div class="col-lg-4">
          <i class="fa-solid fa-indian-rupee-sign"></i>
          <div class="content">
            <h2>MONEY BACK GUARANTEE</h2><em></em>
            <p>100% money back guarantee.</p>
          </div>
        </div><div class="col-lg-4">
          <i class="fa-solid fa-lock"></i>
          <div class="content">
            <h2>SECURE PAYMENTS</h2><em>Cards, Netbanking, Wallets, UPI.<p></p></em>
            </div>
        </div><div style="clear: both;"></div>
      </div>
    </div>
  </div>
</div>
<!--Newsletter section
<section id="newsletter" class="section-p1">
  <div class="newstext">
    <h4> Sign up for Newsletter</h4>
    <p>Get Email updates about our latest shop and <span>special offers.</span></p>
  </div>
  <div class="form">
    <input type="text" placeholder="Your email address">
    <button> Sign up </button>
  </div>
</section>-->

<!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted">
  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3 text-secondary"></i>Company name
          </h6>
          <p>
            Here we will find the logo of the company with few details and their opening line.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Men</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Women</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Kids</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Allrounder</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Featured products</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4"><a href="src/contactus.html"> Contact us</a></h6>
          <p><i class="fas fa-home me-3 text-secondary"></i> Barasat, Kolkata</p>
          <p>
            <i class="fas fa-envelope me-3 text-secondary"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3 text-secondary"></i> +91 0000000000</p>
          <p><i class="fas fa-print me-3 text-secondary"></i> +91 0000000000</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->
  <div class="container p-4 pb-0 text-center">
  <section class="mb-4">
    <a href="" class="me-4 link-secondary">
      <i class="fab fa-facebook-f"></i>
    </a>
    <a href="" class="me-4 link-secondary">
      <i class="fab fa-twitter"></i>
    </a>
    <a href="" class="me-4 link-secondary">
      <i class="fab fa-google"></i>
    </a>
    <a href="" class="me-4 link-secondary">
      <i class="fab fa-instagram"></i>
    </a>
    <a href="" class="me-4 link-secondary">
      <i class="fab fa-linkedin"></i>
    </a>
    <a href="" class="me-4 link-secondary">
      <i class="fab fa-github"></i>
    </a>
  </section></div>
  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
    © 2022 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Hackazard.com/Scraper Nerds</a>
  </div>
  <!-- Copyright -->
</footer>
<!--footer ends-->
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
