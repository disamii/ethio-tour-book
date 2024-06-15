<?php
  session_start();
  if (!isset($_SESSION['user_id'])) {
    header('Location:login.php?redirect='. urlencode($_SERVER['REQUEST_URI']));
    exit;
  }$HOSTNAME = 'localhost';
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
                $destination_name= $_POST['destination_name'];
                $location=$_POST['location'];
                $type_of_tour=$_POST['type_of_tour'];
                $price=$_POST['price'];
                $description=$_POST['description'];
                $filename= $_FILES["file"]["name"];
                $tempname= $_FILES["file"]["tmp_name"];
                $folder = "database/".$filename;
                move_uploaded_file($tempname,$folder);
                  $insertion= "INSERT INTO `tour_destination` (`destination_name`, `location`, `type`,  `price`,  `description`, `image`)VALUES ('$destination_name','$location',  '$type_of_tour','$price', '$description','$folder')";
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

    <h1>Tour  Destination Post Form</h1>
    <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>"  enctype="multipart/form-data">
      <label for="package_name">Destination Name</label>
      <input type="text" id="package_name" name="destination_name"   required>
      
      <label for="initial_place">Location</label>
      <input type="text" id="initial_place" name="location"   required>

      
      <label for="number_of_nights">Type Of Tour</label>
      <input type="text" id="number_of_nights" name="type_of_tour"   required>
          
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
