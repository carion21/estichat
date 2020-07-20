<?php 
include('./data/database.php');
require('./data/functions.php');

$content['code_message'] = gencode("message");
    $content['destinateur'] = "esti";
    $content['destinataire'] = "carion";
    $content['message']       = "azerty";
    $content['date_register'] = today();

    $nbmodif = nouveauMessage($database, $content);

    echo $nbmodif;



