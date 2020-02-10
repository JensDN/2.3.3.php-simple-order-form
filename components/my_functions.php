<?php
//this line makes PHP behave in a more strict way
declare(strict_types=1);
session_start();
$_SESSION["address"] = ['street'=> 'Bosdreef','streetNumber' => 103, 'city'=> 'Buggenhout', 'zipCode'=> 9255 ];

whatIsHappening();
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
Function displayItems (){
    if(isset($_GET['food'])) {
        switch ($_GET['food']) {
            case '1':
                return $products = [
                    ['name' => 'Cola', 'price' => 2],
                    ['name' => 'Fanta', 'price' => 2],
                    ['name' => 'Sprite', 'price' => 2],
                    ['name' => 'Ice-tea', 'price' => 3],
                ];
                break;
            default:
                return $products = [
                    ['name' => 'Club Ham', 'price' => 3.20],
                    ['name' => 'Club Cheese', 'price' => 3],
                    ['name' => 'Club Cheese & Ham', 'price' => 4],
                    ['name' => 'Club Chicken', 'price' => 4],
                    ['name' => 'Club Salmon', 'price' => 5]
                ];
                break;
        }
    } else {
        return $products = [
        ['name' => 'Club Ham', 'price' => 3.20],
        ['name' => 'Club Cheese', 'price' => 3],
        ['name' => 'Club Cheese & Ham', 'price' => 4],
        ['name' => 'Club Chicken', 'price' => 4],
        ['name' => 'Club Salmon', 'price' => 5]
    ];}
};
$totalValue = 0;
function validateThatDate ($emailInput, $addressInput){

};
function validateEmail ($emailInput) {
    if (filter_var($emailInput, FILTER_VALIDATE_EMAIL)) {
        echo "Email address '$emailInput' is considered valid.\n";
    } else {
        echo "Email address '$emailInput' is considered invalid.\n";
    }
};
function validateAddress ($addressInput){

}