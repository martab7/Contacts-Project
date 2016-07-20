<?php

// View]

//Formats number for view
function formatNumber($number) {
    if (strlen($number) == 7) {
        return substr($number, 0, 3) . '-' . substr($number, 3);
    }
    if (strlen($number) == 10) {
        return substr($number, 0, 3) . '-' . substr($number, 3, 3) . '-' . substr($number, 6);
    }
    return $number;
}

//Builds TR and its TD FOREACH CONTACT
function formatContacts($contacts)
{
    $table = "";
    foreach ($contacts as $contact) {
      $table .= "<tr>"
          . "<td>" . $contact['name'] . "</td>"
          . "<td>" . formatNumber($contact['number']) . "</td>"
          . "<td>"
              . "<a class=\"btn btn-danger\" href=\"?name=" . $contact['name'] . "\">"
                  . "<span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\">"
                  . "</span>"
                  . "Delete"
              . "</a>"
          . "</td>"
      . "</tr>";
    }
    return $table;
}
?>
