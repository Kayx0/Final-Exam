<?php
 include 'connect.php';
 if(isset($_POST ['submit'])) {
     $name = $_POST ['name'];
     $email = $_POST ['email'];
     $password = $_POST ['password'];
     $program = $_POST ['program'];

     $sql="insert into `students` (name,email,password,program) 
     values('$name', '$email', '$password', '$program')";
     $result=mysqli_query($con, $sql);    
     if($result){
         header('location:display.php');
     }else{
         die(mysqli_error($con));
    }
 }
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>STUDENT INFORMATION</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter student name" name="name" autocomplete="off">
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Enter student email" name="email" autocomplete="off">
  </div>

  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" placeholder="Enter student password" name="password" autocomplete="off">
  </div>

  <div class="form-group">
    <label>Program</label>
    <input type="text" class="form-control" placeholder="Enter student program" name="program" autocomplete="off">
  </div>
 
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
  </body>
</html>