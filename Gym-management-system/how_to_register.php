<?php
session_start();
if (isset($_SESSION["email"])) {
    header("location:f.php");
}
include("nav.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .btn{
            width: 200px;
            height: 40px;
            border: 1px solid;
            background: crimson;
            border-radius: 20px;
            font-size: 18px;
            color: #e9f4fb;
            font-weight: 700;
            cursor: pointer;
            outline: none;
        }
        .container-fluid{
            height: 87.1vh;
            width: 100%;
            background: linear-gradient(to right, #2691d9, #ffffff);
        }
    </style>
</head>
<body>
    <section class="container-fluid sign-in-form-section">
        <div class="container5">
            <div class="row">
                <div class="col-md-12 sign-up" style="text-align: center;"><br>
                    <h3 style="font-weight: bold;">How do you want to Register?</h3><br>
                    <hr>
                    <br>
                    <p>If you want to register as a Customer click on Customer register button otherwise click on trainer register button.</p><br><br><br><br><br>
                    <button type="submit" class="btn btn-info" onclick="window.location.href='customer_register.php'" style="width:200px;">Customer Register</button>
                    <button type="submit" class="btn btn-info" onclick="window.location.href='trainer_register.php'" style="width:200px;">Trainer Register</button>
                </div>
            </div>
        </div>
    </section>
</body>
<?php
include('footer.php');
?>
</html>