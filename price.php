<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Price</title>

      <!-- Import CSS section from PHP file -->
      <?php require "inc/_style.php" ?>

   </head>

   <body>

      <!-- Import header section from PHP file -->
      <?php require "inc/_header.php" ?>

      <div class="main">
        <!-- background of about -->
        <div class="heading-price"> 
            
            <h1>Price</h1>
        
        </div>
      </div>

      <section class="price">

      <h2 class="heading-title">Best price in Prague</h2>

         <div class="box-container">

            <div class="box">
               <div class="image">
                  <img src="./static/img/hair/classic.png">
               </div>
               <div class="content">
                  <h3>Classic haircut</h3>
                  <h4>500 CZK</h4>
                  
                  <p>
                     A timeless haircut including trimming, hair washing, contour shaping with 
                     clippers and razor, and grooming of ear hair.
                  </p>
                  <a href="book.php" class="btn">Book now</a>
               </div>
            </div>

            <div class="box">
               <div class="image">
                  <img src="./static/img/hair/standart.png">
               </div>
               <div class="content">
                  <h3>Standart haircut</h3>
                  <h4>700 CZK</h4>

                  <p>
                     A comprehensive service featuring a haircut from scratch, hair washing, 
                     contour shaping with clippers and razor, and ear hair trimming.
                  </p>
                  <a href="book.php" class="btn">Book now</a>
               </div>
            </div>

            <div class="box">
               <div class="image">
                  <img src="./static/img/hair/beard.png">
               </div>
               <div class="content">
                  <h3>Beard </h3>
                  <h4>500 CZK</h4>

                  <p>
                     Expert grooming for your beard, including contour shaping with clippers and razor, 
                     hot towel steam, face massage, and ear hair grooming.
                  </p>
                  <a href="book.php" class="btn">Book now</a>
               </div>
            </div>

            <div class="box">
               <div class="image">
                  <img src="./static/img/hair/premium.png">
               </div>
               <div class="content">
                  <h3>Premium haircut</h3>
                  <h4>1000 CZK</h4>

                  <p>
                     Our top-tier service offering a complete haircut from scratch, hair washing, beard grooming, 
                     contour shaping with clippers and razor, hot towel steam, face massage, ear hair grooming, and beard balm application.
                  </p>
                  <a href="book.php" class="btn">Book now</a>
               </div>
            </div>

         </div>



      </section>


      <!-- Import footer section from PHP file -->
      <?php require "inc/_footer.php" ?>

      <!-- images from website: https://wallpapers.com/ -->
   </body>
</html>