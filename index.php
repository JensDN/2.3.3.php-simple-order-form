<?php
//this line makes PHP behave in a more strict way
declare(strict_types=1);
session_start();
include './components/my_functions.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contact - Brand</title>
    <link rel="stylesheet" href="./UI/BootstrapstudioPhpForm/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
</head>

<body>
<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
    <div class="container"><a class="navbar-brand logo" href="#">Bread&amp;Juice</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
             id="navbarNav">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link" href="Bread&Juice.php">Bread&amp;Juice</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php">Sign In</a></li>
            </ul>
        </div>
    </div>
</nav>
<main class="page contact-page">
    <section class="portfolio-block contact">
        <div class="container">
            <div class="heading">
                <h2>Write your info down</h2>
            </div>
            <div>
            <?php
                if(!isset($_SESSION['address'])){
                    echo '<form method="post">';
                    require "./components/form-processing.php";
                    echo '</form>';
                } else {
                    echo '<ul>';
                    echo '<li>'.$_SESSION['address']['street'].'</li>';
                    echo '<li>'.$_SESSION['address']['streetNumber'].'</li>';
                    echo '<li>'.$_SESSION['address']['city'].'</li>';
                    echo '<li>'.$_SESSION['address']['zipcode'].'</li>';
                    echo '</ul>';
                };
                ?>
            </div>
        </div>
    </section>
</main>
<footer class="page-footer">
    <div class="container">
        <div class="links"><a href="#">About me</a><a href="#">Contact me</a><a href="#">Bread&amp;Juice</a></div>
    </div>
</footer>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
<script src="assets/js/script.min.js"></script>
</body>

</html>

