<!DOCTYPE html>
   <html lang="en">

   <!--=============== REGISTER ===============-->

   
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
      <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="../css/register/assets/css/register.css">

      <link rel="icon" href="../img/logo.png">

      <title>Balé Register</title>
   </head>
   <body>

        <!-- header section starts-->
        <header>
            <a href="home.php" class="logo">
                <img src="../img/logotransp.png" alt="image">
            </a>

            <div class="menu-btn">
                <div class="navigation">
                    <div class="navigation-items">
                        <a href="#home">Home</a>
                        <a href="#about">About</a>
                        <a href="culture.php">Featured</a>
                        <a href="manyaman.php">Manyaman</a>
                        <a href="contact.php">Contact</a>
                        <a href="login.php">Login</a>
                    </div>
                </div>
            </div>
        </header>
        <!--header section ends -->

      <div class="register">
         <img src="../img/bg-login3.png" alt="image" class="bg">

         <form action="" class="form">
            <h1 class="title">Register</h1>

            <div class="inputs">
               <div class="box">
                  <input type="text" placeholder="Enter your Name" required class="input">
                  <i class="ri-account-circle-fill"></i>
               </div>

               <div class="box">
                  <input type="text" placeholder="Enter your email" required class="input">
                  <i class="ri-mail-fill"></i>
               </div>

               <div class="box">
                  <input type="password" placeholder="Create Password" required class="input">
                  <i class="ri-lock-2-fill"></i>
               </div>

               <div class="box">
                  <input type="password" placeholder="Confirm Password" required class="input">
                  <i class="ri-lock-2-fill"></i>
               </div>

            </div>

            <div class="check">
               <div class="check-box">
                  <input type="checkbox" class="check-input" id="user-check">
                  <label for="user-check" class="check-label">Remember me</label>
               </div>
            </div>

            <button type="submit" class="button">Login</button>

            <div class="login">
               Already have an account? <a href="login.php">Login</a>
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