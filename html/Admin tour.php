
<?php
  session_start();
  if (!isset($_SESSION['user_id'])) {
    header('Location:login.php?redirect='. urlencode($_SERVER['REQUEST_URI']));
    exit;
  }?>

<!DOCTYPE html>
<html>

  <head>

    <meta charset="UTF-8">
    <title>Post Actions</title>
    <style>
      body {
        background-color: #0A1334;
        color: #89AAC3;
        font-family: Arial, sans-serif;
      }
      h1 {
        text-align: center;
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
    </style>
  </head>
  <body>
    <h1>Post Actions</h1>
    <a href="Admin tour destination edit.php" class="button"> View And Edit Tour Destination</a>
    <a href="Admin tour destination post.php" class="button">Post  Availble  Tour Destination</a>
    <a href="Admin imageupload.php" class="button">Upload For Availble Image Tour Destination</a>

    <a href=" Admin tour package post.php" class="button">Post  Tour Package</a>
    <a href="Admin tour package edit.php"  class="button">View And Edit Tour Package</a>
    <a href="Admin hotel post.php" class="button">Post  Availble Hotel</a>
    <a href="Admin hotel edit.php" class="button"> View And Edit hotel</a>
    <a class="button"href="logout.php">logout</a>

  </body>
</html>
