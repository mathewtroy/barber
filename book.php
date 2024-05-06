<?php
   session_start();

   @require 'config.php';

   // import Validation from PHP file
   @require "lib/val_book.php";

   $name_b = '';
   $email_b = '';
   $phone = '';
   $address = '';
   $location = '';
   $guests = '';
   $reservation = '';
   $days = '';

   $bookFormIsSent = isset($_POST['do_send']);

   if (!$bookFormIsSent) {
      $_SESSION["token"] = bin2hex(random_bytes(32));
   }
   // expire token in 10 seconds
   $_SESSION["token-expire"] = time() + 10; // in seconds

   if($bookFormIsSent) {

      // Verify CSRF token
         if (isset($_POST["token"])) {
            @require 'verify_token.php';
         }

      $name_b = $_POST['name_b'];
      $email_b = $_POST['email_b'];
      $phone = $_POST['phone'];
      $reservation = $_POST['reservation'];



      $validateNameBookMin = valNameBookMin($name_b);
      $validateNameBookMax = valNameBookMax($name_b);
      $validateNameBookPattern = valNameBookPattern($name_b);

      $validateEmailBookPattern = valBookEmailAll($email_b);

      $validateStartPhone = valStartPhone($phone);


      if ($validateNameBookMin && $validateNameBookMax && $validateNameBookPattern 
      && $validateEmailBookPattern && $validateStartPhone) {
         // everything is OK, I can work with data
         // perhaps create a new user in the DB
         $request = " INSERT INTO book_form(name_b, email_b, phone, reservation) 
         VALUES('$name_b','$email_b','$phone','$reservation') ";
         mysqli_query($conn, $request);

         header('location:book.php');
      } else {
            // error, I stop at the form and display errors
      }


   // }else{
   //    echo 'Something went wrong please try again!';
   }

?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Booking</title>

      <!-- Import CSS section from PHP file -->
      <?php require "inc/_style.php" ?>
   
   </head>

   <body>
   
      <!-- Import header section from PHP file -->
      <?php require "inc/_header.php" ?>
  
      <div class="yellows">
         <div class="heading-book"> 

            <h1>Booking</h1>

         </div> 
                  
      </div>
      </div>
      
      <!-- Import booking section from PHP file -->
      <?php require "book_form.php" ?>

      <!-- Import footer section from PHP file -->
      <?php require "inc/_footer.php" ?>

      <!-- JS comments form -->
      <script src="js/book_form.js"></script>

   </body>
</html>