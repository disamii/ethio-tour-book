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
      $excute_tour_sql="select *from  travel_package";
      $result=mysqli_query($conn,$excute_tour_sql);
      $tour_package_bd=$result->fetch_all( MYSQLI_ASSOC);
    //   print_r( $tour_package_bd);
      $count = 0;
      foreach ( $tour_package_bd as $inner_array) {
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
    <title>TRAVEL PACKAGES</title>
    <link rel="stylesheet" href="../css/travel packages and hotel.css">
    <link rel="stylesheet" href="../css/home page2.css">
    
</head>
<body>
    <link rel="import" href="../html/header.html">
    <?php 
   include 'header.php';
   ?>
      
    <div class="th">
        <h1>Tour Package list</h1>
    </div>
<div class="tp">
        <div class="tp1">
            <h3>Availble tour package lists</h3>
            <p><?php echo  $count;?> result found </p>
        </div>
        <div class="tp2">
            <a href="../html/adwa.html" class="ca221">BOOK NOW!</a>
            <img src="../image/yonatan-tesfaye-3WHmKSHNtww-unsplash.jpg"  id="adwa"alt="">
            <span class="tp21">
                <div class="tp211">
                    <h3> Adwa package</h3>
                </div>
                <div class="rating" style="font-size: 25px;">
                    <span style="color: #ffca08;">★</span>
                    <span style="color: #ffca08;">★</span>
                    <span style="color: #ffca08;">★</span>
                    <span style="color: #ddd;">★</span>
                    <span style="color: #ddd;">★</span>
                </div>
                <hr style="margin:25px; background-color:rgb(175, 33, 33); height:2px;">
                <div class="tp212">
                    <div>
                        <h5 class="tp2121">days to enjoy:</h5>
                        <p> 30 days </p>
                    </div>
                    <div>
                        <h5 class="tp2121">intail place:</h5>
                        <p> Addis Ababa</p>
                    </div>
                    <div>
                        <h5 class="tp2121">final point:</h5>
                        <p> Final</p>
                    </div>
                    <div>
                        <h5 class="tp2121">availble for :</h5>
                        <p> any people</p>
                    </div>
                </div>
                <hr style="margin:25px; background-color:aqua; height:2px;">
                ltrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci
                nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis
                arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat
                libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede. Praesent blandit
                odio eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus
                orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede pellentesque
            </span>
        </div>
        <?php foreach ( $tour_package_bd as $inner_array) :?>
<div class="tp2">
            <a href="../html/money transaction.html" class="ca221">BOOK NOW!</a>
            <img src="<?php echo $inner_array['image_path'];?>" alt="" height="240px">
            <span class="tp21">
                <div class="tp211">
                    <h3> <?php echo $inner_array['package_name']; ?></h3>
                </div>
                    
                <div class="rating" style="font-size: 25px;">
                    <span style="color: #ffca08;">★</span>
                    <span style="color: #ffca08;">★</span>
                    <span style="color: #ffca08;">★</span>
                    <span style="color: #ddd;">★</span>
                    <span style="color: #ddd;">★</span>
                  <span class="date"> date: <?php echo $inner_array['intial_date']; ?>  </span>  
                </div>
                <hr style="margin:25px; background-color:rgb(175, 33, 33); height:2px;">
                <div class="tp212">
                    <div>
                        <h5 class="tp2121">days to enjoy:</h5>
                        <p> <?php echo $inner_array['numbers _of_days']; ?>days </p>
                    </div>
                    <div>
                        <h5 class="tp2121">intail place:</h5>
                        <p> <?php echo $inner_array['intial_point']; ?></p>
                    </div>
                    <div>
                        <h5 class="tp2121">final point:</h5>
                        <p> <?php echo $inner_array['dest_point']; ?></p>
                    </div>
                    <div>
                        <h5 class="tp2121">availble for :</h5>
                        <p> <?php echo $inner_array['availble _for']; ?> people</p>
                    </div>
                </div>
                <hr style="margin:25px; background-color:aqua; height:2px;">
                    <p class="descrpition">
                    <?php
                        echo $inner_array['desrciption']; 
                    ?> </p>
              
            </span>
        
        </div>
        <?php endforeach;?>
       
       
</div>
   
   



    
    <?php 
   include 'footer.php';
   ?>
</body>
</html>
<!-- ltrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci
                nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis
                arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat
                libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede. Praesent blandit
                odio eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus
                orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede pellentesque 
            -->