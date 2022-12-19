<?php

session_start();

if (isset($_SESSION["user_id"])) {

    $mysqli = require __DIR__ . "/db_conn.php";

    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}
?>

<!DOCTYPE html>

<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php"><img src="img/car.png"a></a>
    </div>
    <ul class="nav navbar-nav">
   <li> <a class="active" href="home.php"><i class="fa fa-fw fa-home"></i> Home</a></li>
      
      <li><a href="car_list.php">Car List</a></li>
      <li><a href="gallery1.php">Gallery</a></li>
      <li><a href="about_us.php">About Us</a></li>
      
      <?php if (isset($user)): ?>

<li><font color="white"> Hello, <?= htmlspecialchars($user["name"]) ?></font></p>  </li>

<p><a href="logout.php" ><font color="white">Log out</font> </a></p>

<?php else: ?>

<li>


<li><a href="login.php">Log in</a></li>
<li><a href="signup.html">sign up</a></li>
</ul>
<?php endif; ?>
    </ul>
  </div>
</nav>
  

