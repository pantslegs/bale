<!DOCTYPE html>
   <html lang="en">

      <!--=============== LOGIN ===============-->


   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
      <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="../css/login/assets/css/login.css">

      <link rel="icon" href="../img/logo.png">

      <title>Balé Login</title>
   </head>
   <body>

        <!-- header section starts-->
        <header>
            <a href="home.php" class="logo">
                <img src="../img/logotransp.png" alt="">
            </a>

            <div class="menu-btn">
                <div class="navigation">
                    <div class="navigation-items">
                        <a href="#home">Home</a>
                        <a href="#about">About</a>
                        <a href="culture.php">Featured</a>
                        <a href="manyaman.php">Manyaman</a>
                        <a href="contact.php">Contact</a>
                        <a href="register.php">Register</a>
                    </div>
                </div>
            </div>
        </header>
        <!--header section ends -->

      <div class="login">
         <img src="../img/bg-login3.png" alt="image" class="login__bg">

         <form action="" class="login__form">
            <h1 class="login__title">Login</h1>

            <div class="login__inputs">
               <div class="login__box">
                  <input type="email" placeholder="Email ID" required class="login__input">
                  <i class="ri-mail-fill"></i>
               </div>

               <div class="login__box">
                  <input type="password" placeholder="Password" required class="login__input">
                  <i class="ri-lock-2-fill"></i>
               </div>
            </div>

            <div class="login__check">
               <div class="login__check-box">
                  <input type="checkbox" class="login__check-input" id="user-check">
                  <label for="user-check" class="login__check-label">Remember me</label>
               </div>

               <a href="forgot-password.php" class="login__forgot">Forgot Password?</a>
            </div>

            <button type="submit" class="login__button">Login</button>

            <div class="login__register">
               Don't have an account? <a href="register.php">Register</a>
            </div>
         </form>
      </div>

      <!-- footer section starts  -->
      <footer class="footer-distributed">
         <div class="footer-left">
             <h3>ASU<span>Team</span></h3>
 
             <p class="footer-links">
                 <a href="home.php">Home</a>
                 |
                 <a href="home.php">About</a>
                 |
                 <a href="culture.php">Restaurants</a>
                 |
                 <a href="contact.php">Contact</a>
             </p>
 
             <p class="footer-company-name">Copyright © 2024 <strong>ASU Team</strong> All rights reserved</p>
         </div>
 
         <div class="footer-center">
             <div>
                 <i class="fa fa-map-marker"></i>
                 <p><span>Makati</span>
                     Philippines</p>
             </div>
 
             <div>
                 <i class="fa fa-phone"></i>
                 <p>+639 999 326 9468</p>
             </div>
             <div>
                 <i class="fa fa-envelope"></i>
                 <p><a href="mailto:baleteam@gmail.com">baleteam@gmail.com</a></p>
             </div>
         </div>
         <div class="footer-right">
             <p class="footer-company-about">
                 <span>About the team</span>
                 <strong>ASU Team</strong> is composed of three students from Mapua University, Makati. 
             </p>
             <div class="footer-icons">
                 <a href="https://www.facebook.com/qalcium"><i class="fa fa-facebook"></i></a>
                 <a href="https://www.facebook.com/dnlvrtx"><i class="fa fa-facebook"></i></a>
                 <a href="https://www.facebook.com/KGBOS4"><i class="fa fa-facebook"></i></a>
             </div>
         </div>
     </footer>
 <!-- footer section ends -->

      <script src="/js/navbar.js"></script>

   </body>
</html>