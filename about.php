<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>About</title>

      <!-- Import CSS section from PHP file -->
      <?php require "inc/_style.php" ?>

   </head>

   <body>

      <!-- Import header section from PHP file -->
      <?php require "inc/_header.php" ?>

      <div class="main">
         <!-- background of about -->
         <div class="heading-about"> 
            
            <h1>About</h1>
         
         </div>
      </div>

      <section class="price">

      <h2 class="heading-title">Glad to see you</h2>

         <div class="box-container">

            <div class="box">

               <div class="content">                
                  <p>
                     Step into our barbershop, where blades meet precision and style meets substance. <br/>
                     Led by Jack, a veteran barber, our team embodies traditional craftsmanship with a modern edge. <br/>
                     Experience the raw power of a straight razor, the satisfying snip of scissors, <br/>
                     and the subtle artistry of beard sculpting. It is not just a haircut. <br/>
                     It is reclaiming masculinity with confidence and swagger.
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