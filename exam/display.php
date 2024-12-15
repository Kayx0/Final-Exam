<?php
include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT INFORMATION</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="student.php" class="text-light"> Add Student</a>
    
    </button>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Program</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php
  $sqli = "Select * from `students`";
  $result = mysqli_query($con, $sqli);
  if ($result) {
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $password=$row['password'];
        $program=$row['program'];
        echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$password.'</td>
      <td>'.$program.'</td>
      <td>
        <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" 
        class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" 
        class="text-light">Delete</a></button>
    </td>
    </tr>';
    }
  }
  
  ?>
    
    
  </tbody>
</table>
    </div>
    
</body>
</html>