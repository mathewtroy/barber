<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Team</title>

      <!-- Import CSS section from PHP file -->
      <?php require "inc/_style.php" ?>

   </head>

   <body>

      <!-- Import header section from PHP file -->
      <?php require "inc/_header.php" ?>

      <div class="main">
         <!-- background of about -->
         <div class="heading-team"> 
            
            <h1>Team</h1>
         
         </div>
      </div>

      <section class="team">

      <h2 class="heading-title">Our masters</h2>

         <div class="box-container">

            <div class="box">
               <div class="image">
                  <img src="./static/img/gal/barber1.jpg">
               </div>
               <div class="content">
                  <h3>Jiri Novak</h3>
                  <h4>Master Barber</h4>
                  
                  <p>
                     Jiri Novak, master barber and founder of Smith's Barbershop, 
                     brings two decades of grooming expertise to downtown. 
                     <br>
                     His precision cuts and timeless styles have made him a community favorite, 
                     offering not just haircuts, but an experience of tradition and excellence.
                  </p>
               </div>
            </div>

            <div class="box">
               <div class="image">
                  <img src="./static/img/gal/barber2.jpg">
               </div>
               <div class="content">
                  <h3>Jiri Prochazka</h3>
                  <h4>Master Barber</h4>

                  <p>
                     Jiri Prochazka, master barber and founder of Smith's Barbershop, 
                     brings two decades of grooming expertise to downtown. 
                     <br>
                     His precision cuts and timeless styles have made him a community favorite, 
                     offering not just haircuts, but an experience of tradition and excellence.
                  </p>
               </div>
            </div>

            <div class="box">
               <div class="image">
                  <img src="./static/img/gal/barber3.jpg">
               </div>
               <div class="content">
                  <h3>Alex Great</h3>
                  <h4>Master Barber</h4>

                  <p>
                     Alex Great, master barber and founder of Smith's Barbershop, 
                     brings two decades of grooming expertise to downtown. 
                     <br>
                     His precision cuts and timeless styles have made him a community favorite, 
                     offering not just haircuts, but an experience of tradition and excellence.
                  </p>
               </div>
            </div>

            <div class="box">
               <div class="image">
                  <img src="./static/img/gal/barber4.jpg">
               </div>
               <div class="content">
                  <h3>Iwan Drago</h3>
                  <h4>Master Barber</h4>

                  <p>
                     Iwan Drago, master barber and founder of Smith's Barbershop, 
                     brings two decades of grooming expertise to downtown. 
                     <br>
                     His precision cuts and timeless styles have made him a community favorite, 
                     offering not just haircuts, but an experience of tradition and excellence.
                  </p>
               </div>
            </div>

         </div>

      </section>


      <!-- Import footer section from PHP file -->
      <?php require "inc/_footer.php" ?>

      <!-- images from website: https://wallpapers.com/ -->
   </body>
</html>