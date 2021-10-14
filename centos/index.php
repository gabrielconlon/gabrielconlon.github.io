<html>
<head><title>Main Page</title></head>
<body>

<p><h1>
<?php
session_start();
if (isset($_SESSION['message'])){	
 echo $_SESSION['message'];
}
?></h1></p>

From here you can:

<p><a href="/login.php">Log In</a></p>
<p><a href="/register.php">Register</a></p>
<p><a href="/logout.php">Log Out</a></p>
</body>
</html>