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
               <input type="text" placeholder="Nama Anda" name="name" required>
            </div>
            <div class="inputBox">
               <span>E-mail :</span>
               <input type="email" placeholder="E-mail Anda" name="email" required>
            </div>
            <div class="inputBox">
               <span>No. Telp :</span>
               <input type="text" placeholder="Nomor Telepon Anda" name="phone" maxlength="12" required>
            </div>
            <div class="inputBox">
               <span>Best Price :</span>
               <input type="option" list="harga" placeholder="Harga" name="price" required>
               <datalist id="harga">
                  <option id="rampat">start from </option>
                  <option id="bromo">start from </option>
                  <option id="komodo">start from </option>
                  <option id="rinjani">start from </option>
                  <option id="ulun">start from </option>
                  <option id="tegalang">start from </option>
                  <option id="bajo">start from </option>
                  <option id="prambanan">start from </option>
                  <option id="nusa">start from </option>
               </datalist>
            </div>

            <div class="inputBox">
               <span>Tujuan Anda : </span>
               <input type="option" list="tujuan" placeholder="Tujuan Anda" name="location" required>
               <datalist id="tujuan">
                  <option id="rampat" onclick="">Raja Ampat</option>
                  <option id="bromo">Bromo Mountain</option>
                  <option id="komodo">Komodo Island</option>
                  <option id="rinjani">Rinjani Mountain</option>
                  <option id="ulun">Ulun & Danu Temple</option>
                  <option id="tegalang">Tegallalang Rice Terrace</option>
                  <option id="bajo">Labuan Bajo</option>
                  <option id="prambanan">Prambanan Temple</option>
                  <option id="nusa">Nusa Penida</option>
               </datalist>
            </div>
         </div>

         <input type="submit" value="Submit" class="btn-book" name="send">

      </form>

   </section>

   <!-- booking section end -->







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
            <a href="#"> <i class="fab fa-instagram logoi"></i> Instagram </a>
            <a href="#"> <i class="fa-brands fa-whatsapp logow"></i> Whatsapp </a>
            <a href="#"> <i class="fab fa-twitter logot"></i> Twitter </a>
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

   <!-- Font awesome -->
   <script src="https://kit.fontawesome.com/ba6b439bcb.js" crossorigin="anonymous"></script>
</body>

</html>