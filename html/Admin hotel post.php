<?php
// session_start();
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
      if(isset($_POST['submit']))
      {
          // $name=mysqli_real_escape_string($conn, $_POST['name']);
                $hotel_name= $_POST['hotel_name'];
                $location=$_POST['location'];
                $number_of_nights=$_POST['number_of_nights'];
                $number_of_people=$_POST['number_of_people'];
                $date=$_POST['date'];
                $price=$_POST['price'];
                $description=$_POST['description'];
                $filename= $_FILES["file"]["name"];
                $tempname= $_FILES["file"]["tmp_name"];
                $folder = "database/".$filename;
                move_uploaded_file($tempname,$folder);
                $excute_hotel_sql="select *from  tour_destination where location ='$location'";
                $result=mysqli_query($conn,$excute_hotel_sql);
                $tour_destination_db=$result->fetch_all( MYSQLI_ASSOC);
                $destination_id=$tour_destination_db[0]['destination_id'];    
                  $insertion= "INSERT INTO `hotel` (`hotel_name`, `destination_id` ,`no_of nights`, `location`,  `availbe_for`, `intial_date`, `price`,  `description`, `image`)VALUES ('$hotel_name','$destination_id','$number_of_nights','$location',   '$number_of_people','$date','$price', '$description','$folder')";
                  if(!mysqli_query($conn,$insertion)){
                    echo "something went wrong";
                }
                else{
                  echo 'succesfully posted';
                }
               

                
      }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title> Hotel Post Form</title>
    <style>
      body {
        background-color: #0A1334;
        color: #89AAC3;
        font-family: Arial, sans-serif;
      }
      h1 {
        text-align: center;
      }
      form {
        max-width: 600px;
        margin: 0 auto;
      }
      label {
        display: block;
        margin-bottom: 10px;
      }
      input[type="text"],   input[type="date"],input[type="file"], textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: none;
        border-radius: 5px;
        background-color: #2D4356;
        color: #89AAC3;
      }
      input[type="submit"] {
        background-color: #89AAC3;
        color: #0A1334;
        border: none;
        border-radius: 5px;
        padding: 10px;
        cursor: pointer;
      }
      input[type="submit"]:hover {
        background-color: #0A1334;
        color: #89AAC3;
        transition: all 0.3s ease-in-out;
      }
      .buttonn {
        background-color: #89AAC3;
        color: #0A1334;
        border: none;
        border-radius: 5px;
        padding: 10px;
        cursor: pointer;
        display: block;
        /* margin: 0 auto; */
        max-width: 200px;
        text-align: left;
        margin-bottom: 20px;
        text-decoration: none;
        display:flex;
        /* align-items:left; */

      }
      .buttonn:hover {
        background-color: #0A1334;
        color: #89AAC3;
        transition: all 0.3s ease-in-out;
      }
    </style>
  </head>
  <body>
  <a href="Admin tour.php" class="buttonn">Go TO Admin Tour</a>
    <h1>Hotel Post Form</h1>
    <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>"  enctype="multipart/form-data">
      <label for="package_name">Hotel Name</label>
      <input type="text" id="package_name" name="hotel_name"   required>
      
      <label for="initial_place">Location</label>
      <input type="text" id="initial_place" name="location"   required>

      
      <label for="number_of_nights">Days Availble</label>
      <input type="text" id="number_of_nights" name="number_of_nights"   required>
      
      <label for="number_of_people">Number of People</label>
      <input type="text" id="number_of_people" name="number_of_people"   required>
      
      <label for="date">Date</label>
      <input type="date" id="date" name="date"   required>
      
      <label for="price">Price</label>
      <input type="text" id="price" name="price"    required>
      
      <label for="description">Description</label>
      <textarea id="description" name="description" rows="5"  ></textarea>
      
      <label for="image">Image</label>
      <input type="file" name="file" id="file">
      
      <input type="submit" value="Submit" name=" submit">
    </form>
  </body>
</html>
