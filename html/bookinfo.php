<?php
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
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../css/money transcation form.css">
  <!-- <link rel="stylesheet" href="../css/home page2.css"> -->
  <title>ETHIOTOUR ADMIN</title>
  <style>
   
   /* body { */
        /* background-color: #0A1334;
        color: #89AAC3;
        font-family: Arial, sans-serif;
      } */
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
      tr:nth-child(odd) {
        /* background-color: #89AAC3; */
        color: white;
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
      .button:hover  {
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
      body { 
  / background-image: url(../image/admin.jpg); 
  /background-repeat: no-repeat;
  background-size: cover;
  margin: 10%;
  padding: 0%;
}
             
.button {
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
      .button:hover ,
      .buttonn:hover{
        background-color: #0A1334;
        color: #89AAC3;
        transition: all 0.3s ease-in-out;
      }
.buttonn{
  background-color: #89AAC3;
        color: #0A1334;
        border: none;
        border-radius: 5px;
        padding: 10px;
        cursor: pointer;
        /* display: inline; */
        text-decoration: none;
}
.b2{
float:right;
}
  </style>
</head>
<body>
<!-- 
    <a href=" Admin tour package post.php" target="_blank" class="button">Post  Tour Package</a>
    <a href="Admin tour package edit.php"  target="_blank" class="button">View And Edit Tour Package</a>
    <a href="Admin hotel post.php" target="_blank" class="button">Post  Availble Hotel</a>
    <a href="Admin hotel edit.php" target="_blank" class="button"> View And Edit hotel</a> -->


    <nav  style="position: sticky;top: 0; z-index: 999;">
                <ul class="main">
                    
                    <span class="menu">
                    <li class="n"><a href="Admin tour.php"  class="button"> TOUR ADMIN</a>
</li>
                    <li class="n"> <a>
                    <a  href="../html/VIEW-CUSTOMER.PHP"class="button">BANK ADMIN</a>
                        </a></li>
                        <li class="n">
                            <a href="home3.php" class="button">CLIENT</a>
                            </a>
                        </li>
                       </span>
                        <label for="check" class="close-menu"><i class="fas fa-times"></i></label>
                </ul>
            </nav>
            <a href="index2.php" class="buttonn b2">GO back to Admin Dash board</a>
            <a href="add-new.php" class="buttonn">Add New User/Admin</a>

  <div class="container" style="margin-top:100px;">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">UserName</th>
          <th scope="col">Destination</th>
          <th scope="col">Hotel</th>
          <th scope="col">Room</th>
          <th scope="col">Date_in</th>
          <th scope="col">Date_out</th>
          <th scope="col">Manage</th>

        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `registration4`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["Name"] ?></td>
            <td><?php echo $row["Destination"] ?></td>
            <td><?php echo $row["Hotel"] ?></td>
            <td><?php echo $row["Room"] ?></td>
            <td><?php echo $row["Checkin"] ?></td>
            <td><?php echo $row["Checkin"] ?></td>

            <td>
              <a href="edit.php?id=<?php echo $row["id"] ?>" class="link-dark">&#9998;<i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete.php?id=<?php echo $row["id"] ?>" class="link-dark"> &#10060;</span><i class="fa-solid fa-trash fs-5"></i></a>
              <!-- <button class="button"  name="delete"><span class="delete-sign">&#10060;</span>Delete</button> -->
              <!-- <input type="hidden" name="delete_id" value=" <?php 
              // echo $inner_array['hotel_id']; ?>">  -->


            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>





