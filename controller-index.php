<?php

  require('middleware.php');
  require('validation.php');
  require('controller.php');
  require('model.php');
  require('view.php');

  $contacts = loadContacts();

  if(isset($_POST['delete'])) {
    print '<script type="text/javascript">';
    $confirm = print 'confirm("Do you want to delete?")';
    print '</script>';
    $name = $_POST['delete'];
    if($confirm == 1) {
      deletecontacts($contacts, $name);
    } else {
      viewContacts($contacts);
    }
  } else {
    viewContacts($contacts);
  }
  if(isset($_POST['name'])!==false){
    //var_dump($_POST);
    $matches = searchContact($contacts,$_POST['name']);
    if(empty($matches)){
        newContact($contacts,$_POST['name'],$_POST['number']);
        saveContacts($contacts);
    }
  }
  if(isset($_GET['search-name'])){
    $match = searchContact($contacts, $_GET['search-name']);
    $contactstoview=$match;
  }else{
    $contactstoview=$contacts;
  }

?>
