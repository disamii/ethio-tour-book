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
      $excute_tour_sql="select *from  destination_image";
      $result=mysqli_query($conn,$excute_tour_sql);
      $tour_image_bd=$result->fetch_all( MYSQLI_ASSOC);
    //   print_r( $tour_package_bd);
      $count = 0;
      foreach ( $tour_image_bd as $inner_array) {
        if (is_array($inner_array)) {
          $count++;
        }
      }
      if(isset($_POST['submit']))
      {
          // $name=mysqli_real_escape_string($conn, $_POST['name']);
          $destination_name= $_POST['destination_name'];
             
                // $image=$_POST['image'];
                $filename1= $_FILES["file1"]["name"];
                $tempname= $_FILES["file2"]["tmp_name"];
                $folder1 = "database/".$filename1;
                move_uploaded_file($tempname,$folder1);
        //
                $filename2= $_FILES["file2"]["name"];
                $tempname= $_FILES["file2"]["tmp_name"];
                $folder2 = "database/".$filename2;
                move_uploaded_file($tempname,$folder2);
        //
                
                $filename3= $_FILES["file3"]["name"];
                $tempname= $_FILES["file3"]["tmp_name"];
                $folder3 = "database/".$filename3;
                move_uploaded_file($tempname,$folder3);
          //
                $filename4= $_FILES["file4"]["name"];
                $tempname= $_FILES["file4"]["tmp_name"];
                $folder4 = "database/".$filename4;
                move_uploaded_file($tempname,$folder4);
            ///
                $filename5= $_FILES["file5"]["name"];
                $tempname= $_FILES["file5"]["tmp_name"];
                $folder5 = "database/".$filename5;
                move_uploaded_file($tempname,$folder5);
            //
            $excute_tour_sql="select *from  tour_destination where destination_name='$destination_name'";
                  $result=mysqli_query($conn,$excute_tour_sql);
                  $tour_destination_db=$result->fetch_all( MYSQLI_ASSOC);
                  $destination_id=$tour_destination_db[0]['destination_id'];    
                  $insertion= "INSERT INTO `destination_image` (`destination_name`, `destination_id`,`image1`,`image2`,`image3`,`image4`,`image5` )VALUES ('$destination_name','$destination_id','$folder1','$folder2','$folder3','$folder4','$folder5')";
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

    <title> Image Post Form</title>
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

    <h1>image upload Form</h1>
    <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>"  enctype="multipart/form-data">
      <label for="package_name">Destination Name</label>
      <input type="text" id="package_name" name="destination_name"   required>
      <label for="image">Image</label>
      <input type="file" name="file1" id="file">
      <label for="image">Image</label>
      <input type="file" name="file2" id="file">
      <label for="image">Image</label>
      <input type="file" name="file3" id="file">
      <label for="image">Image</label>
      <input type="file" name="file4" id="file">
      <label for="image">Image</label>
      <input type="file" name="file5" id="file">
      <input type="submit" value="Submit" name=" submit">
    </form>
  </body>
</html>

