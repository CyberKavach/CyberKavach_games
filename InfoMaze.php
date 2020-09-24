<!doctype html>
<html lang="en">
<?php
    include 'connectdb.php';
    session_start();
    $ok = $_SESSION['name'];
    $sql= "SELECT * FROM `USERS` WHERE `USERS`.`USERNAME`='$ok'";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        
        $gg = $row['UPIM'];
        $ee=$row['UPDI'];
    }
    
    if ($gg == '') {
   
    $_SESSION['Points'] = $_SESSION['Points'] + 5;
    $sql = "UPDATE `USERS` SET `UPIM` = 'T' WHERE `USERS`.`USERNAME` = '$ok'";
    $result = mysqli_query($conn,$sql); 
}
?>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
	 crossorigin="anonymous">

	<title>Cyber-Kavach</title>
	<link rel="icon" href="https://i.ibb.co/k80kB58/logo.png" type="image/icon type">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
	<style>
		.holder {
			background-color: rgb(230, 230, 230);
			width: auto;
			height: 250px;
			overflow: hidden;
			padding: 10px;
			font-family: Helvetica;
		}

		.holder .mask {
			position: relative;
			left: 0px;
			top: 10px;
			width: 300px;
			height: 500px;
			overflow: hidden;
		}

		.holder ul {
			list-style: none;
			margin: 0;
			padding: 0;
			position: relative;
		}

		.holder ul li {
			padding: 10px 0px;
		}

		.holder ul li a {
			color: darkred;
			text-decoration: none;
		}

		an.hover {
			text-decoration: underliner;
			color: darkgoldenrod;

		}

		body {
			 background: #f5fffd;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to top,#ffe747, #ffeb66, #fff08f,#fff5b8);
            background: -moz-linear-gradient(to top,#ffe747, #ffeb66, #fff08f,#fff5b8);
            background: -o-linear-gradient(to top,#ffe747, #ffeb66, #fff08f,#fff5b8);
            background: linear-gradient(to top,#ffe747, #ffeb66, #fff08f,#fff5b8);
            font-family: "Roboto", sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
		}

		::-webkit-scrollbar {
			display: none;
		}

		.navbar-custom {
			background-color: #ffe226;
			color: black;
		}

		.navbar-custom .navbar-nav .nav-link {
			color: #666666;
		}

		.navbar-custom .nav-item.active .nav-link,
		.navbar-custom .nav-item:hover .nav-link {
			color: black;
		}
	</style>
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-light navbar-custom">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="https://cyberkavach.epizy.com/home.php" style="font-size:19px;padding: 16px 19px;font-family:Raleway">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/News.php" style="font-size:19px;padding: 16px 19px;font-family:Raleway">Latest News</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:19px;padding: 16px 19px;font-family:Raleway">
                        Fun Zone
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <h6 class="dropdown-header" style="font-size:19px;padding: 16px 19px;font-family:Raleway">Fun Zone</h6>
                        <a class="dropdown-item" href="/Games.php">Cyber Games</a>
                        <a class="dropdown-item" href="/Quizmain.php">Cyber Quizzes</a>
                        <a class="dropdown-item" href="/Stories.php">Stories to Read</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Upholders.php" style="font-size:19px;padding: 16px 19px;font-family:Raleway">Cyber Upholders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/About.php" style="font-size:19px;padding: 16px 19px;font-family:Raleway">About us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:19px;padding: 16px 19px;font-family:Raleway">
                        More
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/Securify.php">Securify</a>
                        <a class="dropdown-item" href="/Privacy.php">Privacy Junction</a>
                        <a class="dropdown-item" href="/App.html">Get Our App</a>
                    </div>
                </li>
            </ul>
            <a href="/Profile.php"><button class="btn btn-warning my-2 my-sm-0" type="submit" style="padding:10px 23px;font-family: Raleway">My Profile</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
    </nav>
    <br>
    <h1 style="padding-left:50px"><ins>Info Maze</ins></h1>
    <br>
<br> 

<div class="container">
    <div class="row">
        <div class="col-sm-1">
            </div>
             <div class="col-sm-10">
    <iframe src="https://scratch.mit.edu/projects/423104425/embed" allowtransparency="true" width="855" height="690" frameborder="0" scrolling="no" allowfullscreen></iframe>
    </div>
     </div>
     </div>
         <br>
    <br>
<br> 




        <footer class="page-footer font-small blue pt-4" style="background-color: #ffef8a;">
        <div class="container-fluid text-center text-md-left">
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <h5 class="text-uppercase">Cyber Safety</h5>
                    <p>Cyber Security is trying to be safe on the internet and is the act of maximizing a user's
                        awareness of
                        personal safety and security risks to private information and property associated with using
                        the
                        internet,
                        and the self-protection from computer crime.</p>
                </div>
                <hr class="clearfix w-100 d-md-none pb-3">
                <div class="col-md-3 mb-md-0 mb-3">
                    <h5 class="text-uppercase">Features</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a class="an" href="/Stories.php" style="color:blue">Case
                                Studies</a>
                        </li>
                        <li>
                            <a class="an" href="/News.php"
                                style="color:blue">Latest-News</a>
                        </li>
                        <li>
                            <a class="an" href="/Securify.php"
                                style="color:blue">Securify</a>
                        </li>
                        <li>
                            <a class="an" href="/Upholders.php" style="color:blue">Cyber
                                Upholders</a>
                        </li>
                    </ul>

                </div>
                <div class="col-md-3 mb-md-0 mb-3">
                    <h5 class="text-uppercase">Fun Zone</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a class="an" href="/Quiz/DigitalIndia.php" style="color:blue">
                                Digital
                                India Quiz</a>
                        </li>
                        <li>
                            <a class="an" href="/Games/Cyberthon.php"
                                style="color:blue">Cyberthon</a>
                        </li>
                        <li>
                            <a class="an" href="/Quiz/Privacy.php"
                                style="color:blue">Privacy Quiz</a>
                        </li>
                        <li>
                            <a class="an" href="/Games/DodgeVirus.php" style="color:blue">Dodge the Virus</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <div class="footer-copyright text-center py-3" style="background-color:#8c7a00; color: white">©
            2020-21<br>
            <a>Cyber Kavach Organisation</a>
        </div>
    </footer> 
    </body>
    </html>