<?php
session_start();
require_once 'components/db_connect.php';

// if adm will redirect to dashboard
if (isset($_SESSION['adm'])) {
    header("Location: dashboard.php");
    exit;
}
// if session is not set this will redirect to login page
if (!isset($_SESSION['adm']) && !isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}

// select logged-in users details - procedural style
$res = mysqli_query($connect, "SELECT * FROM users WHERE id=" . $_SESSION['user']);
$row = mysqli_fetch_array($res, MYSQLI_ASSOC);
$sql = "SELECT * FROM cars";
$result = mysqli_query($connect ,$sql);
$tbody=''; //this variable will hold the body for the table
if(mysqli_num_rows($result)  > 0) {     
    while($rows = mysqli_fetch_array($result, MYSQLI_ASSOC)){         
        $tbody .= "<tr>
            
            
            <td>" .$rows['model']."</td>
            <td>" .$rows['price']."</td>
            <td><img class='img-thumbnail' src='./pictures/" . $rows['picture'] . "'</td>
            
            
            
            <td><a href='details.php?id=" .$rows['id']."'><button class='btn btn-primary btn-sm' type='button'>More Info</button></a>
            <a href='purchase.php?id=" .$rows['id']."'><button class='btn btn-success btn-sm' type='button'>Buy</button></a></td>
            </tr>";
    };
} else {
    $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}
mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - <?php echo $row['fname']; ?></title>
    <?php require_once 'components/boot.php' ?>
    <style>
        .userImage {
            width: 200px;
            height: 200px;
        }
        .img-thumbnail {
            width: 70px !important;
            height: 70px !important;
        }

        .hero {
            background: rgb(2, 0, 36);
            background: linear-gradient(24deg, rgba(2, 0, 36, 1) 0%, rgba(0, 212, 255, 1) 100%);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="hero">
            <img class="userImage" src="pictures/<?php echo $row['picture']; ?>" alt="<?php echo $row['fname']; ?>">
            <p class="text-white">Hi <?php echo $row['fname']; ?></p>
        </div>
        <a href="logout.php?logout">Sign Out</a>
        <a href="update.php?id=<?php echo $_SESSION['user'] ?>">Update your profile</a>
    </div>
    <div>
    <p class='h2'>Products</p>
           <p class='h2'>Products</p>
            <table class='table '>
                <thead class='table-success'>
                    <tr >
                        
                        <th>Model</th>
                        <th>Price</th>
                        <th>Picture</th>
                        
                    </tr>
                </thead>
                <tbody >
                    <?= $tbody;?>
                </tbody>
            </table>
  </div>
</body>
</html>