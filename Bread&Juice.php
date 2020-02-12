<?php
require './components/my_functions.php';
whatIsHappening();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Projects - Brand</title>
    <link rel="stylesheet" href="./UI/BootstrapstudioPhpForm/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">

</head>

<body>
<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
    <div class="container"><a class="navbar-brand logo" href="#">Bread&#38;Juice</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
             id="navbarNav">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="Bread&Juice.php">Bread&#38;Juice</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Sign in</a></li>
            </ul>
        </div>
    </div>
</nav>
<main>
    <section class="portfolio-block projects-with-sidebar">
        <div class="container">
            <div class="heading">
                <h2>Order</h2>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <ul class="list-unstyled sidebar">
                        <li><a class="active" href="/Bread&Juice.php">All</a></li>
                        <li><a href="?food=0">Bread</a></li>
                        <li><a href="?food=1">Juice</a></li>
                    </ul>
                    <div class="profile-sidebar">
                            <!-- SIDEBAR USERPIC -->
                            <div class="profile-userpic">
                                <img src="https://www.jamf.com/jamf-nation/static/assets/avatar/generic-user.png    " class="img-responsive" alt="">
                            </div>
                            <!-- END SIDEBAR USERPIC -->
                            <!-- SIDEBAR USER TITLE -->
                            <div class="profile-usertitle">
                                <div class="profile-usertitle-name">
                                    <?php echo $_SESSION['user']['name'] ?? 'unknown'; ?>
                                <div class="profile-usertitle-job">
                                    <?php echo $_SESSION['user']['email'] ?? 'unknown'; ?>
                                </div>
                            </div>
                            <!-- END SIDEBAR USER TITLE -->
                            <!-- SIDEBAR BUTTONS -->
                            <div class="profile-userbuttons">
                                <?php if($_SESSION['user'] == null){ echo '<a href="index.php"></a><button type="button" class="btn btn-success btn-sm">Sign In</button></a>'; } ?>
                                <button type="button" class="btn btn-success btn-sm">Follow</button>
                                <button type="button" class="btn btn-danger btn-sm">Message</button>
                            </div>
                            <!-- END SIDEBAR BUTTONS -->
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <form method="post">
                            <?php require './components/products-processing.php' ?>
                            <button type="submit" class="btn btn-primary">Order!</button>
                        </form>

                    </div>
                </div>
                <div class="col-md-9">

                </div>
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
