<?php 
session_start();
ob_start();
if(!isset($_SESSION['session_username'])){
  header("location:login.php");
  exit();
}

print_r($_SESSION);
print_r($_COOKIE);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<br><br>
<form action="logout.php">
<button type="submit">logout</button>
</form>

<script>alert("Anda telah Login");</script>
</body>
</html>

