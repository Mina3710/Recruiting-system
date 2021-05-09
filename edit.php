<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "validation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['submit']))
{
    $sql = "UPDATE  vaild SET Email='{$_POST['email']}' WHERE Email='{$_SESSION['email']}' AND Password='{$_SESSION['Pass']}'";
  
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
      header("Location: profile.php");
      $_SESSION['email']=$_POST['email'];
   


    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}




?>
<html>
<body>
<h1>forgot password?</h1>
<form method="post" >

Email:</br>
<input type="email" name="email">
</br>
Password:</br>
<input type="text" name="pass">
<br>
<input type="submit" name="submit" value="Submit">

</form>
</body>

</html>