<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Navigation Bar</title>
    <style>
      body {
        background-color: #0A1334;
        color: #89AAC3;
        font-family: Arial, sans-serif;
      }
      .navbar {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        margin: 0;
        padding: 10px;
        list-style: none;
      }
      .navbar li {
        margin: 10px;
      }
      .navbar a {
        background-color: #89AAC3;
        color: #0A1334;
        border: none;
        border-radius: 5px;
        padding: 10px;
        cursor: pointer;
        text-decoration: none;
      }
      .navbar a:hover {
        background-color: #0A1334;
        color: #89AAC3;
        transition: all 0.3s ease-in-out;
      }
    </style>
  </head>
  <body>
    <ul class="navbar">
      <li><a href="Admin tour destination edit.php" target="_blank">View And Edit Tour Destination</a></li>
      <li><a href="Admin tour destination post.php" target="_blank">Post Availble Tour Destination</a></li>
      <li><a href="Admin imageupload.php" target="_blank">Upload For Availble Image Tour Destination</a></li>
      <li><a href="Admin tour package post.php" target="_blank">Post Tour Package</a></li>
      <li><a href="Admin tour package edit.php"  target="_blank">View And Edit Tour Package</a></li>
      <li><a href="Admin hotel post.php" target="_blank">Post Availble Hotel</a></li>
      <li><a href="Admin hotel edit.php" target="_blank">View And Edit Hotel</a></li>
    </ul>
  </body>
</html>
