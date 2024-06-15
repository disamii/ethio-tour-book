<?php
$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABaSE = 'bookforms';
$conn = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABaSE);
      if(!$conn)
      {
        die(mysqli_error($conn).'error occured'); 
      }
      // $excute_tour_sql="select *from  tour_destination";
      // $result=mysqli_query($conn,$excute_tour_sql);
      // $tour_destination_bd=$result->fetch_all( MYSQLI_ASSOC);
      // foreach ( $tour_destination_bd as $inner_array) {
       
      // }
    //   print_r( $tour_package_bd);
      if(isset($_POST['send']))
      {
                $send=($_POST['destination_sender']);
                // $
                  $execut_tour_sql= "select  *FROM tour_destination  WHERE 
                  destination_name= '$send'";
                  $result=mysqli_query($conn,$execut_tour_sql);
                  $tour_destination_data=$result->fetch_all(MYSQLI_ASSOC);
                 var_dump($tour_destination_data);
                $id=$tour_destination_data[0]['destination_id'];
                 if(mysqli_query($conn,$execut_tour_sql))
                  {
                    header("Location: Axum.php?id=" . urlencode($id));
                  }
                  else{
                    die('error');
                  }
                }
                  
                      // $count=0;
//                   $row = mysqli_num_rows($result)-1; 
//                   // print_r($row);
// while($count<=$row)
//      {   
        //  if($tour_destination_data[$count]['destination_id']==intval($send))
//          {
//           var_dump($id);
//          }
//          $count++;
//    
//       }
      // var_dump($id);
      ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ethio Tour</title>
  <link rel="stylesheet" href="../css/home page2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../css/login - Copy.css">
  <link rel="stylesheet" href="../css/sign up.css">
  <link rel="stylesheet" href="../css/style.css">
  <style>
    body {
      background: white !important;
      ;

    }

  </style>
</head>

<body>
  <script src="../js/bom.js"></script>
  <div class="full">
  <?php
  include("header.php");
  ?>
    <div class="one">
      <div class="one-overlay">
        <div class="two">
          <h1>Your Time To Explore</h1>
          <p>Leisurely & Flexible Eskorted Tour</p>
        </div>
      </div>
    </div>
    <div class="three">
      <h1> We try to make your journey unforgettable experience <br>with the highest quality of service</h1>
    </div>
    <section class="gallery-img" id="blur">
      <div class="gallery img1">
        <div>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <input type="hidden" name="destination_sender" value="<?php  echo 'Axum';?>">
    <button name="send">AXUM</button>
</form>

  </form>
          </a>
        </div>
      </div>
      <div class="gallery img2">
        <div>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <input type="hidden" name="destination_sender" value="<?php  echo '40minch';?>">
    <button name="send">40Minch</button>
</form>
        </div>
      </div>
      <div class="gallery img3">
        <div>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <input type="hidden" name="destination_sender" value="<?php  echo 'jegol';?>">
    <button name="send"><h1>Jugol</h1></button>
</form>
        </div>
      </div>
      <div class="gallery img4">
        <div>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <input type="hidden" name="destination_sender" value="<?php  echo 'Fasiledes';?>">
    <button name="send"><h1>Fasiledes</h1></button>
</form>
          </a>
        </div>
      </div>
      <div class="gallery img5">
        <div>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <input type="hidden" name="destination_sender" value="<?php  echo 'Lalibella';?>">
    <button name="send"><h1>Lalibela</h1></button>
</form>  
      </div>
      </div>
      <div class="gallery img6">
        <div>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <input type="hidden" name="destination_sender" value="<?php  echo 'Dankil';?>">
    <button name="send"><h1></h1>Danakil</button>
</form> 
        </div>

      </div>
    </section>
    <div class="image" id="landing-image">
      <div class="landing">
       
   
        <!-- login form -->

    </div>
  </div>
  </div>
  <script src="../js/book validation.js"></script>
  <script type="text/javascript" src="../js/script1.js"></script>
  <script type="text/javascript" src="../js/login.js"></script>
  <script type="text/javascript" src="../js/signup.js"></script>
  <script type="text/javascript" src="./js/validate-signup/script.js"></script>
  <div class="note">
    <h1>Recomended Escorted Tours</h1>
  </div>
  <div class="four">
    <div class="one1 a">
      <div class="one2">
        <a href="../html/hotels.html"> <img src="../image/marc-szeglat-Rj21YHC1CIY-unsplash.jpg" alt=""></a>
      </div>
      <div class="one3">
        <h1>Very Best Of HotelsEthioia</h1>
        <ul>
          <li> 2-nights onboard luxury tour</li>
          <li>Go On Nech Sar National Park</li>
          <li>Tour Semein Teraroch</li>

        </ul>
        <p><b> 25 day </b> tour form</p>
      </div>

    </div>
    <div class="one1 b">
      <div class="one2">
        <a href="../html/adventure.php"><img src="../image/harar2.jpg" alt=""></a>
      </div>
      <div class="one3">
        <h1> Adventure in Ethioia</h1>
        <ul>
          <li> 2-nights onboard luxury tour</li>
          <li>Go On Nech Sar National Park</li>
          <li>Tour Semein Teraroch</li>

        </ul>
        <p><b> 25 day </b> tour form</p>
      </div>

    </div>
    <div class="one1 c">
      <div class="one2">
        <a href="../html/cultural tour.php"> <img src="../image/alazar-kassahun-z0pkrPf0Wjw-unsplash.jpg" alt=""></a>
      </div>
      <div class="one3">
        <h1> Cultural Tour inEthioia</h1>
        <ul>
          <li> 2-nights onboard luxury tour</li>
          <li>Go On Ethncs collection</li>
          <li>HAMER</li>

        </ul>
        <p><b>  little way </b> tour form</p>
      </div>

    </div>
    <div class="one1 d">
      <div class="one2">
        <a href="../html/spritual.php"> <img src="../image/pexels-estella-7438161.jpg" alt=""></a>
      </div>
      <div class="one3">
        <h1>Religous places Ethioia</h1>
        <ul>
          <li> 2-nights onboard luxury tour</li>
          <li>Go On Historicall monastery</li>
          <li>Debre libanos  and other place</li>

        </ul>
        <p><b> 25 day</b> tour form</p>
      </div>

    </div>
    <div>
    </div>
    <div class="one1 d">
      <div class="one2">
        <a href="../html/holiday tour.php"> <img src="../image/meskel 2.jpg" alt=""></a>
      </div>
      <div class="one3">
        <h1>Holiday & Festival Ethioia</h1>
        <ul>
          <li> 2-nights onboard luxury tour</li>
          <li>Go On Historicall monastery</li>
          <li>Debre libanos  and other place</li>

        </ul>
        <p><b> 25 day</b> tour form</p>
      </div>

    </div>
  </div>
  <div class="flex">

    <img src="../image/home5.png" alt="">


    <img src="../image/home2.png" alt="">


    <img src="../image/home3.jpg" alt="">


    <img src="../image/home4.png" alt="">

  </div>
  <footer>
    <div class="five">
      <div class="flex-one">
        <div class="flex-one-img">
          <img src="../image/output-onlinepngtools (1).png" alt="">

        </div>
        <div class="flex-one-text">
          <p>The Best Trips For bare foot Travellers <br>
            Are you ready for the adventure of a lifetime? <br>
            bare foot travel is an incredible way to <br>
            experience new cu <a href="../html/travel packeges.php">read more</a></p>
        </div>
      </div>
      <div class="flex-two">
        <h2>Destinations</h2>
        <ul>
          <li> <button> Axum</a></li>
          <li> <button> Lalibela</a></li>
          <li> <button> Sof-umer</a></li>
          <li> <button> Fasiledes</a></li>
          <li> <button> Tis-abay</a></li>
          <li> <button> Harrar</a></li>
          <li> <button> Danakil</a></li>
        </ul>

      </div>
      <div class="flex-three">
        <h2>Helpful links</h2>
        <ul>
          <li><a href="../html/about-us.php">About-Us</a></li>
          <li><a href="../html/contact-us.php">Contact-Us</a></li>
          <li><a href="../html/destination.php">Destination</a></li>
          <li><a href="../html/our -services.php">Our Services</a></li>
          <li><a href="../html/privacy-policy.php">Privacy-Policy</a></li>
          <li><a href="../html/terms and conditions.php">Terms And Conditions</a></li>
        </ul>

      </div>
      <div class="flex-four">
        <h2>Contact-Info</h2>
        <p>ETHIO TOUR AND TRAVEL</p>
        <P>Bahir-dar St.George street Poly campus</P>
        <p>Email</p>
        <p><a href=""> bboche651@gmail.com</a></p>
        <div><img src="../image/email3.png" alt="" style="width: 40px; height: 40px;">
          <img src="../image/twitter.png" alt="" style="width: 40px; height: 40px;">
          <img src="../image/instagram.png" alt="" style="width: 40px; height: 40px;">
          <img src="../image/telegram.png" alt="" style="width: 40px; height: 40px;">
        </div>
        <p>2023</p>
      </div>
    </div>
  </footer>
  </div>
</body>

</html>
<?php

