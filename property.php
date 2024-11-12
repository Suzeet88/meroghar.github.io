
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
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/property.css">


  

     <!-- font family -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

</head>
<body>
    
<header class="header flex justify-content align-items-center">
         <a href="#" class="mero_ghar_favicon"><img src="img/mero_ghar.png" alt="mero ghar real estate"> </a>

         <nav class="main_nav">
             <ul class="main-nav-list flex property-nav">
                 <li><a href="index.php" class="main-nav-link">Home</a></li>
                 <li><a href="property.php" class="main-nav-link">Properties</a></li>
                 <li><a href="agent.php" class="main-nav-link">Agents</a></li>
                 <li><a href="about.php" class="main-nav-link">About Us</a></li>
             </ul>
         </nav>

         <div class="property-search search-property flex align-items-center">
             <input type="search" name="search" id="Property" placeholder="Search by city" onkeyup="search()">
             <div id="searchTrigger" class="search flex align-items-center">
                 <ion-icon name="search-outline" class="search-icon"></ion-icon>
                 <span>Search</span>
                </div>
            </div>

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
       
                
       <!-- listed property section -->
       
       <section class="latest-section">
         <div class="how-header">
           <h1 class="text-center underline_transition"><span class="span-text">Listed</span> properties</h1>
          </div>
          

          <div class="container">
            
            <div id="propertyContainer">
                
            </div>
          </div>

          
          
                     
            <!-- <div class="container flex justify-content property-container">

              <div class="property-box">
                <div class="property-saved">
                    <ion-icon name="heart-circle-outline" class="property-saved-icon"></ion-icon>
                </div>
                 <span class="status">Rent</span>
              <div class="property-box-img">
                  <img src="img/property-2.jpg" alt="property for sell/rent">
              </div>
              <div class="property-box-content flex">
                   <h3 class="property-address">Kathmandu</h3>
                   <h3 class="property-name">Luxury Villa Paraside</h3>
                   <div class="property-details flex flex-gap align-items-center">
                       <div class="sqaure-feet flex flex-gap-icons align-items-center">
                        <ion-icon name="cube-outline" class="property-icons"></ion-icon>
                         <p>800 sqf</p>
                       </div>

                       <div class="beds flex flex-gap-icons align-items-center">
                        <ion-icon name="cube-outline" class="property-icons"></ion-icon>
                        <p>4 Beds</p>
                       </div>

                        <div class="baths flex flex-gap-icons align-items-center">
                            <ion-icon name="accessibility-outline" class="property-icons"></ion-icon>
                            <p>4 Baths</p>
                        </div>

                   </div>
                   
                   <div class="property-owner flex justify-content align-items-center">
                    <p>$2500,000</p>
                    <a href="#" class="more-btn">More Details</a>
                   </div>
              </div>
         </div>
            </div>

                
            
                
                

            
             -->

         </section>


       
    
     </main>


      
     <div class="top">
        <a href="#"><ion-icon name="arrow-up-outline" class="top-icon"></ion-icon></a> 
     </div>


     <footer class="footer">
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


    <div id="favoritesModal" class="modal modal-show">
      <div class="modal-content">
          <span class="close">&times;</span>
          <h2>Your Favorite Listings</h2>
          <div id="favoritesContainer"></div>
      </div>
  </div>
  

 
  <script>
        // Pass the PHP login status to JavaScript as a variable
        let isLoggedIn = <?php echo isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true ? 'true' : 'false'; ?>;
    </script>






     <!-- icons source -->
     <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

     

     <!-- script -->
        <script defer src="js/script.js"></script>
        <script defer src="js/property.js"></script>
</body>
</html>




