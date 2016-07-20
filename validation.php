<?php

// Validation

//checks if user Name Entry is empty (Search & Save Input)
function isValidName($name)
{
    return !empty(trim($name));
}


//checks if # input is Numeric, Not Empty, (number length is 7 digits or 10 digits)
function isValidPhoneNumber($phoneNumber)
{
    return !empty(trim($phoneNumber)) && is_numeric($phoneNumber)
        && (strlen($phoneNumber) == 7 || strlen($phoneNumber) == 10);
}

//If input name is valid and RETURNS NAME OR alert user that Name form is Empty
function inputName($message)
{
    $name = prompt($message);
    if (isValidName($name)) {
        return $name;
    }
    alert('Please enter a non-empty name');
    return inputName($message);
}

//If input number is valid and RETURNS Number OR alert user that Name form is Empty
function inputNumber($message)
{
    $number = prompt($message);
    if (isValidPhoneNumber($number)) {
        return $number;
    }
    alert('Please enter a phone number with 7 or 10 digits');
    return inputNumber($message);
}

function inputHas($key) {
  if(isset($_GET["$key"])) {
    return true;
  } else {
    return false;
  }
}

function inputGet($key) {
  if (inputHas($key) == true) {
    $contact = $key;
    return $contact;
  } else {
    return null;
  }
}
?>
