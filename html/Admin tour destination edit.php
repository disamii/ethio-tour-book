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
      $excute_tour_sql="select *from  tour_destination";
      $result=mysqli_query($conn,$excute_tour_sql);
      $tour_destination_bd=$result->fetch_all( MYSQLI_ASSOC);
    //   print_r( $tour_package_bd);
      $count = 0;
      foreach ( $tour_destination_bd as $inner_array) {
        if (is_array($inner_array)) {
          $count++;
        }
      }
      if(isset($_POST['delete']))
      {
                $delete= $_POST['delete_id'];
                  $executee= "DELETE FROM tour_destination  WHERE 
                  destination_id ={$delete} ";
                  if(mysqli_query($conn,$executee))
                  {
                    header('location:Admin tour destination edit.php' );
                  }
                  else{
                    die('error');
                  }
                
      
      
      }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <a href="Admin tour.php" class="button" style="background-color: #89AAC3; color:blue
">  Go to TOUR ADMIN</a>
    <title> List of Tour destination</title>
    <style>
            .button {
              position:fixed;

              background-color: #89AAC3;
        color: #0A1334;
        border: none;
        border-radius: 5px;
        padding: 10px;
        cursor: pointer;
        display: block;
        margin: 0 auto;
        max-width: 200px;
        text-align: center;
        margin-bottom: 20px;
        text-decoration: none;
      }
      .button:hover {
        background-color: #0A1334;
        color: #89AAC3;
        transition: all 0.3s ease-in-out;
      }
      body {
        background-color: #0A1334;
        color: #89AAC3;
        font-family: Arial, sans-serif;
      }
      h1 {
        text-align: center;
      }
      table {
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 20px;
      }
      th, td {
        text-align: left;
        padding: 8px;
      }
      th {
        background-color: #2D4356;
        color: #89AAC3;
      }
      tr:nth-child(even) {
        background-color: #89AAC3;
        color: #0A1334;
      }
      tr:hover {
        background-color: #0A1334;
        color: #89AAC3;
        transition: all 0.3s ease-in-out;
      }
      .button {
        /* background-color: #89AAC3; */
        background-color:inherit;
        color: inherit;
        border: none;
        border-radius: 5px;
        padding: 10px;
        cursor: pointer;
        margin-right: 10px;
      }
      .button:hover {
        background-color: #0A1334;
        color: #89AAC3;
        transition: all 0.3s ease-in-out;
      }
      .edit-sign, .delete-sign {
        font-size: 20px;
        vertical-align: middle;
      }
      .edit-sign {
        color: green;
        margin-right: 5px;
      }
      .delete-sign {
        color: red;
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
    <h1>  <?php echo  $count;?> List Of Tour Destination Are Availble</h1>
    <table>
      <thead>
        <tr>
          <th>Destination  ID</th>
          <th>Destination Name</th>
          <th> Location</th>
          <th>Type Of Tour</th>
          <th>Price</th>
          <th>Description</th>
          <th>Image</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ( $tour_destination_bd as $inner_array) :?>
        <tr>
          <td>
            <?php echo $inner_array['destination_id']; ?>
          </td>
          <td>  
            <?php echo $inner_array['destination_name']; ?>
          </td>
          <td>
             <?php echo $inner_array['location']; ?>
          </td>
          <td>
             <?php echo $inner_array['type']; ?>
          </td>
          <td>
            $  <?php echo $inner_array['price']; ?>
          </td>
          <td>
          <?php
        //    echo $inner_array['desrciption']; 
           ?>  
          description
        </td>
          <td>
          <?php echo $inner_array['image'];?>
          </td>
          <td>
            <button class="button"><span class="edit-sign">&#9998;</span>Edit</button></td>
          <td>  
            <Form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
                     <input type="hidden" name="delete_id" value=" <?php echo $inner_array['destination_id']; ?>"> 
                    <button class="button"  name="delete"><span class="delete-sign">&#10060;</span>Delete</button>
            </form>
        </td>
    </td>
    </tr>
    <?php endforeach;?>