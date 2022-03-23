<?php
session_start();
require_once './components/db_connect.php';

if (isset($_SESSION['']) != "") {
    header("Location: ../home.php");
    exit;
}

if (!isset($_SESSION['']) && !isset($_SESSION['user'])) {
    header("Location: ../index.php");
    exit;
}

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM cars WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $model = $data['model'];
        $price = $data['price'];
        $picture = $data['picture'];
        $seats = $data['seats'];
        $color = $data['color'];
        $make = $data['make'];
        $status = $data['status'];
    }}
$user_id=$_SESSION['user'];
echo $user_id;
echo $id;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once './components/boot.php' ?>
    <title>PHP CRUD | Add Product</title>
    <style>
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 60%;
        }
    </style>
</head>

<body>
    <fieldset>
        <legend class='h2'>Book A Car</legend>
        <form action="./a_booking.php" method="post" enctype="multipart/form-data">
            <table class='table'>
                <tr>
                    <th>Model</th>
                    <td><h1><?php echo $model ?></h1></td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td><h1><?php echo $price ?> Per Day</h1></td>
                </tr>
                <tr>
                    <th>Date From</th>
                    <td><input class='form-control' type="date" name="date_from" /></td>
                </tr>
                <tr>
                    <th>Date tTo</th>
                    <td><input class='form-control' type="date" name="date_to" /></td>
                </tr>
                
                <tr>
                  <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
                    <td><button class='btn btn-success' type="submit">Book This Car</button></td>
                    <td><a href="index.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>