<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Scraper Nerds</title>
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
    <!-- CSS -->
    <link rel="stylesheet" href="../css/mdb.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <!-- Container wrapper -->
      <div class="container nav p-3">
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
          <a class="navbar-brand  mt-2 mt-lg-0 " href="../index.php">
            <img
              src="../img/Logo - Black.png"
              height="40"
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
                <a class="nav-link" href="contactus.php">Contact us⮰</a>
              </li>
          </ul>
          <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->
  
        <!-- Right elements -->
        <div class="d-flex align-items-center">
          <!--<a class="btn btn-secondary m-3" href="../Login/login.php">
            Login
          </a>-->
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
            >
              <img
                src="../img/no-user.png"
                class="rounded-circle"
                height="30"
                alt="Black and White Portrait of a Man"
                loading="lazy"
              />
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
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
    <div class="section-title mt-5">
        <h2>Contact</h2>
        <div class="back-text">
            Contact US
        </div>
    </div>


    <div class="contain">

            <div class="wrapper">
          
              <div class="form">
                <h4>GET IN TOUCH</h4>
                <h2 class="form-headline">Send us a message</h2>
                <form id="submit-form" action="">
                  <p>
                    <input id="name" class="form-input" type="text" placeholder="Your Name*" required>
                    <small class="name-error"></small>
                  </p>
                  <p>
                    <input id="email" class="form-input" type="email" placeholder="Your Email*" required>
                    <small class="name-error"></small>
                  </p>
                  <p class="full-width">
                    <input id="company-name" class="form-input" type="text" placeholder="Your Phone Number*" required>
                    <small></small>
                  </p>
                  <p class="full-width">
                    <textarea  minlength="20" id="message" cols="30" rows="7" placeholder="Your Message*" required></textarea>
                    <small></small>
                  </p>
                  <p class="full-width">
                    <input type="checkbox" id="checkbox" name="checkbox" checked> Yes, I would like to receive communications by call / email about Company's services.
                  </p>
                  <p class="full-width">
                    <input type="submit" class="submit-btn" value="Submit" onclick="checkValidations()">
                    <button class="reset-btn" onclick="reset()">Reset</button>
                  </p>
                </form>
              </div>
          
              <div class="contacts contact-wrapper">
          
                <ul>
                  <li>We've driven online revenues of over <span class="highlight-text-grey">$2
                      billion</span> for our clients. Ready to know
                    how we can help you?</li>
                  <span class="hightlight-contact-info">
                    <li class="email-info"><i class="fa fa-envelope" aria-hidden="true"></i> info@demo.com</li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i> <span class="highlight-text">+91 11 1111 2900</span></li>
                  </span>
                </ul>
              </div>
            </div>
        </div>
        <style>/* color:  red#ec1c24, black#212d31, grey#343a40, white#eee  */
            * {
              box-sizing: border-box;
            }
            
            body {
              padding: 1rem;
              color: #212d31;
              font-family: 'Roboto', sans-serif;
            }
            
            .contain {
              background-color: #fff;
              max-width: 1170px;
              margin-left: auto;
              margin-right: auto;
              padding: 1em;
            }
            
            div.form {
              background-color: #fff;
            }
            .contact-wrapper {
              margin: auto 0;
            }
            
            .submit-btn {
              float: left;
            }
            .reset-btn {
              float: right;
            }
            
            .form-headline:after {
              content: "";
              display: block;
              width: 10%;
              padding-top: 10px;
              border-bottom: 3px solid #ec1c24;
            }
            
            .highlight-text {
              color: #ec1c24;
            }
            
            .hightlight-contact-info {
              font-weight: 700;
              font-size: 22px;
              line-height: 1.5;
            }
            
            .highlight-text-grey {
              font-weight: 500;
            }
            
            .email-info {
                margin-top: 20px;
            }
            
            ::-webkit-input-placeholder { /* Chrome */
              font-family: 'Roboto', sans-serif;
            }
            
            .required-input {
              color: black;
            }
            @media (min-width: 600px) {
              .contain {
                padding: 0;
              }
            }
            
            h3,
            ul {
              margin: 0;
            }
            
            h3 {
              margin-bottom: 1rem;
            }
            
            .form-input:focus,
            textarea:focus{
              outline: 1.5px solid #ec1c24;
            }
            
            .form-input,
            textarea {
              width: 100%;
              border: 1px solid #bdbdbd;
              border-radius: 5px;
            }
            
            .wrapper > * {
              padding: 1em;
            }
            @media (min-width: 700px) {
              .wrapper {
                display: grid;
                grid-template-columns: 2fr 1fr;
              }
              .wrapper > * {
                padding: 2em 2em;
              }
            }
            
            ul {
              list-style: none;
              padding: 0;
            }
            
            .contacts {
              color: #212d31;
            }
            
            .form {
              background: #fff;
            }
            
            form {
              display: grid;
              grid-template-columns: 1fr 1fr;
              grid-gap: 20px;
            }
            form label {
              display: block;
            }
            form p {
              margin: 0;
            }
            
            .full-width {
              grid-column: 1 / 3;
            }
            
            button,
            .submit-btn,
            .form-input,
            textarea {
              padding: 1em;
            }
            
            button, .submit-btn {
              background: transparent;
              border: 1px solid #ec1c24;
              color: #ec1c24;
              border-radius: 15px;
              padding: 5px 20px;
              text-transform: uppercase;
            }
            button:hover, .submit-btn:hover,
            button:focus , .submit-btn:focus{
              background: #ec1c24;
              outline: 0;
              color: #eee;
            }
            .error {
              color: #ec1c24;
            }
            
        </style>
    <script>
    const nameEl = document.querySelector("#name");
    const emailEl = document.querySelector("#email");
    const companyNameEl = document.querySelector("#company-name");
    const messageEl = document.querySelector("#message");
    
    const form = document.querySelector("#submit-form");
    
    function checkValidations() {
      let letters = /^[a-zA-Z\s]*$/;
      const name = nameEl.value.trim();
      const email = emailEl.value.trim();
      const companyName = companyNameEl.value.trim();
      const message = messageEl.value.trim();
      if (name === "") {
         document.querySelector(".name-error").classList.add("error");
          document.querySelector(".name-error").innerText =
            "Please fill out this field!";
      } else {
        if (!letters.test(name)) {
          document.querySelector(".name-error").classList.add("error");
          document.querySelector(".name-error").innerText =
            "Please enter only characters!";
        } else {
          
        }
      }
      if (email === "") {
         document.querySelector(".name-error").classList.add("error");
          document.querySelector(".name-error").innerText =
            "Please fill out this field!";
      } else {
        if (!letters.test(name)) {
          document.querySelector(".name-error").classList.add("error");
          document.querySelector(".name-error").innerText =
            "Please enter only characters!";
        } else {
          
        }
      }
    }
    
    function reset() {
      nameEl = "";
      emailEl = "";
      companyNameEl = "";
      messageEl = "";
      document.querySelector(".name-error").innerText = "";
    }
    </script>
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
                <a href="/index.php" class="text-reset">Allrounder</a>
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
      </div>
      <!-- Copyright -->
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
        
        © 2022 Copyright:
        <a class="text-reset fw-bold" href="@">Hackazard.com/Scraper Nerds</a>
      </div>
      <!-- Copyright -->
    </footer>
  </body>
</html>
