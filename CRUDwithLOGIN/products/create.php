<?php
session_start();
require_once '../components/db_connect.php';

if (isset($_SESSION['user']) != "") {
    header("Location: ../home.php");
    exit;
}

if (!isset($_SESSION['adm']) && !isset($_SESSION['user'])) {
    header("Location: ../index.php");
    exit;
}

////$suppliers = "";
//$result = mysqli_query($connect, "SELECT * FROM suppliers");

//while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
 //   $suppliers .=
  ///      "<option value='{$row['supplierId']}'>{$row['sup_name']}</option>";
//}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once '../components/boot.php' ?>
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
        <legend class='h2'>Add Car</legend>
        <form action="actions/a_create.php" method="post" enctype="multipart/form-data">
            <table class='table'>
                <tr>
                    <th>Model</th>
                    <td><input class='form-control' type="text" name="model" placeholder="Model" /></td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td><input class='form-control' type="number" name="price" placeholder="Price" step="any" /></td>
                </tr>
                <tr>
                    <th>Picture</th>
                    <td><input class='form-control' type="file" name="picture" /></td>
                </tr>
                <!-- <tr>
                    <th>Supplier</th>
                    <td>
                        <select class="form-select" name="supplier" aria-label="Default select example">
                            <?php echo $suppliers; ?>
                            <option selected value='none'>Undefined</option>
                        </select>
                    </td>
                </tr> -->
                <tr>
                    <th>Seats</th>
                    <td><input class='form-control' type="text" name="seats" placeholder="Seats" /></td>
                </tr>
                <tr>
                    <th>Color</th>
                    <td><input class='form-control' type="text" name="color" placeholder="Color"  /></td>
                </tr>
                <tr>
                    <th>Make</th>
                    <td><input class='form-control' type="year" name="make" placeholder="Make" /></td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td><input class='form-control' type="text" name="status" placeholder="Status"  /></td>
                </tr>
                <tr>
                    <td><button class='btn btn-success' type="submit">Insert Product</button></td>
                    <td><a href="index.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>