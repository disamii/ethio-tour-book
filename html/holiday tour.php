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
                  $execut_tour_sql= "select  *FROM tour_destination  WHERE 
                  destination_name= '$send' AND type='Holiday'" ;
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
                ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOLIDAY TOUR</title>
    <link rel="stylesheet" href="../css/holiday.css">
    <link rel="stylesheet" href="../css/home page2.css">
</head>
<body>
<?php 
   include 'header.php';
   ?>
    <div class="grid-container">
        <div class="topic">
            <div>
                <h2>
                    ETHIOPIAN FETSIVAL TOUR
                </h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="timket item">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <input type="hidden" name="destination_sender" value="<?php  echo 'timket';?>">
    <button name="send" class="ca221">Read more</button>
   </form>            <div><img src="../image/abenezer-shewaga-Z1HjL3UH-Ic-unsplash.jpg" alt="">
            </div>
            <h2>TIMKET</h2>
            <h5>Celebration date 11/6/2016</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor,
                dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula
                massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est
                eleifend mi, non fermentum diam nisl sit amet erat.</p>
        </div>
        <div class="meskel item">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <input type="hidden" name="destination_sender" value="<?php  echo 'Meskel';?>">
    <button name="send" class="ca221">Read more</button>
   </form>
            
            <div><img src="../image/abenezer-shewaga-Z1HjL3UH-Ic-unsplash.jpg" alt="">
            </div>
            <h2>meskel</h2>
            <h5>Celebration date 17/1/2016</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor,
                dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula
                massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est
                eleifend mi, non fermentum diam nisl sit amet erat.</p>
        </div>
    </div>
    <div class="cultural-festival">
        <div>
            <h2> cultural-festival</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor,
            </p>
        </div>
        <div class="festival">
            <div class="irrecha item">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <input type="hidden" name="destination_sender" value="<?php  echo 'Irrecha';?>">
    <button name="send" class="ca221">Read more</button>
   </form>                <div>
                    <img src="../image/gift-habeshaw-h_T9h4IrifE-unsplash.jpg" alt="">
                </div>
                <div class="description">
                    <h2>IRRECHA</h2>
                    <h5>Celebration date 17/1/2016</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus
                        tortor,
                        dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas
                        ligula
                        massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie,
                        enim est
                        eleifend mi, non fermentum diam nisl sit amet erat.</p>
                </div>
            </div>
            <div class="ashendaye item">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <input type="hidden" name="destination_sender" value="<?php  echo 'Ashenda';?>">
    <button name="send" class="ca221">Read more</button>
   </form>                <div>
                    <img src="../image/culutre7.jpg" alt="">
                </div>
                <div class="description">
                    <h2>ASHENDEYE</h2>
                    <h5>Celebration date 17/1/2016</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus
                        tortor,
                        dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas
                        ligula
                        massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie,
                        enim est
                        eleifend mi, non fermentum diam nisl sit amet erat.</p>
                </div>
            </div>
            <div class="fiche-chembelala item">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <input type="hidden" name="destination_sender" value="<?php  echo 'fiche_chembelal';?>">
    <button name="send" class="ca221">Read more</button>
   </form>                <div>
                    <img src="../image/eyoel-kahssay-mGGCBXdKDY0-unsplash.jpg" alt="">
                </div>
                <div class="description">
                    <h2>FICHE CHEMBELALA</h2>
                    <h5>Celebration date 17/1/2016</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus
                        tortor,
                        dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas
                        ligula
                        massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie,
                        enim est
                        eleifend mi, non fermentum diam nisl sit amet erat.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="other-container">
        <div>
            "  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor,
            dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula
              massa, varius a, semper congue, euismod non, mi."   
        </div>
        <div class="other-inner">
            <div class="debre-tabor item">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <input type="hidden" name="destination_sender" value="<?php  echo 'Debre tabor';?>">
    <button name="send" class="ca221">Read more</button>
   </form>                <div>
                    <img src="../image/yonatan-tesfaye-3WHmKSHNtww-unsplash.jpg" alt="">
                </div>
                <div class="description">
                    <h2>NEW YEAR</h2>
                    <h5>Celebration date 17/1/2016</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus
                        tortor,
                        dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas
                        ligula
                        massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie,
                        enim est
                        eleifend mi, non fermentum diam nisl sit amet erat.</p>
                </div>
            </div>
            <div class="new-year item">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <input type="hidden" name="destination_sender" value="<?php  echo 'New year';?>">
    <button name="send" class="ca221">Read more</button>
   </form>                <div> <img src="../image/abenezer-shewaga-bl85Vq8HWOA-unsplash.jpg" alt="">
                </div>
                <div class="description">
                    <h2>DEBRE TABOR</h2>
                    <h5>Celebration date 17/1/2016</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus
                        tortor,
                        dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas
                        ligula
                        massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie,
                        enim est
                        eleifend mi, non fermentum diam nisl sit amet erat.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php 
   include 'footer.php';
   ?>
</body>
</html>