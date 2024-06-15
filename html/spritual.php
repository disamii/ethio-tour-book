<?php
$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABaSE = 'bookforms';
$conn = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABaSE);
      if(!$conn)
      {
        die(mysqli_error($conn).'error occured  there is no conection'); 
      }
      $excute_tour_sql="select *from tour_destination where  type='Spritual'";
      $result=mysqli_query($conn,$excute_tour_sql);
      $tour_package_bd=$result->fetch_all( MYSQLI_ASSOC);
      // print_r( $tour_packae_bd);
      $count = 0;
      foreach ( $tour_package_bd as $inner_array) {
        if (is_array($inner_array)) {
          $count++;
        }
      }
      if(isset($_POST['send']))
      {
                $send=($_POST['destination_sender']);
                echo $send;
                  $execut_tour_sql= "select  *FROM tour_destination  WHERE 
                  destination_name= '$send' AND type='Spritual'" ;

                  $result=mysqli_query($conn,$execut_tour_sql);
    
                  $tour_destination_data=$result->fetch_all(MYSQLI_ASSOC);
                 var_dump($tour_destination_data);
                $id=$tour_destination_data[0]['destination_id'];
                 if(mysqli_query($conn,$execut_tour_sql))
                  {
                    header("Location: axum.php?id=" . urlencode($id));
                  }
                  else{
                    die('error');
                  }
                }
                ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title> SPRITUAL TOUR</title>
    <link rel="stylesheet" href="../css/spritual.css">
    <link rel="stylesheet" href="../css/home page2.css">
<body>
<?php 
   include 'header.php';
   ?>
    <div class="container-destination">
        <div class="td">
            <div class="light">
                <h1>make your trip <br> unforgettable <br> with <br></h1>
                <P>ETHIO Tour
                </P>
            </div>
        </div>
        <div class="more">
            <h1 class="text-destinations">
             SPRITUAL DESTINATION
            </h1>
            <h2 class="text-description">
                Your peace of mind doesn't
                have to be tied to where everyone else is.</br>
                We have a good number of travel and relocation
                destinations. Take </br>your time and find the perfect
                one for you
            </h2>
        </div>
    </div>
    </div>
    <div class="td1">
        <img src="../image/gheralta-4.jpg" alt="">
        <div class="td12">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
              <input type="hidden" name="destination_sender" value="<?php  echo '';?>">
               <button name="send" class="ca221">Read more</button>
            </form>
            <h3>
            <h1>GHERALTA</h1>
            </h3>
            <p>
            Gerhalta is a wonderful place to visit and explore. Its stunning landscapes,  
            vibrant culture, and diverse attractions make it a great place to visit. Whether you’re looking for  
             a relaxing vacation or a vibrant adventure, Gerhalta is sure to have something for everyone. Gerhalta is a wonderful place to visit and explore. Its stunning landscapes,  
            vibrant culture, and diverse attractions make it a great place to visit. Whether you’re looking for  
             a relaxing vacation or a vibrant adventure, Gerhalta is sure to have something for everyone.
            </p>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
              <input type="hidden" name="destination_sender" value="<?php  echo '';?>">
               <button name="sendd" class="ca22">Read more</button>
            </form>
        </div>
    </div>
    <div class="td2">
        <h3>Lorem ipsum dolor sit amet</h3>
        <div class="td21">
            <div class="td211">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
              <input type="hidden" name="destination_sender" value="<?php  echo '';?>">
               <button name="sendd" class="ca221">Read more</button>
            </form>
                <img src="../image/daniele-levis-pelusi-mtJc-pEfzH4-unsplash.jpg" alt="">
                <p><h3>Lorem ipsum :</h3> dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor</p>
            </div>
            <div class="td211">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
              <input type="hidden" name="destination_sender" value="<?php  echo'';?>">
               <button name="sendd" class="ca221">Read more</button>
            </form>
                <img src="../image/gift-habeshaw-A9pxkpbp3LU-unsplash.jpg" alt="">
                <p><h3>Lorem ipsum :</h3>dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor</p>
            </div>
            <div class="td211">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
              <input type="hidden" name="destination_sender" value="<?php  echo ''?>">
               <button name="sendd" class="ca221">Read more</button>
            </form>
                <img src="../image/alnejashi.jpg" alt="">
                <p><h3>Lorem ipsum :</h3>
                dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor</p>
            </div>
           
            </div>
            <div class="learn">            <a href=""class="learn">learn more</a>
        </div>
        
    </div>
  
    <div class="td4">
         <h2> <?php echo  $count;?>   Top  Religous Destination  to  visit in ETHIOPIA</h2>
        <div>
        <?php foreach ( $tour_package_bd as $inner_array) :?>
        <div class="tp" style="  background-position:10%;background-image: url('<?php echo $inner_array['image'];?>');">

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <input type="hidden" name="destination_sender" value="<?php  echo $inner_array['destination_name'];?>">
    <button name="send" class="ca221">Read more</button>
        </form>
    
    <h3><?php echo $inner_array['destination_name']; ?></h3>
            </div>
            <?php endforeach;?>

        </div>
     
    </div>
    <?php 
   include 'footer.php';
   ?>
</body>
</html>