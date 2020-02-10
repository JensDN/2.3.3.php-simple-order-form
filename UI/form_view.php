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
    <form method="post" >
       <?php require './components/form-processing.php' ?>
    </form>

    <footer>You already ordered <strong>&euro; <?php echo $totalValue ?></strong> in food and drinks.</footer>
</div>

<style>
    footer {
        text-align: center;
    }
</style>
</body>
</html>
