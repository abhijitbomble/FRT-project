<?php 
if(isset($_POST['submit']))
{
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
$row = mysqli_fetch_assoc($result);
if(is_array($row) && !empty($row))
{
  $_SESSION['valid'] = $row['Email'];
  $_SESSION['username'] = $row['Username'];
  $_SESSION['age'] = $row['Age'];
  $_SESSION['id'] = $row['Id'];
  $con=new mysqli('myazdemosvr.mysql.database.azure.com','myadmin@myazdemosvr','Server@1','flat');
  $q="insert into users(email,password)values('$email','$password')";
  $r=mysqli_query($con,$q);
  if($r)
  {
    echo "<script>alert('Your Booking is Successfully, Do Payment now')</script>";
  }
}
else
{
  echo "<div class='message'>
  <p>Wrong Username or Password</p>
  </div> <br>";
  echo "<a href='login.php'><button class='btn'>Go Back</button>";
}
  if(isset($_SESSION['valid']))
  {
    header("Location: home.php");
  }
}
?>
