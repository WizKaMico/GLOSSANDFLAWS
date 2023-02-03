<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GLOSS & FLOSS</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;800&family=Roboto:wght@400;500;600&display=swap"
    rel="stylesheet">
<script src="js/city.js"></script> 
    <script>  
window.onload = function() {  

  // ---------------
  // basic usage
  // ---------------
  var $ = new City();
  $.showProvinces("#province");
  $.showCities("#city");

  // ------------------
  // additional methods 
  // -------------------

  // will return all provinces 
  console.log($.getProvinces());
  
  // will return all cities 
  console.log($.getAllCities());
  
  // will return all cities under specific province (e.g Batangas)
  console.log($.getCities("Batangas")); 
  
}
</script>
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header">

    <div class="header-top" style="background-color:#099688;">
      <div class="container">

        <ul class="contact-list">

          <li class="contact-item">
            <ion-icon name="mail-outline" style="color:white;"></ion-icon>

            <a href="mailto:mula.macecilia@gmail.com" class="contact-link">mula.macecilia@gmail.com</a>
          </li>

          <li class="contact-item">
            <ion-icon name="call-outline" style="color:white;"></ion-icon>

            <a href="tel:+639171004798" class="contact-link">+639171-004-798</a>
          </li>

        </ul>

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

        </ul>

      </div>
    </div>

    <div class="header-bottom" data-header>
      <div class="container">

     

      <a href="#" class="logo" style="color:#099688;">GLOSS AND FLOSS</a>


        <nav class="navbar container" data-navbar>
          <ul class="navbar-list">

            <li>
              <a href="#home" class="navbar-link" data-nav-link>Home</a>
            </li>

            <li>
              <a href="#service" class="navbar-link" data-nav-link>Services</a>
            </li>

            <li>
              <a href="#blog" class="navbar-link" data-nav-link>Shop</a>
            </li>

            <li>
              <a href="#register" class="navbar-link" data-nav-link>Register</a>
            </li>

             <li>
              <a href="?login=<?php echo 'LOGIN'; ?>#login" class="navbar-link" data-nav-link>Login</a>
            </li>

            


          </ul>
        </nav>

      

        <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
          <ion-icon name="menu-sharp" aria-hidden="true" class="menu-icon"></ion-icon>
          <ion-icon name="close-sharp" aria-hidden="true" class="close-icon"></ion-icon>
        </button>

      </div>
    </div>

  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" id="home" style="background-image: url('./assets/images/hero-bg.png')"
        aria-label="hero">
        <div class="container">

          <div class="hero-content">

            <p class="section-subtitle"><img src="logo/logo.png" style="width:50%; height:auto;"></p>

            <h1 class="h1 hero-title">We Are Best Dental Service</h1>

            <p class="hero-text">
              A smile is the prettiest thing you'll ever wear
            </p>

            

          </div>

          <figure class="hero-banner">
            <img src="./assets/images/hero-banner.png" width="587" height="839" alt="hero banner" class="w-100">
          </figure>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service" id="service" aria-label="service">
        <div class="container">

          <p class="section-subtitle text-center">Our Services</p>

          <h2 class="h2 section-title text-center">What We Provide</h2>

          <ul class="service-list">
           <?php
              include_once('connection/connection.php');
              $sql = "SELECT * FROM `services` LEFT JOIN service_category ON services.service_type = service_category.service_type";

              //use for MySQLi-OOP
              $query = $conn->query($sql);
              while($row = $query->fetch_assoc()){
              ?> 
            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="./assets/images/service-icon-1.png" width="100" height="100" loading="lazy"
                    alt="service icon" class="w-100">
                </div>

                <div>
                  <h3 class="h3 card-title"><?php echo strtoupper($row['service_name']); ?></h3>

                  <p class="card-text">
                    <?php echo strtoupper($row['service_desc']); ?>
                  </p>
                </div>

              </div>
            </li>
          <?php } ?>

           

            <li class="service-banner">
              <figure>
                <img src="./assets/images/service-banner.png" width="409" height="467" loading="lazy"
                  alt="service banner" class="w-100">
              </figure>
            </li>

            

          </ul>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="register" aria-label="about">
        <div class="container">

          <figure class="about-banner">
            <img src="./assets/images/about-banner.png" width="470" height="538" loading="lazy" alt="about banner"
              class="w-100">
          </figure>

          <div class="about-content">

            <p class="section-subtitle">REGISTER NOW</p>

            <h2 class="h2 section-title">We Care For Your Dental Health</h2>

            <?php if(!empty($_GET['view'])){ ?>

              <?php 

              include('connection/connection.php');
              $code = $_GET['view'];
              $result=mysqli_query($conn, "select * from patient where code='$code'");
              $row=mysqli_fetch_array($result);  

              ?>
              
            <?php if(empty($_GET['response']) || $_GET['response'] == 'ERR'){ ?>
             <p class="section-subtitle">Hi! <?php echo strtoupper($row['fullname']); ?></p> 

            <form action="action/verify.php" method="POST" class="hero-form">
              

                <input type="number" name="ecode" aria-label="email" placeholder="Enter the code" required
                class="email-field">

                <input type="submit" class="card-badge" name="verify" style="margin-top:15px;"  value="VERIFY">
            </form>
            <?php } else { ?>
             <p class="section-subtitle">Hi! <?php echo strtoupper($row['fullname']); ?>, you may login</p> 

            <form action="action/login.php" method="POST" class="hero-form">
                  
                <input type="email" name="email" aria-label="email" placeholder="Enter Email" required
                class="email-field" style="margin-top:10px;" >  

                <input type="hidden" name="code" value="<?php echo $row['code']; ?>">

                <input type="password" name="password" aria-label="email" placeholder="Enter Password" style="margin-top:10px;"  required
                class="email-field">

                <input type="submit" class="card-badge" name="login" style="margin-top:15px;"  value="LOGIN">
            </form>    


            <?php } ?>  

             <?php } else { ?>

             <form action="action/register.php" method="POST" class="hero-form">
              

                <input type="text" name="fullname" aria-label="email" placeholder="Your Fullname..." required
                class="email-field">

                <input type="email" name="email" aria-label="email" placeholder="Your Email Address..." required
                class="email-field" style="margin-top:10px;">

              <input type="password" name="password" aria-label="email" placeholder="Your Password..." required
                class="email-field" style="margin-top:10px;">

                <input type="number" name="contact" aria-label="email" placeholder="Your Contact..." required
                class="email-field" style="margin-top:10px;">

                <input type="text" name="address" aria-label="email" placeholder="Your Address..." required
                class="email-field" style="margin-top:10px;">

                <select id="province" name="region" aria-label="email" class="email-field" style="margin-top:10px; width:100%; border:none;" required></select>

                <select id="city" aria-label="email" name="city" class="email-field" style="margin-top:10px; width:100%; border:none;" required></select> 

                <input type="submit" class="card-badge" name="register" style="margin-top:15px;"  value="REGISTER">
            
             </form>

             <?php } ?>   

          </div>

        </div>
      </section>



      <section class="section about" id="login" aria-label="about">
        <?php if(!empty($_GET['login'])){ ?>
        <div class="container">

          <figure class="about-banner">
            <img src="./assets/images/about-banner.png" width="470" height="538" loading="lazy" alt="about banner"
              class="w-100">
          </figure>

          <div class="about-content">

            <p class="section-subtitle">LOGIN NOW</p>

            <h2 class="h2 section-title">We Care For Your Dental Health</h2>

           
          
             <p class="section-subtitle"></p> 

            <form action="action/login.php" method="POST" class="hero-form">
                  
                <input type="email" name="email" aria-label="email" placeholder="Enter Email" required
                class="email-field" style="margin-top:10px;" >  

                <input type="hidden" name="code" value="<?php echo $row['code']; ?>">

                <input type="password" name="password" aria-label="email" placeholder="Enter Password" style="margin-top:10px;"  required
                class="email-field">

                <input type="submit" class="card-badge" name="login" style="margin-top:15px;"  value="LOGIN">
            </form>    


           

          </div>

        </div>
      <?php } else {  ?>
       <div class="container">


       </div>
      <?php } ?>
      </section>




 




      <!-- 
        - #CTA
      -->

      <section class="section cta" aria-label="cta">
        <div class="container">

          


        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog" id="blog" aria-label="blog">
        <div class="container">

          <p class="section-subtitle text-center">Our Shop</p>

          <h2 class="h2 section-title text-center">Latest Products</h2>

          <ul class="blog-list">

              <?php
              include_once('connection/connection.php');
              $sql = "SELECT * FROM `tbl_product`";

              //use for MySQLi-OOP
              $query = $conn->query($sql);
              while($row = $query->fetch_assoc()){
              ?> 
            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 1180; --height: 800;">
                  <img src="ADMIN/includes/<?php echo $row['image']; ?>" width="1180" height="800" loading="lazy"
                    alt="Cras accumsan nulla nec lacus ultricies placerat." class="img-cover">

                  <div class="card-badge">
                    <ion-icon name="calendar-outline"></ion-icon>
                    <?php echo date_default_timezone_set('Asia/Manila'); ?>
                    <time class="time" datetime="<?php echo date('Y-m-d'); ?>"><?php echo date('F d, Y'); ?></time>
                  </div>
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title"><?php echo strtoupper($row['name']); ?></a>
                  </h3>

                 

                

                </div>

              </div>
            </li>
          <?php } ?>

            

          </ul>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top section">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo"><img src="logo/logo.png" style="width:50%; height:auto;"></a>
          
          <!--PWEDE MO IBALIK OR LAGYAN NANG WORDS PRESS AND HOLD CTRL KEY AND /-->
          <!--<p class="footer-text">-->
          <!--  Mauris non nisi semper, lacinia neque in, dapibus leo. Curabitur sagittis libero tincidunt tempor finibus.-->
          <!--  Mauris at-->
          <!--  dignissim ligula, nec tristique orci.Quisque vitae metus.-->
          <!--</p>-->

          <div class="schedule">
            <div class="schedule-icon">
              <ion-icon name="time-outline"></ion-icon>
            </div>

            <span class="span">
              Monday - Saturday:<br>
              9:00am - 10:00Pm
            </span>
          </div>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Other Links</p>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>

              <span class="span">Home</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>

              <span class="span">About Us</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>

              <span class="span">Services</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>

              <span class="span">Project</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>

              <span class="span">Our Team</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>

              <span class="span">Latest Blog</span>
            </a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Our Services</p>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>

              <span class="span">Root Canal</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>

              <span class="span">Alignment Teeth</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>

              <span class="span">Cosmetic Teeth</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>

              <span class="span">Oral Hygiene</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>

              <span class="span">Live Advisory</span>
            </a>
          </li>

          <li>
            <a href="#" class="footer-link">
              <ion-icon name="add-outline"></ion-icon>

              <span class="span">Cavity Inspection</span>
            </a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Contact Us</p>
          </li>

          <li class="footer-item">
            <div class="item-icon">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <address class="item-text">
              Urban Deca Homes Subdivision Phase 2B Blk 1 Lot 13 Narra St. Brgy. Abangan Norte, Marilao City Bulacan 3019
            </address>
          </li>

          <li class="footer-item">
            <div class="item-icon">
              <ion-icon name="call-outline"></ion-icon>
            </div>

            <a href="tel:+639171004798" class="footer-link">+63 9171 004 798</a>
          </li>

          <li class="footer-item">
            <div class="item-icon">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <a href="mailto:mula.macecilia@gmail.com" class="footer-link">mula.macecilia@gmail.com</a>
          </li>

        </ul>

      </div>
    </div>

    <div class="footer-bottom" style="background-color:#099688;">
      <div class="container">

        <p class="copyright">
          &copy; 2022 All Rights Reserved by GLOSS & FLOSS.
        </p>

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

        </ul>

      </div>
    </div>

  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="caret-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>