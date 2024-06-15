
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
      $excute_hotel_sql="select *from  hotel";
      $result=mysqli_query($conn,$excute_hotel_sql);
      $hotel_db=$result->fetch_all( MYSQLI_ASSOC);
    //   print_r( $tour_package_bd);
      $count = 0;
      foreach ( $hotel_db as $inner_array) {
        if (is_array($inner_array)) {
          $count++;
        }
      }

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hotels</title>
    <link rel="stylesheet" href="../css/hotels.css">  
    <link rel="stylesheet" href="../css/home page2.css">
    <style>
        body
        {
            background:#89AAC3;
        }
    </style>
</head >
<body>
<?php 
   include 'header.php';
   ?>
      
    <div class="ht1">
        <div class="ht11">
            <h2>Hotels</h2>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
        </div>
    </div>
    <div class="ht2">
        <div class="ht21">
            <div><img src="../image/sara-dubler-Koei_7yYtIo-unsplash.jpg" alt="">
                <div> Lorem ipsum dolor sit ame</div>
            </div>
        </div>
        <div class="ht21">
            <div> <img src="../image/marten-bjork-n_IKQDCyrG0-unsplash.jpg" alt="">
                <div> Lorem ipsum dolor sit ame</div>
            </div>
        </div>
        <div class="ht21">
            <div><img src="../image/manuel-moreno-DGa0LQ0yDPc-unsplash.jpg" alt="">
                <div> Lorem ipsum dolor sit ame</div>
            </div>
        </div>
    </div>
    <div class="slider">
        <input type="radio" id="slide1" name="ht3-container" checked>
        <input type="radio" id="slide2" name="ht3-container">
        <!-- <input type="radio" id="slide3" name="ht3-container"> -->
        <!-- <input type="radio" id="slide4" name="ht3-container"> -->
        <div class="slides">
            <div class="slide" id="slide-1">
                <div class="ht3 page1">
                    <div class="ht31 header">
                        <div>
                            Ethio Tour and Travel
                            <br> by Josy and Disami
                        </div>
                    </div>
                    <div class="ht31 text ">
                        <div class="ht311">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus
                            tortor,
                            dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam.
                            Maecenas ligula
                            massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie,
                            enim est
                            eleifend mi, non fermentum diam nisl sit amet erat. Duis semper.
                            Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut
                            in risus
                            volutpat
                        </div>
                    </div>
                    <div class="ht31">
                        <div>
                            <img src="../image/christian-lambert-vmIWr0NnpCQ-unsplash.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide" id="slide-2">
                <div class="ht3 page2">
                    <div class="ht31 header">
                        <div>
                            Ethio Tour and Travel
                            <br> by Josy and Disami
                        </div>
                    </div>
                    <div class="ht31 text ">
                        <div class="ht311">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus
                            tortor,
                            dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam.
                            Maecenas ligula
                            massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie,
                            enim est
                            eleifend mi, non fermentum diam nisl sit amet erat. Duis semper.
                            Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut
                            in risus
                            volutpat
                        </div>
                    </div>
                    <div class="ht31">
                        <div>
                            <img src="../image/gift-habeshaw--C5cJ41YPDg-unsplash.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="controls">
            <label for="slide1"></label>
            <label for="slide2"></label>
        </div>
    </div>
    <div class="ht4-header">
        <h3>
          Amrhaaa Hotel
        </h3>
        <div class="text">
            consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec,
            ultricies sed, dolor
        </div>
    </div>
    <div class="ht4-container">
        <div class="ht4">
        <?php foreach ( $hotel_db as $inner_array) :?>
            <div class="ht41"> <img src="<?php echo $inner_array['image']; ?>" alt="" width="5500px">
                <div class="rating" style="font-size: 25px;">
                    <span style="color: #ffca08;">★</span>
                    <span style="color: #ffca08;">★</span>
                    <span style="color: #ffca08;">★</span>
                    <span style="color: #ddd;">★</span>
                    <span style="color: #ddd;">★</span>
                </div>
                <a href="" class="ca221">BOOK NOW!</a>
                <div class="text"> <?php echo $inner_array['hotel_name']; ?></div>
            </div>
            <?php endforeach;?>
    </div>
    <?php 
   include 'footer.php';
   ?>
</body>
</html>