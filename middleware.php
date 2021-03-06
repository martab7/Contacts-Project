<?php

//gets file list of contacts(DB)
function loadContacts()
{
    $content = trim(file_get_contents('contacts.txt'));
    $lines = explode("\n", $content);
    $contacts = [];
    foreach ($lines as $line) {
        $contact = explode('|', $line);
        addContact($contacts, $contact[0], $contact[1]);
    }
    if(isset($_GET['search-name'])){
      $match = searchContact($contacts, $_GET['search-name']);
      $contactstoview=$match;
      return $contactstoview;
    }
    return $contacts;
  }

//saves user input contact
function saveContacts($contacts)
{
    $content = '';
    foreach ($contacts as $contact) {
        $content .= implode('|', $contact) . "\n";
    }
    file_put_contents('contacts.txt', $content);
}

?>
