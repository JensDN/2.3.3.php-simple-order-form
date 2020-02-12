<?php
//this line makes PHP behave in a more strict way
declare(strict_types=1);
session_start();
function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}
function displayItems (){
    if(isset($_GET['food'])) {
        switch ($_GET['food']) {
            case '1':
                return $products = [
                    ['name' => 'Cola', 'price' => 2,'imgURL'=>'/img/juice/cola.png'],
                    ['name' => 'Fanta', 'price' => 2,'imgURL'=>'/img/juice/fanta.png'],
                    ['name' => 'Sprite', 'price' => 2,'imgURL'=>'/img/juice/sprite.png'],
                    ['name' => 'Ice-tea', 'price' => 3,'imgURL'=>'/img/juice/icetea.jpg'],
                ];
                break;
            default:
                return $products = [
                    ['name' => 'Club Ham', 'price' => 3.20,'imgURL'=>'/img/bread/clubham.jpg'],
                    ['name' => 'Club Cheese', 'price' => 3,'imgURL'=>'/img/bread/clubcheese.jpeg'],
                    ['name' => 'Club Cheese & Ham', 'price' => 4,'imgURL'=>'/img/bread/clubcheeseham.jpg'],
                    ['name' => 'Club Chicken', 'price' => 4,'imgURL'=>'/img/bread/clubchicken.jpg'],
                    ['name' => 'Club Salmon', 'price' => 5,'imgURL'=>'/img/bread/clubsalmon.jpg']
                ];
                break;
        }
    } else {
        return $products = [
            ['name' => 'Cola', 'price' => 2,'imgURL'=>'/img/juice/cola.png'],
            ['name' => 'Fanta', 'price' => 2,'imgURL'=>'/img/juice/fanta.png'],
            ['name' => 'Sprite', 'price' => 2,'imgURL'=>'/img/juice/sprite.png'],
            ['name' => 'Ice-tea', 'price' => 3,'imgURL'=>'/img/juice/icetea.jpg'],
            ['name' => 'Club Ham', 'price' => 3.20,'imgURL'=>'/img/bread/clubham.jpg'],
            ['name' => 'Club Cheese', 'price' => 3,'imgURL'=>'/img/bread/clubcheese.jpeg'],
            ['name' => 'Club Cheese & Ham', 'price' => 4,'imgURL'=>'/img/bread/clubcheeseham.jpg'],
            ['name' => 'Club Chicken', 'price' => 4,'imgURL'=>'/img/bread/clubchicken.jpg'],
            ['name' => 'Club Salmon', 'price' => 5,'imgURL'=>'/img/bread/clubsalmon.jpg']
    ];}
};
function calculatePrice($orderProducts){
   $eachPrice = array();
   foreach ($orderProducts as $orderProduct ) {
       foreach ($orderProduct as $priceKey => $quantity) {
           $eachPrice[] = (int)$priceKey * (int)$quantity;
       }
   }
return $totalPrice = array_sum($eachPrice);
};

