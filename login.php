<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "validation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit']))
{
    $sql = "SELECT * FROM vaild WHERE Email='{$_POST['email']}' AND Password='{$_POST['pass']}'";
    $result = $conn->query($sql);
    
if ($result->num_rows > 0) 
  {
   
    // output data of each row
    while($rows = $result->fetch_assoc()) {
      $_SESSION["ID"]=$row[0];
      $_SESSION['email']=$_POST['email'];
 
        header("Location: profile.php");
 
    }
    
  }

}

?>
<html>
<body>
<h1>Login</h1>
<form method="post">
Email:</br>
<input type="text" name="email">
</br>
Password:</br>
<input type="text" name="pass">
<br>
<a href="edit.php">forgot password?</a>
</br></br>
<input type="submit" name="submit" value="Submit">
<input type="reset" name="reset" value="Reset">
</form>
</body>

</html>