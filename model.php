<?php
// Model

//concatinates NAME and NUMBER & appends it
function addContact(&$contacts, $name, $number)
{
    $contacts[] = [
        'name' => $name,
        'number' => $number,
    ];
}

//takes contact list and searches. Returns match
function searchContact($contacts, $name)
{
    $matches = [];
    foreach ($contacts as $contact) {
        if (strpos($contact['name'], $name) !== false) {
            $matches[] = $contact;
        }
    }
    return $matches;
}

//finds contact and DELETES
function deleteContacts(&$contacts, $name)
{
  if(inputGet($name) == $name) {
    $contactToBeDeleted = searchContact($contacts, $name);
    $contactString = implode('|', $contactToBeDeleted);

    $contents = file_get_contents('contacts.txt');
    $contents = str_replace($contactString . PHP_EOL, '', $contents);
    file_put_contents('contacts.txt', trim($contents));
  } else {
    alert('Cannot delete contact.');
  }
}
?>

<!-- function deleteContact(&$allContacts, $nameDelete) {
  $contactToBeDeleted = searchContact($allContacts, $nameDelete);
  $contactString = implode('|', $contactToBeDeleted);

  $contents = file_get_contents('contacts.txt');
  $contents = str_replace($contactString . PHP_EOL, '', $contents);
  file_put_contents('contacts.txt', trim($contents));
}

function searchContact(&$allContacts, $nameSearch) {
    foreach ($allContacts as $contact) {
        if (strpos($contact['name'], $nameSearch) !== false) {
          return $contact;
        }
    }
} -->
