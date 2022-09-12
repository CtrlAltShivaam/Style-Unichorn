<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Scraper Nerds - cart</title>
    <!-- MDB icon -->
    <link rel="icon" href="../img/Logo - Black.png" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!--Tailwind-->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.2.0/tailwind.min.css'>
    <!-- CSS -->
    <meta name="robots" content="noindex,follow" />
    <link rel="stylesheet" href="../css/mdb.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <!-- Container wrapper -->
      <div class="container nav">
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
          <a class="navbar-brand  mt-2 mt-lg-0 " href="/index.php">
            <img
              src="../img/Logo - Black.png"
              style="height: 40px;"
              alt="Logo"
              loading="lazy"
            />
          </a>
          <!-- Left links -->
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
            <li class="nav-item">
                <a class="nav-link" href="men.php">Men</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Women.php">Women</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Kids.php">Kids</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contactus.php">Contact us</a>
              </li>
          </ul>
          <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->
  
        <!-- Right elements 
        <div class="d-flex align-items-center">
          <a class="btn btn-secondary m-3" href="../Login/login.php">
            Login
          </a>-->
          
          <!-- Icon -->
          <a class="link-secondary me-3" href="../src/cart.php">
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
                src="../img/no-user.png"
                class="rounded-circle"
                style="height: 30px;"
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
    
    <div class="min-h-screen bg-gray-300">
      <div class="container mx-auto p-10 max-w-screen-lg">
        <div class="bg-white rounded shadow p-8">
          <!--  ToastBar  -->
          <div class="w-full bg-orange-200 text-yellow-900 px-4 py-2 flex items-center">
            <img src="https://svgsilh.com/svg/151889.svg" class="w-10 block pr-2">
            <div class="text-sm">Congrats you're eligible for a <b>Coupon Code</b> in this order </div>
          </div>
          <!-- Order Summary  -->
          <div>
            <h3 class="text-xl mt-4 font-bold">Order Summary</h3>
            <!--     BOX     -->
            <div class="border w-full rounded mt-5 flex p-4 justify-between items-center flex-wrap">
              <img src="/img/products/f1.jpg" style=" width:80px" class="">
              <div class="w-2/3">
                <h3 class="text-lg font-medium">Product Name</h3>
                <p class="text-gray-600 text-xs">Sold by <b>Scraper Nerds</b></p>
                <h4 class="text-red-700 text-xs font-bold mt-1">Only 2 left in stock</h4>
              </div>
              <div>
                <h4 class="text-3xl font-medium"><sup class="text-lg text-purple-800">₹</sup> 899</h4>
                <h5 class="text-sm font-bold text-purple-800">60% OFF</h5>
              </div>
              <div class="w-full flex justify-between mt-4">
                <button class="text-red-700 hover:bg-red-100 px-2">DELETE</button>
                <label class="block uppercase tracking-wide text-gray-700" for="grid-first-name">
                  QTY
                  <select class="ml-3 text-sm bg-purple-700 border border-purple-200 text-white p-2 rounded leading-tight" id="grid-state">
                    <option>1</option>
                    <option>2</option>
                  </select>
                </label>
              </div>
            </div>
            <div class="border w-full rounded mt-5 flex p-4 justify-between items-center flex-wrap">
              <img src="/img/products/dress2.jpg" style="width: 80px;" class="">
              <div class="w-2/3">
                <h3 class="text-lg font-medium">Product Name</h3>
                <p class="text-gray-600 text-xs">Sold by <b>Scraper Nerds</b></p>
                <h4 class="text-red-700 text-xs font-bold mt-1">Only 1 left in stock</h4>
              </div>
              <div>
                <h4 class="text-3xl font-medium"><sup class="text-lg text-purple-800">₹</sup> 199</h4>
                <h5 class="text-sm font-bold text-purple-800">40% OFF</h5>
              </div>
              <div class="w-full flex justify-between mt-4">
                <button class="text-red-700 hover:bg-red-100 px-2">DELETE</button>
                <label class="block uppercase tracking-wide text-gray-700" for="grid-first-name">
                  QTY
                  <select class="ml-3 text-sm bg-purple-700 border border-purple-200 text-white p-2 rounded leading-tight" id="grid-state">
                    <option>1</option>
                    <option>2</option>
                  </select>
                </label>
              </div>
            </div>
          </div>
          <button class="px-4 py-4 bg-purple-700 text-white w-full mt-3 rounded shadow font-bold hover:bg-purple-900">PROCEED TO CHECKOUT SCREEN</button>
        </div>
        <div class="flex justify-between mt-8 flex-wrap lg:justify-center">
          <div class="bg-white rounded shadow p-2 w-full lg:w-2/4">
            <div class="w-full bg-orange-200 px-8 py-6">
              <h3 class="text-2xl mt-4 font-bold">Price Breakdown</h3>
              <div class="flex justify-between mt-3">
                <div class="text-xl text-orange-900 font-bold">Amount</div>
                <div class='text-xl text-right font-bold '>₹1098</div>
              </div>
              <div class="flex justify-between mt-3">
                <div class="text-xl text-orange-900 font-bold">VAT (15%)</div>
                <div class='text-xl text-right font-bold'>₹164.7</div>
              </div>
              <div class="bg-orange-300 h-1 w-full mt-3"></div>
              <div class="flex justify-between mt-3">
                <div class="text-xl text-orange-900 font-bold">Total Amount</div>
                <div class="text-2xl text-orange-900 font-bold">₹1262.7</div>
              </div>
              <button class="px-4 py-4 bg-purple-700 text-white w-full mt-3 rounded shadow font-bold hover:bg-purple- 900"> CHECKOUT</button>
            </div>
          </div>
          <div class="bg-white rounded shadow px-10 py-6 w-full mt-4 flex flex-wrap justify-center lg:w-2/4 lg:ml-3">
            <div class="pr-8">
            <h3 class="text-2xl mt-4 font-bold text-purple-900">Thank You, @User</h3>
            <h4 class="text-sm text-gray-600 font-bold">ORDER #5624</h4>
            </div>
            <img src="https://image.flaticon.com/icons/svg/1611/1611768.svg" alt="" class="w-24">
          </div>
        </div>
      </div>
    </div>
        
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
                  <a href="men.php" class="text-reset">Men</a>
                </p>
                <p>
                  <a href="Women.php" class="text-reset">Women</a>
                </p>
                <p>
                  <a href="Kids.php" class="text-reset">Kids</a>
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
                <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
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
          <a class="text-reset fw-bold" href="#">Hackazard.com/Scraper Nerds</a>
        </div>
        <!-- Copyright -->
      </footer>
  </body>
</html>
