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
if ($_POST) {
    $car_id = $_POST['id'];
    $date_from = $_POST['date_from'];
    $date_to = $_POST['date_to'];
    $user_id=$_SESSION['user'];
    $status='Reserved';
    echo $user_id;
    echo $status;

$sql = "INSERT INTO booking (user_id, car_id,  date_from, date_to) VALUES ($user_id, $car_id, '$date_from', '$date_to' )";

$sqla = "UPDATE cars SET status = '$status' WHERE id = {$car_id}";

if (mysqli_query($connect, $sql ) === true) {
        $class = "success";
        $message = "You have Booked the Car <br>";
            
       
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" ;
       
    }
    $sqla = "UPDATE cars SET status = '$status' WHERE id = {$car_id}";
if (mysqli_query($connect, $sqla ) === true) {
        $classs = "success";
        $messages = "You have Booked the Car <br>";
            
       
    } else {
        $classs = "danger";
        $messages = "Error while creating record. Try again: <br>" ;
       
    }

    mysqli_close($connect);
} else {
    header("location: ../error.php");
}





?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1><?php echo $message ?></h1>
  <a href='./home.php'><button class="btn btn-primary" type='button'>Home</button></a>
</body>
</html>