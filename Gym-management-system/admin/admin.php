<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <title>Admin Panel</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/504bf32129.js" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    ul {
      margin: 20px;
    }

    body {
      background-color: bisque;
    }

    .my-links {
      margin: 10px;
      height: 50px;
    }

    .my-links a {
      margin: 10px;
      color: #fff;
      font-size: 20px;
      text-decoration: none;
    }

    .my-links a:hover {
      color: black;
    }

    .log_out {
      position: absolute;
      bottom: 20px;
      left: 40px;
      width: 100%;
    }

    .log_out a {
      margin: 10px;
      color: #fff;
      font-size: 20px;
      text-decoration: none;
    }

    .log_out a:hover {
      color: black;
    }

  </style>
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class="bx bx-grid-alt"></i>
      <span class="logo_name">Easy Fitness</span>
    </div>
    <ul>
      <div class="my-links">
        <i class="bx bx-grid-alt"></i>
        <a href="admin1.php">dashboard</a>
      </div>
      <div class="my-links">
        <i class="fa-solid fa-user"></i>
        <a href="user.php">User Details</a>
      </div>
      <div class="my-links">
        <i class="fa-solid fa-quote-left"></i>
        <a href="trainer.php">Trainer Details</a>
      </div>
      <div class="my-links">
        <i class="fa-solid fa-hand-holding-heart"></i>
        <a href="packaged.php">Enroll Package</a>
      </div>
      <div class="log_out">
        <i class="bx bx-log-out"></i>
        <a href="logout.php">Logout</a>
      </div>

    </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class="bx bx-menu sidebarBtn"></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search..." />
        <i class="bx bx-search"></i>
      </div>
      <div class="profile-details">
        <!-- <img src="images/profile-1.jpeg" alt="" /> -->
        <span class="admin_name">Bikesh and Dinesh</span>
        <!-- <i class="bx bx-chevron-down"></i> -->
      </div>
    </nav>

  </section>
  
  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
      sidebar.classList.toggle("active");
      if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    };
  </script>


</body>

</html>