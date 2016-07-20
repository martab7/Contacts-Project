<?php

  require('middleware.php');
  require('validation.php');
  require('controller.php');
  require('model.php');
  require('view.php');

  // // Input / Output
  // function prompt($message)
  // {
  //     alert($message);
  //     return trim(fgets(STDIN));
  // }
  //
  // function confirm($message)
  // {
  //     return strtolower(prompt($message)) === 'y';
  // }
  //
  // function alert($message)
  // {
  //     fwrite(STDOUT, $message . PHP_EOL);
  // }


  // Front controller

  //runs code for each action
  // function contactsManager()
  //   $contacts = loadContacts();
  //   $option = prompt($menu);
  //   switch ($option) {
  //       case 1:
  //           viewContacts($contacts);
  //           break;
  //       case 2:
  //           newContact($contacts);
  //           break;
  //       case 3:
  //           findContact($contacts);
  //           break;
  //       case 4:
  //           deleteContact($contacts);
  //           break;
  //       default:
  //           alert('See you!');
  //   }
  //   saveContacts($contacts);
  // }
  //
  // contactsManager();

  $contacts = loadContacts();
  if(!isset($_GET['name'])){
    viewContacts($contacts);
  } elseif (isset($_GET['name'])) {
    $name = $_GET['name'];
    deleteContacts($contacts, $name);
  }
  if(isset($_POST['name'])!==false){
    var_dump($_POST);
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
