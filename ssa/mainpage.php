<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soulspacearts</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .header{
            width: 100%;
            height: 70px;
            background-color: whitesmoke;
        }
        .header marquee{
            font-size: 18px;
            font-family: montserrat;
            color: black;
            font-style: oblique;
            font-weight: 300;
        }
       .logo_con h1, .logo_con h1 span{
            color: black;
            font-family: Montserrat,serif;
            font-weight: 800;
        }
        li{
            list-style-type: none;
            margin: 0 3vw;
            font-size: 3vh;
            vertical-align: middle;
        }
        li a{
            text-decoration: none;
            color:whitesmoke;
            padding: 1vw;
            font-family: Montserrat;
        }
        li a:hover{
            background-color: whitesmoke;
            color: darkmagenta;
        }
        nav{
            width: 99vw;
            height: 28px;
            background-color:black;
            vertical-align: middle;
        }
        ul{
            margin: 0;
            top: 0;
            display: flex;
        }
        body{
            margin: 0;

        }
        .container{
            width: 1400px;
            height: 620px;
            margin: 0 auto;
            padding-left: 20px;
        }
        .rig_nav{
            right:-80px;
        }
        .rig_nav h2{
            position:absolute;
            width:180px;
            height:80px;
            top:45%;
            margin-top:15px;
            font:bold 13px/80px '6808df53';
            letter-spacing:0.27em;
            color:#f10d0d;
            text-transform:uppercase;
            text-align: center;
            -webkit-transform:rotate(90deg);
            -moz-transform:rotate(90deg);
            -o-transform:rotate(90deg);
            -ms-transform:rotate(90deg);
            transform:rotate(90deg);
            -webkit-transform-origin:80px top;
            -ms-transform-origin:80px top;
            -moz-transform-origin:80px top;
            -o-transform-origin:80px top;
            transform-origin:80px top
        }
        .rig_nav h2:hover, 
        .rig_nav #logh2:hover{
            text-decoration: underline;
        }
.shoppingcart{
    cursor: pointer;
    z-index: 1;
    color: white;
    position: relative;
    font-size: 1.6rem;
}
.shoppingcart p{
    position: absolute;
    top: -5px;
    right: -12px;
    font-size: 0.89rem;
    padding: 5px 5px; 
}
.cartbox{
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(0,0,0,0.8);
    z-index:99999 ;
    transition:0.3s linear ;
    transform:scale(0) ;
}
.cartbox.active{
    transform: scale(1);
}
.cartbox .cart{
    position: relative;
    height: 65%;
    width: 80%;
    background:#fff;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.cartbox .cart i{
    position: absolute;
    right: 0;
    top: 0;
    background: #f00;
    padding: 10px 15px;
    cursor: pointer;
}
.cartbox .cart i:hover{
    background: #ff0000a5;
}
.cartbox .cart h1{
    position: relative;
    margin-top:2% ;
    font-size: 2.8rem;
    color: #017bf5;
}
 @media only screen and (max-width:300px) {
    ul{
     flex-direction: column;
    }
    li{
     margin: 0;
    }
    a{
     display: block;
    }
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
                    <li>
                        <div class="shoppingcart">
                            <p>0</p>
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                    </li>
                    <li>
                        <a href="login.php">Logout</i>
                    </li>
                  </ul>
            </nav>
            
                <marquee>Painting is the grandchild of nature. It is related to God.</marquee>
            </div>
         
      <br>
      <div class="container">
          <video src="bgvideo.mp4" loop muted autoplay width="1350px"
          height="620px"></video>
      </div>
      <hr>

      <h3>Art of the Day</h3>
      <div class="a8ofday">
        <div class="a80fday_imgbox">
        <img src="img/Taj mahal.jpg" width="100%" height="auto">
        </div>
      </div>
      <div class="cartbox">
          <div class="cart">
          <i class="fa fa-close"></i>
          <h1>updates under process</h1>
          </div>
      </div>
      <script src="jquery.js"></script>
</body>
</html>


