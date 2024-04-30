<!-- Header section starts -->

<section class="header">
<!-- <header>    -->

   <!-- Button Darkmode -->
   <a href="?theme=<?php echo $themeToggle; ?>"><strong>Darkmode</strong></a>

   <!-- <a><button class="btn">Darker</button></a> -->

   <a href="home.php" class="logo">
      <h2>ZWA</h2></a>
   
   <!-- <div class="darkmode"><button class="btn">Dark</button></div> -->
         
   <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="about.php">About</a>
      <a href="team.php">Team</a>
      <a href="price.php">Price</a>
      <a href="gallery.php">Gallery</a>
      <a href="book.php">Book</a>

      <!-- 
      Unauthorized users see Login page , Register Page
      -->
      <?php if (!isset($_SESSION['user_name']) && !isset($_SESSION['admin_name']) ): ?>
      <a href="login.php">Login</a>
      <a href="register.php">Register</a>
      
      <?php else:?>

      <!-- 
      Authorized users see Log Out page
      -->
      <a href="logout.php">Log out</a>

               <?php if(isset($_SESSION['admin_name'])): ?>

               <a href="admin_page.php">Personal account</a>
               
               <?php else: ?>
                  
                  <!-- if(isset($_SESSION['user_name'])): -->
                  <a href="user_page.php">Personal account</a>
               
               <?php endif; ?>
         
      <?php endif; ?>

   </nav>
  
   <div id="menu-btn" class="fas fa-bars"></div>

</section>


<!-- Header section ends -->