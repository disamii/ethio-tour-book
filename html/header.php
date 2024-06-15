<?php
session_start();
// require 'connect.php';
// require 'functions.php';
?>
<header>
  

<link rel="stylesheet" href="../css/gallery.css">
<div class="c1 ">
  <div class="over">
    <img src="../image/output-onlinepngtools (1).png">
    <div class="inner">
      <h2> <span>COME </span><span style="color: rgb(221, 41, 41);">ALONG </span> </h2>
      <p>ON A <b style="color: rgb(103, 100, 100);font-weight: 30px;">WONDEROUESS</b> JOURNEY TO THE <b
          style="color: rgb(106, 102, 102)">PINAKLE</b> OF <br> <b> NATURE </b>AND HISTORY</p>
    </div>
  </div>
</div>
</header>
<nav style="position: sticky;top: 0; z-index: 999;">
<ul class="main">
  <input type='checkbox' id='check' />
  <span class="menu">
    <?php
  if (isset($_SESSION['user_id'])) {
  echo  '<li> <a href="logout.php">logout</a></li>';
 }
 ?>
 
    <li class="n"><a href="../html/about-us.php">
        About-us
      </a></li>
    <li class="n"> <a href="../html/Hotels.php">
        Hotels
      </a></li>
    <li class="n">
      <a href="../html/money transaction.php">
        Booking
      </a>
    </li>
    <li class="n"> <a href="../html/travel packeges.php">
        Ready travel packages
      </a></li>
    <li class="no">
      <a href="../html/destination.php">Tour catagory</a>
      <ul>
        <li><a href="../html/cultural tour.php">Cultural </a> </li>
        <li><a href="../html/adventure.php"> Nature</a></li>
        <li><a href="../html/heritage.php"> Heritages</a></li>
        <li><a href="../html/holiday tour.php"> Holiday</a></li>
        <li><a href="../html/spritual.php"> spritual</a></li>
      </ul>
    </li>
    <li class="n"> <a href="../html/destination.php">
        Top Destinations
      </a></li>
    <li class="n"> <a href="../html/home3.php">
        Home
      </a></li>
  </span>
  <label for="check" class="close-menu"><i class="fas fa-times"></i></label>
</ul>
</nav>