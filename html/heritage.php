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
      $excute_tour_sql="select *from tour_destination where  type='Heritage'";
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
                // echo $send;
                  $execut_tour_sql= "select  *FROM tour_destination  WHERE 
                  destination_name= '$send' AND type='Heritage'" ;

                  $result=mysqli_query($conn,$execut_tour_sql);
    
                  $tour_destination_data=$result->fetch_all(MYSQLI_ASSOC);
                //  var_dump($tour_destination_data);
                $id=$tour_destination_data[0]['destination_id'];
                 if(mysqli_query($conn,$execut_tour_sql))
                  {
                    // echo $id;
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HERITAGE TOUR</title>
    <link rel="stylesheet" href="../css/heritage.css">
    <link rel="stylesheet" href="../css/home page2.css">
</head>
<?php 
   include 'header.php';
   ?>
<body>
    <div class="ca1">
        <div>
            <h3> HERITAGE TOUR</h3>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
        </div>
    </div>
    </div>
    <?php foreach ( $tour_package_bd as $inner_array) :?>
    <div class="container">
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <input type="hidden" name="destination_sender" value="<?php  echo $inner_array['destination_name'];?>">
    <button name="send" class="ca221">Read more</button>
        </form>		        
          <div>
            <h1><?php echo $inner_array['destination_name']; ?></h1>
            <img src="<?php echo $inner_array['image']; ?>">
        </div>
       <div>
       <P>
        <?php echo $inner_array['description']; ?>
        </p>
    </div>
    
    </div>
    <?php endforeach ;?>

    <?php 
   include 'footer.php';
   ?>
</body>
</html>