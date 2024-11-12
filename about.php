
<?php
require('connection.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mero Ghar - Find your dream home </title>
    <link rel="shortcut icon" href="img/mero_ghar_favicon.png" type="image/png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/aboutus.css">
    <link rel="stylesheet" href="css/agents.css">

   

     <!-- font family -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

</head>
<body>
<header class="header flex justify-content align-items-center">
         <a href="#" class="mero_ghar_favicon"><img src="img/mero_ghar.png" alt="mero ghar real estate"> </a>

         <nav class="main_nav">
             <ul class="main-nav-list flex">
                 <li><a href="index.php" class="main-nav-link">Home</a></li>
                 <li><a href="property.php" class="main-nav-link">Properties</a></li>
                 <li><a href="agent.php" class="main-nav-link">Agents</a></li>
                 <li><a href="about.php" class="main-nav-link">About Us</a></li>
             </ul>
         </nav>

            <div class="post_login flex">
                <!-- <a href="#" class="saved_listing"><ion-icon name="heart-outline" class="saved-icon"></ion-icon></a> -->
                <a href="addProperty.php" class="btn property-btn" id="addPropertyLink">Add Property</a>
                <!-- <button type="button" class="show_sign_login  show_login"  onclick="popup('login-popup')">LogIn</button>
                <button type="button" class="show_sign_login  show_register" onclick="popup('register-popup')">Register</button> -->
                <!-- <img src="img/moon.png" alt="moon" id="icon"> -->

                <?php
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
                echo "
               
                    <div class='user'>
                         <span>🙎🏻‍♂️| $_SESSION[username]</span>
                        <a href='logout.php'>LogOut</a>
                    </div>

                ";
        }
         else 
         {
            echo "
                <div class='sign-in-up'>
                    <button type='button' class='show_sign_login  show_login' onclick=\"togglePopup('login-popup')\">LogIn</button>
                    <button type='button' class='show_sign_login  show_register' onclick=\"togglePopup('register-popup')\">Register</button>
                </div>
            ";
        }
        ?>
            </div>

     </header>


              <!-- Login and Register Container -->

<!-- Login Modal -->
<div id="login-popup" class="modal">
    <div class="modal-content">
        <h2>
            <span>User Login</span>
            <button type="button" onclick="togglePopup('login-popup')"><ion-icon name="close-outline" class='close-icon'></ion-icon></button>
        </h2>
        <form method="post" action="login_register.php" class="form-container">
            <input type="text" placeholder="Email or Username" name="email_username" required />
            <input type="password" placeholder="Password" name="password" required />
            <button type="submit" class="login-btn" name="login">Login</button>
        </form>
    </div>
</div>

<!-- Register Modal -->
<div id="register-popup" class="modal">
    <div class="modal-content">
        <h2>
            <span>User Register</span>
            <button type="button" onclick="togglePopup('register-popup')"><ion-icon name="close-outline" class='close-icon'></ion-icon></button></button>
        </h2>
        <form method="post" action="login_register.php" class="form-container">
            <input type="text" placeholder="Full Name" name="fullname" required />
            <input type="text" placeholder="Username" name="username" required />
            <input type="email" placeholder="Email" name="email" required />
            <input type="password" placeholder="Password" name="password" required />
            <button type="submit" name="register" class="register-btn">Register</button>
        </form>
    </div>
</div>

     <main>
        
        <!-- about us section -->

          <section class="about_us reveal">
                <div class="aboutus-container">
                     <h1 class="about-title">Welcome to Meroghar</h1>
                     <p class="about-description">
                        Welcome to Mero Ghar, your trusted real estate platform in Nepal! We aim to make property buying, selling, and renting easier and more accessible for everyone. Our mission is to bridge the gap between property seekers and sellers by providing a user-friendly platform with comprehensive listings and personalized assistance.
                     </p>
                     <h3>Prayush Kumar sah</h3>
                     <p>CEO</p>
                </div>
          </section>



            <!-- testimonials section -->

        <section class="testimonials-section reveal">
               
            <div class="how-header">
                <h1 class="text-center underline_transition">Our <span class="span-text">happy</span> homeowners</h1>
           </div>
                   

           <div class="slider">
            <div class="slide">
                 <div class="testimonials-box">
                      <img src="img/uifaces-popular-image (2).jpg" alt="review of user">
                      <p class="testimonials-description">Finding my first home felt overwhelming until I used Mero Ghar. The website was easy to navigate, and I quickly found properties in my budget and location. The support team was responsive, guiding me from start to finish!</p>
                      <i class='bx bxs-quote-alt-left' class="quote-icon"></i>
                      <h3 class="testimonials-title">Prayush Kumar Sah</h3>
                      <p class="testimonials-address">Kathmandu,Nepal</p>
                 </div>
            </div> 
            
            <div class="slide">
                
                <div class="testimonials-box">
                    <img src="img/uifaces-popular-image.jpg" alt="review of user">
                    <p class="testimonials-description"> needed a rental that suited my lifestyle and budget, and Mero Ghar delivered. I found a great apartment within days, and the whole process was transparent and hassle-free.</p>
                    <i class='bx bxs-quote-alt-left' class="quote-icon"></i>
                    <h3 class="testimonials-title">Rijan Lakhe Shrestha</h3>
                    <p class="testimonials-address">Bhaktapur,Nepal</p>
               </div>
                
            </div>
            
            <div class="slide">
                
                <div class="testimonials-box">
                    <img src="img/uifaces-popular-image (1).jpg" alt="review of user">
                    <p class="testimonials-description"> needed a rental that suited my lifestyle and budget, and Mero Ghar delivered. I found a great apartment within days, and the whole process was transparent and hassle-free.</p>
                    <i class='bx bxs-quote-alt-left' class="quote-icon"></i>
                    <h3 class="testimonials-title">Rijan Lakhe Shrestha</h3>
                    <p class="testimonials-address">Bhaktapur,Nepal</p>
               </div>
                
           </div>
          <ion-icon name="arrow-back-outline" class="slider__btn slider__btn--left"></ion-icon>
          <ion-icon name="arrow-forward-outline" class="slider__btn slider__btn--right"></ion-icon>
       </div>
         
        </div>     
    </section>

     </main>


      
     <div class="top">
      <a href="#"><ion-icon name="arrow-up-outline" class="top-icon"></ion-icon></a> 
   </div>


     <footer class="footer reveal">
        <div class="container grid grid-footer">
            <div class="logo-col">
              <a href="#"><img src="img/mero_ghar.png" alt="omnifood-logo" class="logo"></a>
              
              <ul class="social-links">
                 <li><a class="footer-link" href="#"><ion-icon class="social-icons" name="logo-instagram"></ion-icon></a></li>
                 
                 <li><a class="footer-link" href="#"><ion-icon class="social-icons" name="logo-facebook"></ion-icon></a></li>
    
                 <li><a class="footer-link" href="#"><ion-icon class="social-icons"name="logo-twitter"></ion-icon></a></li>
    
                 <li><a class="footer-link" href="#"><ion-icon class="social-icons" name="logo-linkedin"></ion-icon></a></li>
    
              </ul>
              <p class="copyright">© 2024 Mero Ghar. All rights reserved</p>
            </div>
            <div class="address-col">
               <p class="footer-heading">Contact us</p>
               <address class="contacts">
                 <p class="address">New baneshwor,Kathmandu,Nepal</p>
    
                 <p>
                  <a class="footer-link" href="tel:415-201-6370">415-201-6370</a> <br>
                  <a class="footer-link" href="mailto:hello@omnifood.com">Meroghar@gmail.com</a>
                </p>
               </address>
            </div>
    
            <nav class="nav-col">
               <p class="footer-heading">Account</p>
               <ul class="footer-nav">
                 <li><a class="footer-link" href="#">Create account</a></li>
                 <li><a class="footer-link" href="#">Sign up</a></li>
                 <li><a  class="footer-link" href="#">IOS app</a></li>
                 <li><a class="footer-link" href="#">Andriod app</a></li>
              </ul>
            </nav>
           
            
            <nav class="nav-col">
              <p class="footer-heading">Company</p>
              <ul class="footer-nav">
                <li><a class="footer-link" href="#">About Meroghar</a></li>
                <li><a class="footer-link" href="#">For Business</a></li>
                <li><a class="footer-link" href="#">Meroghar agent</a></li>
                <li><a class="footer-link" href="#">Testimonials</a></li>
             </ul>
           </nav>
    
                  
           <nav class="nav-col">
            <p class="footer-heading">Legal Information</p>
            <ul class="footer-nav">
              <li><a class="footer-link" href="#">Terms & Conditions</a></li>
              <li><a class="footer-link" href="#">Privacy Policy</a></li>
              <li><a class="footer-link" href="#">Cookie Policy</a></li>
           </ul>
         </nav>
    
        </div>
    </footer>


    <script>
        // Pass the PHP login status to JavaScript as a variable
        let isLoggedIn = <?php echo isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true ? 'true' : 'false'; ?>;
    </script>

   




     <!-- icons source -->
     <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></scrip>
     <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

     

     <!-- script -->
      <script src="js/script.js" defer></script>
</body>
</html>




