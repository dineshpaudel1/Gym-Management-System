<!DOCTYPE html>
<html lang="en">

<head>
  <title>Gym Management System</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/504bf32129.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="topnav">
    <a href="f.php">Home</a>
    <a href="package.php">Plan</a>
    <a href="about.php">About Us</a>
    <a href="contact.php">Contact</a>
    <div class="user">
      <?php
      if (isset($_SESSION["username"]) && !empty($_SESSION['username'])) {
      ?>
        <a href="bmi.php" onclick="openForm()"><i class="fa-solid fa-envelope"></i> Trainer Suggestion</a>
        <a href="bmi.php" onclick="openForm()"><i class="fa-solid fa-chart-simple"></i> My BMI</a>
        <a href="user_profile.php" onclick="openForm()"><i class="fa-solid fa-user"></i> My Profile</a>
        <a href="logout.php"><i class="fa-solid fa-right-to-bracket"></i>Logout</a>
      <?php
      } else { ?>
        <a href="how_to_register.php"><i class="fa-solid fa-user"></i><label for="">Register</a>
        <a href="how_to_login.php"></label> <i class="fa-solid fa-right-to-bracket"></i><label for="">Login</a>
      <?php } ?>
    </div>
  </div>
</body>

</html>