<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `students` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$password=$row['password'];
$program=$row['program'];

if(isset($_POST ['submit'])) {
    $name = $_POST ['name'];
    $email = $_POST ['email'];
    $password = $_POST ['password'];
    $program = $_POST ['program'];

    $sql="update `students` set id=$id,name='$name',email='$email',password='$password',program='$program' where id=$id";
    $result=mysqli_query($con, $sql);    
    if($result){
        // echo"updated successfully";
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
    <input type="text" class="form-control" placeholder="Enter student name" name="name" autocomplete="off" value=<?php echo $name?>>
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Enter student email" name="email" autocomplete="off" value=<?php echo $email?>>
  </div>

  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" placeholder="Enter student password" name="password" autocomplete="off" value=<?php echo $password?>>
  </div>

  <div class="form-group">
    <label>Program</label>
    <input type="text" class="form-control" placeholder="Enter student program" name="program" autocomplete="off" value=<?php echo $program?>>
  </div>
 
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>
    
  </body>
</html>