<?php
include("admin.php");
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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bgs {
            height: 618px;
            background-color: blanchedalmond;
        }

        .user {
            display: flex;
            justify-content: center;
            margin-left: 220px;
        }

        .user table {
            margin-top: 85px;
            width: 900px;
        }

        .user table tr {
            height: 35px;
        }

        .user table tr th {
            font-size: 12px;
        }

        .user table tr td {
            text-align: center;
            font-size: 14px;
            margin: 5px;
            text-decoration: none;
        }

        table {
            width: 900px;
        }

        .user table tr td .btn1 {
            border: 6px solid Green;
            border-radius: 5px;
            background-color: Green;
            color: #fff;
            text-decoration: none;
            font-size: 15px;
        }

        .user table tr td .btn2 {
            border: 6px solid red;
            border-radius: 5px;
            background-color: red;
            color: #fff;
            text-decoration: none;
            font-size: 15px;
        }

        .user table tr th .btn3 {
            border: 6px solid brown;
            border-radius: 5px;
            background-color: brown;
            color: #fff;
            text-decoration: none;
            font-size: 15px;
        }
    </style>
</head>

<body>
    <div class="bgs">
        <div class="user">
            <table border="1px solid black">
                <tr>
                    <th colspan="12">Packaged Details</th>
                </tr>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Package</th>
                    <th>Coach</th>
                    <th>Time</th>
                    <th>Gender</th>
                    <th colspan="3">Operation</th>
                    <th rowspan="7">
                        <a class="btn3" href="add_user.php"><i class="fa-solid fa-plus"></i>Add Package</a>
                    </th>
                </tr>
                <?php for ($i = 0; $i < count($packaged); $i++) { ?>
                    <tr>
                        <td><?php echo $i + 1 ?></td>
                        <td><?php echo $packaged[$i]['name'] ?></td>
                        <td><?php echo $packaged[$i]['address'] ?></td>
                        <td><?php echo $packaged[$i]['phone'] ?></td>
                        <td><?php echo $packaged[$i]['package'] ?></td>
                        <td><?php echo $packaged[$i]['coach'] ?></td>
                        <td><?php echo $packaged[$i]['time'] ?></td>
                        <td><?php echo $packaged[$i]['gender'] ?></td>
                        <td>
                            <a class="btn1" href="update_user.php?id=<?php echo $packaged[$i]['id'] ?>"><i class="fa-solid fa-pen-to-square"></i>update</a>
                        </td>
                        <td>
                            <a class="btn2" href="delete.php?id=<?php echo $packaged[$i]['id'] ?>" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i>delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>

</html>