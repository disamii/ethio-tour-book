<?php
// $success = 0;
// $user = 0;
// if($_SERVER['REQUEST_METHOD'] == 'POST'){
  session_start();
if (!isset($_SESSION['user_id'])) {
  header('Location:login.php?redirect='. urlencode($_SERVER['REQUEST_URI']));
  exit;
}

$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABaSE = 'bookforms';
$conn = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABaSE);
      if(!$conn)
      {
        die(mysqli_error($conn).'error occured'); 
      }
      $destination='';
      $hotel='';
     
      // echo $dest_id_reciev;
      if(isset($_GET['id']))
      {
        $dest_id_reciev=intval($_GET['id']);

      
                  $execut_tour_sql= "select  *FROM hotel  WHERE 
                  hotel_id='$dest_id_reciev'" ;
                  $result=mysqli_query($conn,$execut_tour_sql);
                  $tour_hotell_data=$result->fetch_all(MYSQLI_ASSOC);
                  // var_dump($tour_hotell_data);
                  $id_of_dest= $tour_hotell_data[0]['destination_id'];
                  $hotel= $tour_hotell_data[0]['hotel_name'];
                  $execut_tour_sql= "select  *FROM tour_destination  WHERE 
                  destination_id= '$id_of_dest'" ;
                  $result=mysqli_query($conn,$execut_tour_sql);
                  $tour_destination_data=$result->fetch_all(MYSQLI_ASSOC);
                  $destination=$tour_destination_data[0]['destination_name'];
                //  echo $destination;
                //  echo $hotel;
          
      }
else{

    }

if(isset($_POST['submit']))
{         
                $username=$_POST['name'];
                $destination=$_POST['destination'];
                $hotel=$_POST['hotel'];
                // $phone=$_POST['phone'];
                // $email=$_POST['email'];
                $check=$_POST['check-in'];
                $check2=$_POST['check-out'];
                $room=$_POST['room-type'];
                $howmany=$_POST['guests'];
                // var_dump($destination);
                // finding  number of night  client spent 
                $date1 = new DateTime($_POST['check-in']);
                $date2 = new DateTime($_POST['check-out']);
                $interval = $date1->diff($date2);
                $no_of_nights =$interval->format('%a '); 
                // registeration from
                $spl= "Select * from registration4 where
                Name ='$username'AND Destination='$destination'";
                $result = mysqli_query($conn, $spl);
                if($result)
                {
                   $num = mysqli_num_rows($result);
                      if($num>0 )
                  //     {
                     echo "";
                  $again='you are registerd fo the '.$num.'time';
                      }
                      // {
                        //   $sqll = "insert into registration4 (Name, Destination,Hotel,Phone,Guest,Room,Checkin,Checkout)
                        // values('$username', ' $destination',' $hotel','$phone', '$howmany','$room','$check','$check2')";
                      
                      // }
                // }
                // checking  if the destination is availbe  for the data base
                $check_dest="Select * from tour_destination where
                destination_name ='$destination'";
                $query_of_dest_check = mysqli_query($conn, $check_dest);
                $num_row=mysqli_num_rows($query_of_dest_check);
                    if($num_row>0)
                    {
                          $price_of_tour=$query_of_dest_check->fetch_all( MYSQLI_ASSOC);
                          $price_tour=  $price_of_tour[0]["price"];
                          $destination_id=$price_of_tour[0]["destination_id"];
                                // checking if the  hotel exist at that destination;
                                $check_hotel="Select * from hotel where
                            hotel_name ='$hotel'";
                                $query_of_hotel_check = mysqli_query($conn, $check_hotel);
                                $num_row_hotel=mysqli_num_rows($query_of_hotel_check);
                                if($num_row_hotel>0)
                                {
                                            $hotel_row_assoc=$query_of_hotel_check->fetch_all( MYSQLI_ASSOC);
                                            echo $hotel_row_assoc[0]["no_of nights"];

                                            //check if foriegn key and primary key are the same
                                            if( $destination_id ===$hotel_row_assoc[0]["destination_id"])
                                            {
                                                  $price_hotel= $hotel_row_assoc[0]["price"];
                                                      if( $howmany<=$hotel_row_assoc[0]["availbe_for"])
                                                      {
                                                                if($no_of_nights<= $hotel_row_assoc[0]["no_of nights"])
                                                                {
                                                                  header('location:bankingbook.php' );
                                                                  session_start();
                                                                  $_SESSION['tour_price']=$price_tour*$howmany*$no_of_nights-(0.03*$no_of_nights);
                                                                     $_SESSION['hotel_price']=  $price_hotel*$howmany*$no_of_nights-(0.03*$no_of_nights);
                                                                     $_SESSION['booksql']="insert into registration4 (Name, Destination,Hotel,Guest,Room,Checkin,Checkout)
                                                                     values('$username', ' $destination',' $hotel', '$howmany','$room','$check','$check2')";                                                                }
                                                                else
                                                                {
                                                                  $error_message_day ='the left place  is availbe only for '.$hotel_row_assoc[0]["no_of nights"].'nights';
                                                                }
                                                      }
                                                      else{
                                                        $error_message_guest='the left place  is only for '.$hotel_row_assoc[0]["availbe_for"].'people';
                                                        }
                                            }
                                            else
                                            {
                                              $error_message_hotel='sorry the hotel  you enterd is at this destination tour is not availble. $destination_id';

                                            }
                                }
                                else{
                                  $error_message_hotel='sorry the hotel  you enterd is at this tour is not availble';

                                }
                    }
                    else
                    {
                      $error_message_des = 'Sorry, this destination tour is not available.';
                     
                    }

                 

 }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>money transaction</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css" /> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script> -->
    <link rel="stylesheet" href="../css/home page2.css">
    <link rel="stylesheet" href="../css/money transcation form.css">
<style>
    .error-message {
  display: none;
  color: red;
  font-size: 14px;
  margin-top: 5px;
}

.error-message.show {
  display: block;
}
</style>

</head>
<body >
   <!-- onload="setContent()">  -->
    <!-- <script src="../js/Untitled-1.js"></script> -->
    <script src="../jss/book validation.js"></script>
    <?php 
   include 'header.php';
   ?> 
      
    <h2 class="heading">
        <div>
        <span>B</span>
        <span>O</span>
        <span>O</span>
        <span>K</span>
        <span class="space"></span>
        <span>N</span>
        <span>O</span>
        <span>W</span>
    </div>
    </h2>

    <form   method='POST' action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" >
        <div class="input-container error">
            <label for="name">USER NAME:</label><br>
            <input type="text" id="name" name="name"  placeholder="Enter your full name" 
            oninput=" namee();"  >
            <p id="warning1"></p>
        </div>
        <label for="destination">Destination</label><br>
        <input type="text" id="destination"  placeholder="Choose your destination"   name="destination" value ="<?php if($destination){echo$destination; }?>"
        oninput="destinationn();"  >
        <p class="error-message <?php if(isset($error_message_des)) echo 'show'; ?>"><?php if(isset($error_message_des)) echo $error_message_des; ?></p>
        <p id="warning2"></p>      
        <label for="hotel">HOTEL</label><br>
        <input type="text" id="hotel" placeholder="choose your hotel"  name="hotel" value ="<?php if($destination){echo$hotel; }?>"
          oninput="hotell();"  >
          <p class="error-message <?php if(isset($error_message_hotel)) echo 'show'; ?>"><?php if(isset($error_message_hotel)) echo $error_message_hotel; ?></p>
        <p id="warning3"></p>
        
        <!-- <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" placeholder="someone123@example.com"
         oninput="emaill();"  >
         <p id="warning4"></p>
         <div> -->
            <!-- <label for="phone">Phone Number:</label><br>
<input type="tel" id="phone" name="phone" placeholder="Phone Number" oninput="phonee()" >
<p id="warning5"></p>
<div id="country-code"></div> <br>
<script>
    var input = document.querySelector("#phone");
    var countryCode = document.querySelector("#country-code");
    var iti = window.intlTelInput(input, {
      preferredCountries: ["et", "us"],
      separateDialCode: true,
      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
    });
    iti.setCountry("et");
    countryCode.appendChild(iti.getFlagElement());
    countryCode.appendChild(iti.getDialCodeElement());
    </script>
  </div> -->
        <label for="check-in">CHECK-IN DATE:</label><br>
        <input type="date" id="check-in" name="check-in"
        oninput="date_in()"    >
        <p id="warning6"></p>
        <label for="check-out">CHECK-OUT DATE:</label> <br>
        <input type="date" id="check-out" name="check-out"  
        oninput="date_out();"  >
        <p class="error-message <?php if(isset($error_message_day)) echo 'show'; ?>"><?php if(isset($error_message_day)) echo $error_message_day; ?></p>
        <p id="warning7"></p>
        <label for="room-type">ROOM TYPE:</label> <br>
        <select id="room-type" name="room-type">
            <option value="none">none</option>
          <option value="single">Single</option>
          <option value="double">Double</option>
          <option value="suite">Suite</option>
        </select>
        <label for="guests"   >HOW MANY</label><br>
        <input type="text" name="guests" id="guests" placeholder="number of guest" 
        oninput="guest();" >
        <p class="error-message <?php if(isset($error_message_guest)) echo 'show'; ?>"><?php if(isset($error_message_guest)) echo $error_message_guest; ?></p>
        <p id="warning9"></p>
       </div>
  
       <button type ='submit' name='submit'         onclick="validateForm()"
 
        class="submit">
    
          submit</button> 
        </div>
    </form>
    <?php 
   include 'footer.php';
   ?>
</body>
</html>