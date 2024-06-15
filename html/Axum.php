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
      
      if(isset($_POST['send']))
      {
                $send=($_POST['destination_sender']);
                // $
                  $execut_tour_sql= "select  *FROM hotel  WHERE 
                  hotel_name= '$send'" ;
                  $result=mysqli_query($conn,$execut_tour_sql);
                  $tour_destination_data=$result->fetch_all(MYSQLI_ASSOC);
                 var_dump($tour_destination_data);
                $id=$tour_destination_data[0]['hotel_id'];
                 if(mysqli_query($conn,$execut_tour_sql))
                  {
                    header("Location: money transaction.php?id=" . urlencode($id));
                  }
                  else{
                    die('errorrtyuio');
                  }
                }
      $dest_id_reciev=intval($_GET['id']);
 if(!$dest_id_reciev)
 {
  // die('error occured for this destination  ');
 }
      else{
   // var_dump($dest_id_reciev);
   $excute_tour_sql="select *from  tour_destination where destination_id='$dest_id_reciev'";
   $result=mysqli_query($conn,$excute_tour_sql);
   $tour_destination_db=$result->fetch_all( MYSQLI_ASSOC);
   // var_dump($tour_destination_db[0]['destination_id']);

   $des_id=intval($tour_destination_db[0]['destination_id']);
   $excute_hotel_sql="select *from  hotel where destination_id='$des_id'";
   $result_of_hotel=mysqli_query($conn,$excute_hotel_sql);
   $tour_hotel_db=$result_of_hotel->fetch_all( MYSQLI_ASSOC);
   $rows=mysqli_num_rows($result_of_hotel);

 // var_dump( $tour_hotel_db);
 // var_dump($des_id);
 $excute_image_sql="select *from  destination_image where destination_id='$des_id'";
   $result_of_image=mysqli_query($conn,$excute_image_sql);
   $tour_image_db=$result_of_image->fetch_all( MYSQLI_ASSOC);
 // var_dump ( $tour_image_db);
 $row = mysqli_num_rows($result_of_image);
   if($row)
   {
   $first_row = $tour_image_db[0];
   $sliced_second_row = array_slice($first_row,3);
 }
//  var_dump($sliced_second_row);
// echo $rows;
      }
   



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Derscription</title>
  <link rel="stylesheet" href="../css/home page2.css">
  <link rel="stylesheet" href="../css/Axum.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
</head>
<body>
  <!-- <script src="../js/Untitled-1.js"></script> -->
  <?php 
   include 'header.php';
   ?>
  <div class="photo">
    <div class="one"  style="background-position:10%;background-image: url('<?php echo $tour_destination_db[0]['image'];?>');">
      <div class="one-overlay">
        <div class="two">
          <h1 id="destination">
              <?php 
          echo ($tour_destination_db[0]['destination_name']);
            ?> 
            </h1>
        </div>
      </div>
    </div>
  </div>
  <div class="axum1">
    <div class="axum2">
      <h1>Spectacular   <?php 
            echo  $tour_destination_db[0]['destination_name'];
            ?>  Tour</h1>
      <p style="line-height: 200%;">
     <?php 
       echo  $tour_destination_db[0]['description'] ;
     ?>
    </p>
        <div>
         <p>price = <span id="tourprice"></span>     <?php 
       echo  $tour_destination_db[0]['price'] ;
     ?> br</p> 
        </div>
    </div>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<div class="container">
  <div class="swiper">
    <div class="swiper-wrapper">
      <!-- <div class="swiper-slide"> -->
       
        <!-- <img src="<?php 
          // echo $tour_destination_db[0]['image'];?>" alt="">   -->
      <!-- </div> -->
      <?php
      if($row){
foreach ($sliced_second_row as $image):?>
      <div class="swiper-slide">
        <img src="<?php echo  $image;?>" alt="">
      </div>
      <?php endforeach;}?>

    </div>
    <div class="swiper-button-prev" style="height: 10px; width: 3px;color: rgb(255, 255, 255);"></div>
    <div class="swiper-button-next" style="height: 10px; width: 3px; color: rgb(255, 255, 255)"></div>
  </div>
</div>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
  const swiper = new Swiper('.swiper', {
    autoplay: {
      delay: 800,
      disableOnInteraction: false,
    },
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
</script>

  </div>
  <div class="axum4">
    <div>
   <div class="hotels">
    <div class="axum6">
      <h1>Hand Picked Hotels</h1>
      <p>At Ethio Tour, we take great care in selecting the accommodation 
        you will be using throughout your Spectacular South Africa tour. Our 
        Directors personally visit the destination to search out the hotels 
        that have a great location and are of a high quality too – which we 
        believe are tow of the most important factors when choosing any touring 
        holiday to South Africa. These are the hotels we’ve chosen for you…</p>
    </div>

    <div class="axum8">
    <?php
 
    foreach ( $tour_hotel_db as $inner_array) :?>

      <div class="hotel1">
        <div class="axum9">
          <img src="<?php 
       echo  $inner_array['image'] ;
     ?>" alt="">
        </div>
        <div class="axum10">
          <h1 class="title"><?php 
       echo  $inner_array['hotel_name'] ;
     ?></h1>
          <p><?php 
       echo  $inner_array['description'] ;
     ?></p>
            <div class="rating" style="font-size: 25px;">
              <span style="color: #ffca08;">★</span>
              <span style="color: #ffca08;">★</span>
              <span style="color: #ffca08;">★</span>
              <span style="color: #ddd;">★</span>
              <span style="color: #ddd;">★</span>
          </div>
        
          <div>
           <p>
            price  <span class="hprice"><?php 
       echo $inner_array['price'] ;
     ?></ </span>br
           </p> 
          </div>
    <script type="text/javascript" src="../js/popup.js"></script>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <input type="hidden" name="destination_sender" value="<?php echo  $inner_array['hotel_name'] ;?>">
    <button name="send" class="ca221">Read more</button>
        </form>
   <!-- .php" class="ca221" >BOOK NOW!  </a> -->
          <!-- onclick="goToPage1()" -->
        </div>
      </div>
      <?php endforeach;
      ?>
    
    <div class="axum7">

    <?php  if(!$rows) 
         echo '<h1>no hotel availbale for this place<h1>';
?>
    </div>
      <h2>
        for Information you can visit  hotels official website
      </h2>
      <ul>

      <?php foreach ( $tour_hotel_db as $inner_array) :?>
        <li><span><a href=""> <?php 
       echo  $inner_array['hotel_name'] ;
     ?>  <hr></span><img src="../image/next2.png" alt=""></a></li>

      <?php endforeach;?>  

        <!-- <li><a href=""> Armah International Hotel <img src="../image/next2.png" alt=""></a></li>
        <hr>
        <li><a href=""> Armah International Hotel <img src="../image/next2.png" alt=""></a></li>
        <hr>
        <li><a href=""> Armah International Hotel <img src="../image/next2.png" alt=""></a></li>
        <hr>
        <li><a href=""> Armah International Hotel <img src="../image/next2.png" alt=""></a></li>
        <hr>
        <li><a href=""> Armah International Hotel <img src="../image/next2.png" alt=""></a></li>
        <hr> -->
      </ul>
    </div>
   </div>
      <div class="price">
        <h1>Departure dates and prices</h1>
        <p>spacial offer: come with your family and get 20% off for couples </p>
        <div>
          <table>
            <tr>
              <th>Departure date</th>
              <th>price</th>
              <th>Availablity</th>
              <th>offer</th>
            </tr>
            <tr>
              <td>04 october</td>
              <td>800 birr</td>
              <td>Two rooms</td>
              <td>Disconunt for honeymoon</td>
            </tr>
            <tr>
              <td>04 october</td>
              <td>800 birr</td>
              <td>Two rooms</td>
              <td>Disconunt for honeymoon</td>
            </tr>
            <tr>
              <td>04 october</td>
              <td>800 birr</td>
              <td>Two rooms</td>
              <td>Disconunt for honeymoon</td>
            </tr>
            <tr>
              <td>04 october</td>
              <td>800 birr</td>
              <td>Two rooms</td>
              <td>Disconunt for honeymoon</td>
            </tr>
            <tr>
              <td>04 october</td>
              <td>800 birr</td>
              <td>Two rooms</td>
              <td>Disconunt for honeymoon</td>
            </tr>

          </table>
        </div>
        <h3>prices:</h3>
        <p>Prices are per person based on two people sharing a twin or double room.</p>
        <h3>Deposit :</h3>
        <p>5,000ETB per person if travelling in economy class, <br>
          10,000ETB if travelling in World Traveller class.</p>
        <h3>Flight-Upgrades :</h3>
        <p>Ethiopian Airlines upgrade to World Traveller Plus from 2999ETB per person.</p>
        <h3>Visa Information:</h3>
        <p>
          A visa is not required for travel to Axum. please refer to our FAQ’s page.</p>
        <h3>Inportant Infromation:</h3>
        <p>Our holiday prices are subject to fuel surcharges and the availability of <br>
          flights in the lowest fare booking class. The correct price will always <br>
          be confirmed to you before you book, and once you have booked, our Price <br>
          Promise will guarantee there will be no further increases. For full terms <br>
          and conditions see our terms and conditions page.</p>
      </div>
      <div class="included">
        <h2>So much Included </h2>
        <p>At Ethio tour, we offer a leisurely and flexible tour of Axum with so much included in the price. <br>
          Your scheduled international flights, overseas transfers, expertly chosen hotels, daily breakfast, <br>
          experienced local tour managers and knowledgeable guides, and many amazing excursions are all included.</p>
        <h2>Flights with the Famous Ethiopian Airlines
        </h2>
        <ul>
          <li>Economy clas flights with ethiopian airlines from Gondar,Addis Ababa,Wollo,Mekelle</li>
          <li>All domestic flights in Ethiopia</li>
        </ul>
        <h2>Carefully Selected Hotels
        </h2>
        <ul>
          <li>First class and deluxe hotels in great locations</li>
          <li>All hotel porterage</li>
          <li>Applicable hotel taxes</li>
        </ul>
        <h2>Unforgottable Experiences
        </h2>
        <ul>
          <li>Sightseeing tours Axum city</li>
          <li>Visit Axum Obliques</li>
          <li>slighsseeing the culture</li>
        </ul>
        <h2>On The Ground
        </h2>
        <ul>
          <li>Services of an experienced Tour Manager and driver</li>
          <li>All overseas transfers</li>
          <li>Modern, air-conditioned coaches throughout</li>
        </ul>
      </div>
    </div>
    <div>
      <div>
        
      </div>
      <div class="axum11">
        <h1>Make an Enquiry</h1>
        <div class="axum12">
          <div><img src="../image/phone.jpg" alt="">
          </div>
          <div>
            <h2>Call Us Today</h2>
            <p>to book or make an<br> enquriy call free on</p>
            <h2>09 48 48 48 209 </h2>
          </div>
        </div>
        <div class="axum13">
          <div><img src="../image/email.png" alt="">
          </div>
          <div>
            <h2>Email Us</h2>
            <p>to book or make an<br> enquriy call free on</p>
            <h2>09 48 48 48 209 </h2>
          </div>
        </div>
        <div class="axum14">
          <div><img src="../image/telegram.png" alt="">
          </div>
          <div>
            <h2>Call Us Today</h2>
            <p>to book or make an<br> enquriy call free on</p>
            <h2>09 48 48 48 209 </h2>
          </div>
        </div>
        <div class="axum15"> <a href="../html/contact-us.php">Contact-Us</a></div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <?php 
   include 'footer.php';
   ?>
</body>
</html>