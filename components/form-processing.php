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
            $streetNumberErr = "Please enter a valid streetnumber";
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
            $zipcodeErr = "Please enter a valid zipcode";
        }
    }
    // Check input errors before sending email/alert
    if(empty($nameErr) && empty($emailErr) && empty($streetErr) && empty($streetNumberErr) && empty($cityErr) && empty($zipcodeErr) ){
        $_SESSION['address'] = ['street' => $street, 'streetNumber' => $streetNumber, 'city' => $city, 'zipcode' => $zipcode];
        $_SESSION['user'] = ['name' => $name, 'email' => $email];

        echo  "yeeeees";
    }
}
?>
<div class="form-group">
    <label for="email">Email</label>
    <input class="form-control item" type="email" id="email" name="email" value="<?php echo $email; ?>"/>
    <?php  if(!empty($emailErr)){ echo  '<div class="alert alert-danger" role="alert">'.$emailErr.'</div>';}; ?>
</div>
<div class="form-group">
    <label for="name">Your Name</label>
    <input type="text" id="name" name="name" class="form-control item" value="<?php echo $name; ?>"/>
    <?php  if(!empty($nameErr)){ echo  '<div class="alert alert-danger" role="alert">'.$nameErr.'</div>';}; ?>
</div>

<div class="form-group">
    <label for="street">Street:</label>
    <input type="text" name="street" id="street" class="form-control item" value="<?php echo $street; ?>">
    <?php  if(!empty($streetErr)){ echo  '<div class="alert alert-danger" role="alert">'.$streetErr.'</div>';}; ?>
</div>
<div class="form-group">
    <label for="streetnumber">Street number:</label>
    <input type="text" id="streetnumber" name="streetnumber" class="form-control item" value="<?php echo $streetNumber; ?>">
    <?php  if(!empty($streetNumberErr)){ echo  '<div class="alert alert-danger" role="alert">'.$streetNumberErr.'</div>';}; ?>
</div>
<div class="form-group">
    <label for="city">City:</label>
    <input type="text" id="city" name="city" class="form-control item" value="<?php echo $city; ?>">
    <?php  if(!empty($cityErr)){ echo  '<div class="alert alert-danger" role="alert">'.$cityErr.'</div>';}; ?>
</div
<div class="form-group">
    <label for="zipcode">Zipcode</label>
    <input type="text" id="zipcode" name="zipcode" class="form-control item" value="<?php echo $zipcode; ?>">
    <?php  if(!empty($zipcodeErr)){ echo  '<div class="alert alert-danger" role="alert">'.$zipcodeErr.'</div>';}; ?>
</div>
<div class="form-group">
    <button class="btn btn-primary btn-block btn-lg" type="submit">Sign in </button>
</div>


