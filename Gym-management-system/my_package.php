<?php
$users = [];
try {
    $conn = new mysqli('localhost', 'root', '', 'gym');
    $sql = "select * from enrollment";
    //get result object after execution of select query
    $res = $conn->query($sql); // mysqli_query
    //fetch record from result object
    if ($res->num_rows > 0) {  // mysqli_num_rows
        //get individual record and assign to new variable
        // mysqli_fetch_assoc,fetch_array,fetch_object,fetch_row
        while ($a = $res->fetch_assoc()) {
            //add into main array
            array_push($users, $a);
        }
    }
} catch (Exception $e) {
    die('Database  Error : ' . $e->getMessage());
}
// print_r($users);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Enrollment Table</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            width: 100%;
            background: linear-gradient(to right, #2691d9, #ffffff);

        }

        .space {
            display: flex;
            justify-content: center;
            padding: 50px;
        }

        .navstyle {
            width: 1160px;
            overflow: hidden;
            background-color: crimson;
        }

        .navstyle .user a {
            float: left;
            color: #f2f2f2;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 25px;
        }

        .navstyle .operation a {
            float: right;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 25px;
        }

        .container {
            margin: -50px;
            display: flex;
            justify-content: center;
        }

        .container table {
            height: auto;
            width: 1160px;
        }

        .container table tr {
            height: 40px;
        }

        .container table tr th {
            font-size: 17px;
        }

        .container table tr td {
            text-align: center;
            font-size: 17px;
        }
        .btnback{
            margin-top: 90px;
            margin-left: 1150px;
        }
        .btnback button{
            border: 1px solid crimson;
            height: 30px;
            width: 60px;
            border-radius: 5px;
            background-color: crimson;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="space">
        <div class="navstyle">
            <div class="user">
                <a href="">Enrollment details</a>
            </div>
            <div class="operation">
                <a href="customer_register.php">Add enrollment</a>
            </div>
        </div>
    </div>
    <div class="container">
        <table border="1px">
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Package</th>
                <th>Coach</th>
                <th>Time</th>
                <th>gender</th>
            </tr>
            <?php for ($i = 0; $i < count($users); $i++) { ?>
                <tr>
                    <td><?php echo $i + 1 ?></td>
                    <td><?php echo $users[$i]['name'] ?></td>
                    <td><?php echo $users[$i]['address'] ?></td>
                    <td><?php echo $users[$i]['phone'] ?></td>
                    <td><?php echo $users[$i]['package'] ?></td>
                    <td><?php echo $users[$i]['coach'] ?></td>
                    <td><?php echo $users[$i]['time'] ?></td>
                    <td><?php echo $users[$i]['gender'] ?></td>
                    <a href="delete.php?id=<?php echo $users[$i]['id'] ?>" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i></a>
                </tr>
            <?php } ?>
        </table>

    </div>
    <div class="btnback">
        <a href="f.php"><button>Home</button></a>
    </div>

</body>

</html>