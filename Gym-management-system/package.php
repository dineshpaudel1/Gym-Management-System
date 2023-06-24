<?php
session_start();
include('nav.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan Package</title>
    <style>
        * {
            box-sizing: border-box;
        }

        .mrg {
            margin-top: 40px;
            padding: 30px;
        }
       
        body {
            background: linear-gradient(to right, #2691d9, #ffffff);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .columns {
            float: left;
            width: 33.3%;
            padding: 8px;
        }

        .price {
            list-style-type: none;
            border: 1px solid #eee;
            margin: 0;
            padding: 0;
            -webkit-transition: 0.3s;
            transition: 0.3s;
        }

        .price:hover {
            box-shadow: 0 8px 12px 0 rgba(0, 0, 0, 0.2)
        }

        .price .header {
            background-color: #2980b9, #8e44ad;
            color: white;
            font-size: 25px;
        }

        .price li {
            border-bottom: 1px solid #eee;
            padding: 20px;
            text-align: center;
        }

        .price .grey {
            background-color: goldenrod;
            font-size: 20px;
        }

        .button {
            background-color: crimson;
            border: none;
            color: white;
            padding: 10px 25px;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
        }

        .price .pre {
            background-color: crimson;
        }
    </style>
</head>

<body>
    <div class="mrg" >
    <?php
    if (isset($_SESSION["username"]) && !empty($_SESSION['username'])) {
    ?>
        <h2 style="text-align:center">Your Excersise Plan</h2>
        <p style="text-align:center">Please slect your plan according to your choice </p>
        <div class="columns">
            <ul class="price">
                <li class="header">Basic</li>
                <li class="grey">$ 9.99 / Month</li>
                <li>With One Trainer</li>
                <li>45 Min Per Day</li>
                <li>With 20% diet</li>
                <li>one shift</li>
                <li class="grey"><a href="enrollment.php" class="button">Enroll Now</a></li>
            </ul>
        </div>
        <div class="columns">
            <ul class="price">
                <li class="header" style="background-color:green">Pro</li>
                <li class="grey">$ 24.99 / year</li>
                <li>With two Trainer</li>
                <li>two Hour per Day</li>
                <li>With 50% diet</li>
                <li>Two shift</li>
                <li class="grey"><a href="enrollment.php" class="button">Enroll Now</a></li>
            </ul>
        </div>
        <div class="columns">
            <ul class="price">
                <li class="pre header">Premium</li>
                <li class="grey">$ 49.99 / year</li>
                <li>With 5 trainer</li>
                <li>3 Hour per day</li>
                <li>With 99% diet</li>
                <li>Three Shift</li>
                <li class="grey"><a href="enrollment.php" class="button">Enroll Now</a></li>
            </ul>
        </div>
        <p>.</p><br><br>
    <?php
    } else { ?>
        <h2 style="text-align:center">Your Excersise Plan</h2>
        <p style="text-align:center">Please slect your plan according to your choice </p>
        <div class="columns">
            <ul class="price">
                <li class="header">Basic</li>
                <li class="grey">$ 9.99 / Month</li>
                <li>With One Trainer</li>
                <li>45 Min Per Day</li>
                <li>With 20% diet</li>
                <li>one shift</li>
                <li class="grey"><a href="how_to_login.php" class="button">Enroll Now</a></li>
            </ul>
        </div>
        <div class="columns">
            <ul class="price">
                <li class="header" style="background-color:green">Pro</li>
                <li class="grey">$ 24.99 / year</li>
                <li>With two Trainer</li>
                <li>two Hour per Day</li>
                <li>With 50% diet</li>
                <li>Two shift</li>
                <li class="grey"><a href="how_to_login.php" class="button">Enroll Now</a></li>
            </ul>
        </div>
        <div class="columns">
            <ul class="price">
                <li class="pre header">Premium</li>
                <li class="grey">$ 49.99 / year</li>
                <li>With 5 trainer</li>
                <li>3 Hour per day</li>
                <li>With 99% diet</li>
                <li>Three Shift</li>
                <li class="grey"><a href="how_to_login.php" class="button">Enroll Now</a></li>
            </ul>
        </div>
        <p>.</p><br><br>
    <?php } ?>
    </div>
    <?php
    include('footer.php');
    ?>
</body>
</html>