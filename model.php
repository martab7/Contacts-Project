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
    if(strlen($name)>0){
      foreach ($contacts as $contact) {
          if (stripos($contact['name'],$name)!==false) {
              $matches[] = $contact;
          }
      }
      return $matches;
    }else{
      return $contacts;
    }
    return $matches[0];
}

//finds contact and DELETES
function deleteContacts(&$contacts, $name) {
  if($name) {
    $contactToBeDeleted = searchContact($contacts, $name);
    $contactString = implode('|', $contactToBeDeleted[0]);
    $contents = file_get_contents('contacts.txt');
    $contents = str_replace($contactString, '', $contents);
    file_put_contents('contacts.txt', trim($contents));
  } else {
    print '<script type="text/javascript">';
    print 'alert("Unable to delete contact.")';
    print '</script>';
  }
}
?>
