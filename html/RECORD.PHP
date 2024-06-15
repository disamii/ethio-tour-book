<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "bookforms"; 
$conn = new mysqli($servername, $username, $password, $dbname); 
if ($conn->connect_error) { 
  die("Connection failed: " . $conn->connect_error); 
}
session_start();
if (!isset($_SESSION['user_id'])) {
  header('Location:login.php?redirect='. urlencode($_SERVER['REQUEST_URI']));
  exit;
} 
$sql = "SELECT * FROM history" ;
$result = $conn->query($sql);
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
  
  <title>ETHIOTOUR ADMIN</title>
  <style>
   
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
      .button:hover {
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

  </style>
</head>
<body>
  

<?php include('nav.php');?>

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
                <th>S.No.</th>
                <th>Payer</th>
                <th>Payer Acc ID</th>
                <th>Payee</th>
                <!-- <th>Payee Acc ID</th> -->
                <th>Amount</th>
                <th>Date & Time</th>
                <th>manage</th>
            </tr>
  </thead>
  <tbody>
        
        <?php

    while($row = $result->fetch_assoc()) { 
      ?>
      <tr>
         <td><?php echo $row['sno']; ?></td>
        <td><?php echo $row['payer']; ?></td>
        <td><?php echo $row['payerAcc']; ?></td>
        <td><?php echo $row['payee']; ?></td>
        <td><?php echo $row['amount']; ?></td>
        <td><?php echo $row['time']; ?></td>
        <td>
         
          <a href="delete2.php?id=<?php echo $row["sno"] ?>" class="link-dark">&#10060;<i class="fa-solid fa-trash fs-5"></i></a>
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


<body>

</html>
