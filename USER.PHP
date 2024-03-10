<?php
include 'connect.php';
if(isset($_POST['submit'])){
     $name = $_POST['name'];
     $email = $_POST['email'];
     $password = $_POST['password'];

     // Sanitize input to prevent SQL injection
     $name = mysqli_real_escape_string($con, $name);
     $email = mysqli_real_escape_string($con, $email);
     $password = mysqli_real_escape_string($con, $password);

     $sql = "INSERT INTO student (name, email, password) VALUES ('$name', '$email', '$password')";
     $result = mysqli_query($con, $sql);
     if($result){
          echo "Data successfully inserted";
     } else {
          die(mysqli_error($con));
     }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <form method="post" class="row g-3">
          <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Email</label>
          <input name="email" type="email" class="form-control" id="inputEmail4">
          </div>
          <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="inputPassword4">
          </div>
          <div class="col-12">
          <label for="inputAddress" class="form-label">Name</label>
          <input type="text" name="name" class="form-control" id="inputAddress" placeholder="Name">
          </div>
          
          <div class="col-12">
          <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
          </div>
     </form>

  </body>
</html>
