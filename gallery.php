<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Gallery</title>

      <!-- Import CSS section from PHP file -->
      <?php require "inc/_style.php" ?>

   </head>

   <body>

      <!-- Import header section from PHP file -->
      <?php require "inc/_header.php" ?>

      <div class="main">
         <!-- background of about -->
        <div class="heading-gallery"> 
        
            <h1>Gallery</h1>
        
        </div>
      </div>

      <section class="gallery">

      <h2 class="heading-title">Look at our works</h2>

         <div class="box-container">

            <div class="box">
               <div class="image">
                  <img src="./static/img/gal/barber1.jpg">
               </div>
            </div>

            <div class="box">
               <div class="image">
                  <img src="./static/img/gal/barber2.jpg">
               </div>
            </div>

            <div class="box">
               <div class="image">
                  <img src="./static/img/gal/barber3.jpg">
               </div>
            </div>

            <div class="box">
               <div class="image">
                  <img src="./static/img/gal/barber4.jpg">
               </div>
            </div>

            <div class="box">
               <div class="image">
                  <img src="./static/img/gal/barber5.jpg">
               </div>
            </div>

            <div class="box">
               <div class="image">
                  <img src="./static/img/gal/barber6.jpg">
               </div>
            </div>

            <div class="box">
               <div class="image">
                  <img src="./static/img/gal/barber7.jpg">
               </div>
            </div>

            <div class="box">
               <div class="image">
                  <img src="./static/img/gal/barber1.jpg">
               </div>
            </div>

            <div class="box">
               <div class="image">
                  <img src="./static/img/gal/barber2.jpg">
               </div>
            </div>

            <div class="box">
               <div class="image">
                  <img src="./static/img/gal/barber3.jpg">
               </div>
            </div>

            <div class="box">
               <div class="image">
                  <img src="./static/img/gal/barber4.jpg">
               </div>
            </div>

            <div class="box">
               <div class="image">
                  <img src="./static/img/gal/barber5.jpg">
               </div>
            </div>

         </div>

      </section>


      <!-- Import footer section from PHP file -->
      <?php require "inc/_footer.php" ?>

      <!-- images from website: https://wallpapers.com/ -->
   </body>
</html>