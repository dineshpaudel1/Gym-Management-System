<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <title>Blank Admin</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/504bf32129.js" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    ul {
      margin: 20px;
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
      <!-- <i class="bx bx-grid-alt"></i> -->
      <!-- <span class="logo_name">Easy Fitness</span> -->
    </div>
    <ul>
      <div class="my-links">
        <!-- <i class="bx bx-grid-alt"></i> -->
        <!-- <a href="admin1.php">dashboard</a> -->
      </div>
      <div class="my-links">
        <!-- <i class="fa-solid fa-user"></i> -->
        <!-- <a href="user.php">User Details</a> -->
      </div>
      <div class="my-links">
        <!-- <i class="fa-solid fa-quote-left"></i> -->
        <!-- <a href="dashoard.php">Trainer Details</a> -->
      </div>
      <div class="my-links">
        <!-- <i class="fa-solid fa-hand-holding-heart"></i> -->
        <!-- <a href="dashoard.php">Package Detail</a> -->
      </div>
      <div class="log_out">
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
      </div>

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