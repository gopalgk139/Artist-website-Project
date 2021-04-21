<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


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
    <div class="container">
    <div class="login-box">
       <div class="row">
        <div class="col-md-6 login-left">
        <h2>Login</h2>
         <form action="validation.php" method="post">
         <div class="f-group">
         <label>Username</label>
         <input type="text" name="name" class="f-control" required>
         </div>
         <div class="f-group">
         <label>Password</label>
         <input type="password" name="password" class="f-control" required>
         </div>
         <button type="submit" class="btn btn-primary">Login</button>
         </form>
       </div>

       <div class="col-md-6 login-right">
        <h2>Register</h2>
         <form action="registration.php" method="post">
         <div class="f-group">
         <label>Username</label>
         <input type="text" name="name" class="f-control" required>
         </div>
         <div class="f-group">
         <label>Email-id</label>
         <input type="email" name="email" class="f-control">
         </div>
         <div class="f-group">
         <label>Password</label>
         <input type="password" name="password" class="f-control" required>
         </div>
         <button type="submit" class="btn btn-primary">Register</button>
         </form>
       </div>
    </div>
    </div>

</body>
</html>