<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="style2.css"> 
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
body{
    margin:0;
    padding: 0;
    text-align: center;
    background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url(bg-c.jpg);
    background-size: cover;
    font-family: sans-serif;
}

.con-title{
    margin-top: 70px ;
    color: #fff;
    text-transform: uppercase;
}
.con-title h1{
    font-size: 32px;
    line-height:10px ;
}
.con-title h2{
    font-size: 16px;
}
form{
    margin-top: 50px;
    transition: all 4s ease-in-out;
}

input{
    height: 45px;
}
form .submit{
    background: #ff5722;
    border-color: transparent;
    color: #fff;
    font-size: 20px;
    letter-spacing: 2px;
    font-weight: bold;
    height: 50px;
    margin-top: 20px;
}

form .submit:hover{
    background-color: #f44336;
    cursor: pointer;
}

 .ccontrol
{
    width: 600px;
    background: transparent;
    border: none;
    outline: none;
    border-bottom: 1px solid black;
    color: #fff;
    font-size: 18px;
    margin-bottom: 16px;
}

        </style>
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
    
     <div class="con-title">
         <h1>Hello</h1>
         <h2>We are always there to serve you!</h2>
     </div>
     
     <div class="con-form">
          <form id="con-form" method="post" action="contactdata.php">
            <input type="name" name="name" type="text" class="ccontrol" placeholder="your Name" required>
              <br>
            <input type="email" name="email" type="text" class="ccontrol" placeholder="your Email" required>
              <br>
            <textarea name="subject" name="subject" class="ccontrol" placeholder="Message" row="4" required>
                    </textarea><br>
            <input type="submit" class="ccontrol submit" value="SEND MESSAGE">
            </form>
</div>
</div>
</div>
</body>
</html>