<?php
session_start();
require_once 'components/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM cars WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
            $data = mysqli_fetch_assoc($result); 
             $model = $data['model'];
        $seats = $data['seats'];
        $picture = $data['picture'];
        $color = $data['color'];
        $make = $data['make'];
        $price = $data['price'];
         $status = $data['status'];
          

} else {
    $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}};
mysqli_close($connect);

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>infos</title>
        <?php require_once 'components/boot.php'?>
        <style type="text/css">
            .manageProduct {           
                margin: auto;
            }
            .img-thumbnail {
                width: 70px !important;
                height: 70px !important;
            }
            td {          
                text-align: center;
                vertical-align: middle;
            }
            tr {
                text-align: center;
            }
        </style>
        
        
   
 
  </head>

<body style="font-family:serif "   class="    text-center">

<div>

<img class="img-tumbnail" src="<?php echo 'pictures/' .$picture ?>" alt="">

<h1><?php echo $model ?></h1>
<h1><?php echo $color ?></h1>
<h1>Seats -- <?php echo $seats ?></h1>
<h1><?php echo $make ?></h1>
<h1>Price  <?php echo $price ?> euro  Day</h1>
<h1><?php echo $status ?></h1>
<a  href=<?php echo 'booking.php?id=' .$id?>><button style="padding: 1rem; width: 300px;" class='btn btn-success btn-sm' type='button'>Book This Car</button></a>
<a  href='home.php'><button style="padding: 1rem; width: 300px;" class='btn btn-primary btn-sm' type='button'>Back</button></a>


</div>










          </body>