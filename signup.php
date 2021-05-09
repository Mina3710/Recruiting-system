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
    $sql = "INSERT INTO vaild ( Email,Password)
    VALUES ('{$_POST['email']}','{$_POST['pass']}')";
   
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
      header("Location: profile.php");
      $_SESSION["ID"]=$row[0];
      $_SESSION['email']=$_POST['email'];


    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}




?>


<html>
<body>
<h1>SignUp</h1>
<form method="post" >

Email:</br>
<input type="email" name="email">
</br>
Password:</br>
<input type="text" name="pass">
</br>

<input type="submit" name="submit" value="Submit">
<input type="reset" name="reset" value="Reset">
</form>
</body>

</html>