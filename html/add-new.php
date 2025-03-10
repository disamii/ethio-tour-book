<?php
include "db_conn.php";
session_start();

if (isset($_POST["submit"])) {
   $first_name = $_POST['username'];
   $password = $_POST['password'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $role=$_POST['role'];
   $sql = "INSERT INTO registration(id, username, password, address, phone,role) VALUES (NULL,'$first_name','$password','$email','$phone','$role')";
   $result = mysqli_query($conn, $sql);
   if ($result) {
      header("Location: index2.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/money transcation form.css">
   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>ETHIO TOUR ADMIN</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
      ETHIO TOUR ADMIN
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Add New User/Admin</h3>
         <p class="text-muted">Complete the form below to add a new user/Admin</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Username</label>
                  <input type="text" class="form-control" name="username" placeholder="someone">
               </div>

               <div class="col">
                  <label class="form-label">Password</label>
                  <input type="text" class="form-control" name="password" placeholder="*****">
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">Email:</label>
               <input type="email" class="form-control" name="email" placeholder="name@example.com">
            </div>
            <div class="mb-3">
               <label class="form-label">Phone</label>
               <input type="" class="form-control" name="phone" placeholder="+251979045158">
            </div>
            <div class="mb-3">
               <label class="form-label">Role</label>
               <input type="text" class="form-control" name="role" placeholder="user/admin">
            </div>

            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="index2.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>