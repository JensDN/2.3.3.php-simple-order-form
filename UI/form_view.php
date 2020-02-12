<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
          rel="stylesheet"/>
    <style type="text/css">
    .error{ color: red;}
    .success{ color: green;}
    </style>
    <title>Order food & drinks</title>
</head>
<body>
<div class="container">
    <h1>Order food in restaurant "the Personal Ham Processors"</h1>
    <nav>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="?food=0">Order food</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?food=1">Order drinks</a>
            </li>
        </ul>
    </nav>
    <form method="post">
    <?php
    if(!isset($_SESSION['address'])){
        echo '<form method="post" >';
        require "./components/form-processing.php";
        echo '</from>';
    } else {
        echo '<ul>';
        echo '<li>'.$_SESSION['address']['street'].'</li>';
        echo '<li>'.$_SESSION['address']['streetNumber'].'</li>';
        echo '<li>'.$_SESSION['address']['city'].'</li>';
        echo '<li>'.$_SESSION['address']['zipcode'].'</li>';
        echo '</ul>';
    };
    ?>
        <button type="submit" class="btn btn-primary">Sign In</button>
    </form>
    <form method="post">
    <?php require './components/products-processing.php'  ?>
    <button type="submit" class="btn btn-primary">Order!</button>
    </form>
    <?php require 'footer.php' ?>
</div>
<style>
    footer {
        text-align: center;
    }
</style>
</body>
</html>
