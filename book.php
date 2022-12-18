<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <!-- header section starts  -->

   <section class="header">

      <a href="home.php" class="logo"><span style="margin-left: 16.2px; font-weight: bolder;">Morarifton</span> <br>Tour
         & Travel</a>

      <nav class="navbar">
         <a href="home.php">Home</a>
         <a href="about.php">About</a>
         <a href="package.php">Package</a>
         <a href="book.php">Book</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>

   <!-- header section ends -->

   <div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
      <h1>book now</h1>
   </div>

   <!-- booking section mulai  -->

   <section class="booking">

      <h1 class="heading-title">book your trip!</h1>

      <form action="formbook.php" method="post" class="book-form">

         <div class="flex">
            <div class="inputBox">
               <span>Nama Anda :</span>
               <input type="text" placeholder="Nama Anda" name="name">
            </div>
            <div class="inputBox">
               <span>E-mail :</span>
               <input type="email" placeholder="E-mail Anda" name="email">
            </div>
            <div class="inputBox">
               <span>No. Telp :</span>
               <input type="text" placeholder="Nomor Telepon Anda" name="phone" maxlength="12">
            </div>
            <div class="inputBox">
               <span>Alamat :</span>
               <input type="text" placeholder="Alamat Anda" name="address">
            </div>
            <div class="inputBox">
               <span>Tujuan Anda : </span>
               <input type="option" list="tujuan" placeholder="Tujuan Anda" name="location">
               <datalist id="tujuan">
                  <option>Raja Ampat</option>
                  <option>Bromo Mountain</option>
                  <option>Komodo Island</option>
                  <option>Rinjani Mountain</option>
                  <option>Ulun & Danu Temple</option>
                  <option>Tegallalang Rice Terrace</option>
                  <option>Labuan Bajo</option>
                  <option>Prambanan Temple</option>
                  <option>Nusa Penida</option>
               </datalist>
            </div>
            <div class="inputBox">
               <span>Jumlah Orang :</span>
               <input type="number" placeholder="Jumlah Orang" name="guests">
            </div>
            <div class="inputBox">
               <span>Kedatangan :</span>
               <input type="date" name="arrivals">
            </div>
            <div class="inputBox">
               <span>Keberangkatan :</span>
               <input type="date" name="leaving">
            </div>
         </div>

         <input type="submit" value="Submit" class="btn-book" name="send">

      </form>

   </section>

   <!-- booking section end -->






   <!-- footer section starts  -->

   <!-- footer section starts  -->

   <section class="footer">

      <div class="box-container box-size">

         <div>
            <h6><span class="ft">MORARIFTON </span>travel is an investment in yourself.</h6>
         </div>

         <div class="box left">
            <h3>Quick Links</h3>
            <a href="home.php"> <i class="fa-solid fa-angles-right"></i> Home</a>
            <a href="about.php"> <i class="fa-solid fa-angles-right"></i> About</a>
            <a href="package.php"> <i class="fa-solid fa-angles-right"></i> Package</a>
            <a href="book.php"> <i class="fa-solid fa-angles-right"></i> Book</a>
         </div>

         <div class="box middle">
            <h3>Contact Info</h3>
            <a href="#"><i class="fa-solid fa-angles-right"></i> +62877-9010-9475</a>
            <a href="#"><i class="fa-solid fa-angles-right"></i> +111-222-3333 </a>
            <a href="#"> <i class="fa-solid fa-angles-right"></i> morarifton@gmail.com</a>
            <a href="https://goo.gl/maps/4U4WYSoQFXneneyy7" target="_blank"> <i class="fa-solid fa-angles-right"></i>
               Kelapa Dua </a>
         </div>

         <div class="box right">
            <h3>Follow Us</h3>
            <a href="#"> <i class="fab fa-facebook-f logof"></i> Facebook </a>
            <a href="#"> <i class="fab fa-twitter logot"></i> Twitter </a>
            <a href="#"> <i class="fab fa-instagram logoi"></i> Instagram </a>
            <a href="#"> <i class="fab fa-linkedin logol"></i> Linkedin </a>
         </div>

      </div>

      <div class="credit"> All Rights Reserved </div>

   </section>


   <!-- footer section ends -->









   <!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

   <!-- footer section ends -->



   <!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>