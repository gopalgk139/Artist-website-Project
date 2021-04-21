<?php

$con = mysqli_connect("localhost", "root", "", "soulspacearts")
or die(mysqli_error($con));
if(!isset($_SESSION)){
  session_start();
}


if (!isset($_SESSION['email'])) {
    
}
$user_id = $_SESSION['user_id'];
$item_ids_string = $_GET['itemsid'];

//We will change the status of the items purchased by the user to 'Confirmed'
$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
mysqli_query($con, $query) or die($mysqli_error($con));
?>

<!DOCTYPE html>

<head>
    <title>Success | SoulSpaceArts</title>
    <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>

    <body>
    <div class="logo_con">
        <center><h1>SOUL<span> SPACE</span> ARTS</h1></center>
    </div>
    <div class="header">
                <nav>
                <ul>
                    <li>
                        <a href="mainpage.php">Home</a>
                    </li>
                    <li> 
                        <a href="contact.php">Contact</a>
                    </li>
                    <li>
                        <a href="Auction.html">Auction</a>
                    </li>
                    <li>
                        <a href="Artists.html">Artist</a>
                    </li>
                  </ul>
            </nav>
            
                <marquee>Web Developer as a Profession but Artistian by Passion</marquee>
            </div>
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">

                      <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                    <p align="center">Click <a href="products.php">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
    </body>
</html>
