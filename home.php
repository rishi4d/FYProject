<?php
    include "server.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Final Year Project ~ Online Music Streaming Platform">
        <meta name="author" content="Rishi Ghosh">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.8, maximum-scale=1.00, user-scalable=no shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Rhythm - Home</title>

        <!--Google Font-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Roboto:700|Poppins|Poppins:300|Raleway:500|Comfortaa|Satisfy|Quicksand|Poiret One">

        <!-- Bootstrap CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- Bootstrap JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <!--Font Awesome CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

        <link rel="stylesheet" href="css/home.css">

        <link rel="icon" type="image/png" href="res/icons/circle-cropped2.png">
    </head>

    <body>
        <!-- NAVIGATION BAR -->
        <nav class="navbar navbar-expand-sm navbar-dark sticky-top">
                <a class="navbar-brand" href="index.php"><i class="fab fa-deezer" style="color: rgb(230, 0, 0); font-size: 2em;"></i></a>
                <div class="mr-auto" id="leftitems">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a style="color: rgb(190, 190, 190); font-weight: bold;" class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="browse.php">Browse</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mymusic.php">My Music</a>
                        </li>
                    </ul>
                </div>
                <div class="mx-auto" id="searcharea">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <form id="searchbox" action="">
                                <input type="text" placeholder="Search for Songs, Artists, Albums, and more.." name="Search">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>                    
                        </li>
                    </ul>
                </div>
                <div class="ml-auto">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <?php
                            if(isset($_SESSION['log']) && $_SESSION['log']==true)
                                echo "<a class='nav-link' data-toggle='dropdown'>";
                            else
                                echo "<a class='nav-link' onclick='document.getElementById(\"sign\").style.display=\"inherit\"'>";
                            ?> <?php if(isset($_SESSION['name']))
                                        echo $_SESSION['name'].'</a>';
                                    else
                                        echo "Login/Sign Up</a>"; ?>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="login.php?logout='1'">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
        </nav>
   
        <!-- MODAL -->

        <div class="container-fluid modal text-center" id="sign">
            <form class="modal-inner" action="login.php" method="POST">
                <div class="container-fluid form-inner">
                    <p id="top">Login/Sign Up</p>
                    <input class="box" type="text" placeholder="Username" name="username" required>
                    <input class="box" type="password" placeholder="Password" name="password" required>
                        
                    <label><input class="my-auto" type="checkbox" checked="checked" name="remember">Remember me</label>
                    <button name="user_login" type="submit">log in</button>
                    <p class="reg"><a onclick="document.getElementById('reg').style.display='inherit';" href="#">Register</a></p>
                    <p class="psw"><a href="#">Forgot password?</a></p>
                </div>
            </form>
        </div>

        <div class="container-fluid modal text-center" id="reg">
            <form class="modal-inner" action="signup.php" method="POST">
                <div class="container-fluid form-inner">
                    <p id="top">Register</p>
                    <input class="box" type="text" placeholder="Full Name" name="name" required>
                    <input class="box" type="text" placeholder="Username" name="username" required>
                    <input class="box" type="password" placeholder="Password" name="password" required>
                    <input class="box" type="password" placeholder="Confirm Password" name="password2" required>

                    <button name="user_signup" type="submit">register</button>
                </div>
            </form>
        </div>

        <!-- PLAYER -->
        
        <div id="player" class="container-fluid">
            <div id="player-inner" class="container-fluid">
                <img id="albumart" src="res/img/127369.jpg" alt="">
                <p id="title">titletitletitletitle</p>
                <p id="artist">artistartist</p>
                <div id="player-controls">
                    <button><i class="fas fa-backward"></i></button>
                    <button><i class="fas fa-play"></i></button>
                    <button><i class="fas fa-forward"></i></button>
                </div>
            </div>
        </div>

        <!-- CAROUSEL -->
        <div class="carousel slide mx-auto" id="slides" data-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <?php carousel(10);?>
                </div>
                <div class="carousel-item">
                    <?php carousel(11);?>
                </div>                
                <div class="carousel-item">
                    <?php carousel(4);?>
                </div>
            </div>

            <a class="carousel-control-prev" href="#slides" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>

            <a class="carousel-control-next" href="#slides" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>

        <!-- SECTION -->
        <div class="container-fluid" id="sections">
            <div class="row mx-auto">
                <div id="trends" class="col-12 col-sm-12 child">
                    <h4>Trending<span id="sectionspan"><a href="#">View All</a></span></h4>
                    <div class="row">
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <?php trending(1);?>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <?php trending(2);?>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <?php trending(3);?>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <?php trending(4);?>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <?php trending(5);?>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <?php trending(6);?>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="charts" class="col-xs-6 col-12 col-sm-12 child">
                    <h4>Top Charts<span id="sectionspan"><a href="">View All</a></span></h4>
                    <div class="row">
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <?php tops(1);?>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <?php tops(2);?>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <?php tops(3);?>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <?php tops(4);?>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <?php tops(5);?>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <?php tops(6);?>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div id="releases" class="col-12 col-sm-12 child">
                    <h4>New Releases<span id="sectionspan"><a href="">View All</a></span></h4>
                    <div class="row">
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <?php releases(1);?>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <?php releases(2);?>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <?php releases(3);?>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <?php releases(4);?>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <?php releases(5);?>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <?php releases(6);?>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <?php releases(7);?>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <?php releases(8);?>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <?php releases(9);?>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <?php releases(10);?>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <?php releases(11);?>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <?php releases(12);?>
                            </div>
                        </div>
                    </div>
                </div>   
    
                <div id="artists" class="col-12 col-sm-12 child">
                    <h4>Featured Artists<span id="sectionspan"><a href="">View All</a></span></h4>
                    <div class="row">
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <?php artists(1);?>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <?php artists(2);?>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <?php artists(3);?>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <?php artists(4);?>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <?php artists(5);?>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-lg-2">
                            <div class="card">
                                <?php artists(6);?>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>      
            
        </div>

        <hr>

        <!-- FOOTER -->
        <div class="container-fluid footer">
            <p id="brandfooter"><i class="fab fa-deezer" style="color: rgb(230, 0, 0); font-size: 2.3em;"></i><b>&emsp;Rhythm</b><span>&#8482</span></p>
            <p><b>Rhythm</b> is single-stop solution for all your musical needs. Browse through hundreds of songs, movies, albums, artists, genres, podcasts and enjoy your favourite music online for free &ensp;<b>>></b></p>
            <p id="footerending"><b>Rhythm</b>, Copyright&#169 2020<span style="float: right;"><b>Made in India</b></span></p>
        </div>

        <script src="app.js"></script>

    </body>

</html>