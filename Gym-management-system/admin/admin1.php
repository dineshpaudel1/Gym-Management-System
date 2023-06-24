<?php
$users = [];
try {
    $conn = new mysqli('localhost', 'root', '', 'gym');
    $sql = "select * from gym_user";
    $res = $conn->query($sql);
    if ($res->num_rows > 0) {
        while ($a = $res->fetch_assoc()) {
            array_push($users, $a);
        }
    }
} catch (Exception $e) {
    die('Database  Error : ' . $e->getMessage());
}
?>
<?php
$trainers = [];
try {
    $conn = new mysqli('localhost', 'root', '', 'gym');
    $sql = "select * from trainer";
    $res = $conn->query($sql);
    if ($res->num_rows > 0) {
        while ($a = $res->fetch_assoc()) {
            array_push($trainers, $a);
        }
    }
} catch (Exception $e) {
    die('Database  Error : ' . $e->getMessage());
}
?>
<?php
$packaged = [];
try {
    $conn = new mysqli('localhost', 'root', '', 'gym');
    $sql = "select * from enrollment";
    $res = $conn->query($sql);
    if ($res->num_rows > 0) {
        while ($a = $res->fetch_assoc()) {
            array_push($packaged, $a);
        }
    }
} catch (Exception $e) {
    die('Database  Error : ' . $e->getMessage());
}
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/504bf32129.js" crossorigin="anonymous"></script>
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

        .home-content .box1 {
            height: 100px;  
        }

        .home-content .box2,
        .box3,
        .box4 h1 {
            color: black;
            text-align: center;
            padding: 50px;
            margin: 50px;
        }

        

        .home-content .box2 {
            border-radius: 20px;
            margin: 10px;
            height: 200px;
            width: 25%;
            background-color: red;
            float: right;
        }

        .home-content .box3 {
            border-radius: 20px;
            margin: 10px;
            height: 200px;
            width: 25%;
            background-color: red;
            float: right;
        }

        .home-content .box4 {
            border-radius: 20px;
            margin: 10px;
            height: 200px;
            width: 25%;
            background-color: red;
            float: left;
            margin: 5px;
        }
        .home-content button {
            width: 180px;
            height: 40px;
            border: 1px solid;
            background: #2691d9;
            border-radius: 20px;
            font-size: 15px;
            color: #e9f4fb;
            font-weight: 700;
            cursor: pointer;
            outline: none;
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

        <div class="home-content">
            <div class="box1">
                <h1>Total Users</h1>
                <h2>5</h2>
            </div>
            <div class="box2">
                <h1>Enrolled Package</h1>
                <i class="fa-solid fa-hand-holding-heart"></i>
                <h2><?php echo  count($packaged) ?></h2>
                <a href="packaged.php"><button>View Detais</button></a>
            </div>
            <div class="box3">
                <h1>My Trainers</h1>
                <i class="fa-solid fa-quote-left"></i>
                <h2><?php echo  count($trainers) ?></h2>
                <a href="Trainer.php"><button>View Detais</button></a>
            </div>
            <div class="box3">
                <h1>My Users</h1>
                <i class="fa-solid fa-user"></i>
                <h2><?php echo  count($users) ?></h2>
                <a href="user.php"><button>View Detais</button></a>
            </div>
        </div>
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