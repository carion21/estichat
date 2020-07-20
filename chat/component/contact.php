<?php 



$futcontacts = tousUser($database);

foreach ($futcontacts as $contact) {
    if($contact["code_user"] == $_SESSION["code_user"]) {
        echo "yes";
    } else {
        echo "no";
    }
}