<?php

// Controllers

//compiles all previous functions and combines them for their actions in controller-index


//takes built table for contacts file and APPENDS
function viewContacts($contacts)
{
    return formatContacts($contacts);
}
function newContact(&$contacts,$name,$number)
{
    $matches = searchContact($contacts, $name);
    if (count($matches) > 0) {
        break;
    }
    addContact($contacts, $name, $number);
}

//takes in contacts and COMPILES ADD functions from user input functions USING Search function && if
//search matches existing, then DELETE name

// function newContact(&$contacts)
// {
//     $name = inputName('Enter a new contact name:');
//     $number = inputNumber('Enter phone number');
//     $matches = searchContact($contacts, $name);
//     if (count($matches) > 0) {
//         $message = "There's already a contact named $name. Do you want to overwrite it? (y/n)";
//         if (confirm($message)) {
//             deleteContacts($contacts, $name);
//         } else {
//             newContact($contacts);
//         }
//     }
//     addContact($contacts, $name, $number);
//     alert('Contact saved successfully!');
// }

//compiles Search function while taking INPUT from search bar. Should Alert contact
function findContact($contacts)
{
    $name = inputName('Enter the name to search:');
    $matches = searchContact($contacts, $name);
    alert(formatContacts($matches));
}

//NOT NEEDED
// function deleteContact(&$contacts)
// {
//     $name = prompt('Enter the name of the contact to delete:');
//     deleteContacts($contacts, $name);
//     alert('Contacts deleted successfully!');
// }

?>
