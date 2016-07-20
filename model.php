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
        if ($contact['name'] == $name) {
            $matches[] = $contact;
        }
    }
    return $matches[0];
}

//finds contact and DELETES
function deleteContacts(&$contacts, $name) {
  if($name) {
    $contactToBeDeleted = searchContact($contacts, $name);
    $contactString = implode('|', $contactToBeDeleted);
    $contents = file_get_contents('contacts.txt');
    $contents = str_replace($contactString, '', $contents);
    file_put_contents('contacts.txt', trim($contents));
    header('Location: index.php');
  } else {
    print '<script type="text/javascript">';
    print 'alert("Unable to delete contact.")';
    print '</script>';
  }
}
?>
<!--
function searchContact(&$allContacts, $nameSearch) {
    foreach ($allContacts as $contact) {
        if (strpos($contact['name'], $nameSearch) !== false) {
          return $contact;
        }
    }
} -->
