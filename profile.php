<?php session_start(); ?>
<html>

<title>Profile</title>

<h1>Welcome <?php echo $_SESSION['fn']; ?></h1>


<a href="delete.php">Delete Account</a>
<p></p>
<a href="signout.php">Sign out Here</a>


</html>