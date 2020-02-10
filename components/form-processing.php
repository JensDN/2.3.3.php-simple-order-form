<?php
function filterName($field){
    //Sanitize the userName;
    $field = filter_var(trim($field),FILTER_SANITIZE_STRING);
    // filter_var: Filters a variable with a specified filter
    // trim() :This function returns a string with whitespace stripped from the beginning and end of str;
    // FILTER_SANITIZE_STRING : Strip tags, optionally strip or encode special characters;
    if(filter_var($field,FILTER_VALIDATE_REGEXP, array("options" => array("regexp"=>"/^[a-zA-Z\s]+$/")))) //Validate User Name
    {
        return $field;
    }
    else {
        return FALSE;
    }
};
function filterEmail($field){
    //Sanitize Email
    $field = filter_var(trim($field),FILTER_SANITIZE_EMAIL);
    // filter_var: Filters a variable with a specified filter
    // trim() :This function returns a string with whitespace stripped from the beginning and end of str;
    // FILTER_SANITIZE_EMAIL :Remove all characters except letters, digits and !#$%&'*+-=?^_`{|}~@.[].
    if (filter_var($field, FILTER_VALIDATE_EMAIL))
    {
        return $field;
    }
    else {
        return FALSE;
    }
};
function filterString($field){
    //Sanitize Email
    $field = filter_var(trim($field),FILTER_SANITIZE_STRING);
    // filter_var: Filters a variable with a specified filter
    // trim() :This function returns a string with whitespace stripped from the beginning and end of str;
    // FILTER_SANITIZE_STRING :Strip tags, optionally strip or encode special characters.
    if (!empty($field))
    {
        return $field;
    }
    else {
        return FALSE;
    }
};
function filterNumber($field){
    //Sanitize Number
    $field = filter_var(trim($field),FILTER_SANITIZE_NUMBER_INT);
    // filter_var: Filters a variable with a specified filter
    // trim() :This function returns a string with whitespace stripped from the beginning and end of str;
    // FILTER_SANITIZE_NUMBER_INT :Remove all characters except digits, plus and minus sign.
    if (filter_var($field, FILTER_VALIDATE_INT))
    {
        return $field;
    } else {
        return FALSE;
    }
};
// Define the error variables and initialize with empty values;
$nameErr = $emailErr = $streetErr = $streetNumberErr = $cityErr = $zipcodeErr= '';
$name = $email = $street = $streetNumber = $city =$zipcode = '';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // validate userName/Name
    if(empty($_POST["name"])){
        $nameErr = "Please enter your name.";
    } else {
        $name = filterName($_POST["name"]);
        if ($name ==FALSE){
            $nameErr = "Please enter a valid name.";
        }
    }
    if(empty($_POST["email"])){
        $emailErr = "Please enter your email address.";
    } else {
        $email = filterEmail($_POST["email"]);
        if($email == FALSE){
            $emailErr = "Please enter a valid email address.";
        }
    }
    if(empty($_POST["street"])){
        $streetErr = "Please enter your street address.";
    } else {
        $street = filterString($_POST["street"]);
        if($street == FALSE){
            $streetErr = "Please enter a valid address.";
        }
    }
    if(empty($_POST["streetnumber"])){
        $streetNumberErr = "Please enter your street Number";
    } else {
        $streetNumber = filterNumber($_POST['streetnumber']);
        if($streetNumber == FALSE){
            $streetNumberErr = "Please enter e valid streetnumber";
        }
    }
    if(empty($_POST["city"])){
        $cityErr = "Please enter your email address.";
    } else {
        $city = filterString($_POST["street"]);
        if($city == FALSE){
            $cityErr = "Please enter a valid name of your city.";
        }
    }
    if(empty($_POST["zipcode"])){
        $zipcodeErr = "Please enter your zipcode";
    } else {
        $zipcode = filterNumber($_POST['zipcode']);
        if($zipcode == FALSE){
            $zipcodeErr = "Please enter e valid zipcode";
        }
    }
    // Check input errors before sending email/alert
    if(empty($nameErr) && empty($emailErr) && empty($streetErr) && empty($streetNumberErr) && empty($cityErr) && empty($zipcodeErr) ){
        echo  "yeeeees";
    }

}
?>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="email">E-mail:</label>
        <input type="text" id="email" name="email" class="form-control" value="<?php echo $email; ?>"/>
        <span class="error"><?php echo $emailErr; ?></span>
    </div>
    <div class="form-group col-md-6">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" class="form-control" value="<?php echo $name; ?>"/>
        <span class="error"><?php echo $nameErr; ?></span>
    </div>
</div>

<fieldset>
    <legend>Address</legend>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="street">Street:</label>
            <input type="text" name="street" id="street" class="form-control" value="<?php echo $street; ?>">
            <span class="error"><?php echo $streetErr; ?></span>
        </div>
        <div class="form-group col-md-6">
            <label for="streetnumber">Street number:</label>
            <input type="text" id="streetnumber" name="streetnumber" class="form-control" value="<?php echo $streetNumber; ?>">
            <span class="error"><?php echo $streetNumberErr; ?></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="city">City:</label>
            <input type="text" id="city" name="city" class="form-control" value="<?php echo $city; ?>">
            <span class="error"><?php echo $cityErr; ?></span>
        </div>
        <div class="form-group col-md-6">
            <label for="zipcode">Zipcode</label>
            <input type="text" id="zipcode" name="zipcode" class="form-control" value="<?php echo $zipcode; ?>">
            <span class="error"><?php echo $zipcodeErr; ?></span>
        </div>
    </div>
</fieldset>

<fieldset>
    <legend>Products</legend>
    <?php foreach (displayItems() AS $i => $product): ?>
        <label>
            <input type="checkbox" value="1" name="products[<?php echo $i ?>]"/> <?php echo $product['name'] ?> -
            &euro; <?php echo number_format($product['price'], 2) ?></label><br />
    <?php endforeach; ?>
</fieldset>

<button type="submit" class="btn btn-primary">Order!</button>
