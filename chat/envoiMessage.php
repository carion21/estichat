<?php 

session_start();

require('../data/database.php');
require('../data/functions.php');

if(isset($_POST) && isset($_SESSION)) {
    $post = $_POST;
    $content['code_message'] = varchar(gencode("message"));
    $content['destinateur'] = varchar($_SESSION['pseudo']);
    $content['destinataire'] = varchar($post['destinataire']);
    $content['message']       = varchar($post['message']);
    $content['date_register'] = varchar(today());

    $nbmodif = nouveauMessage($database, $content);

    echo "resultat = ".$nbmodif."<br/>\n";
} else {
    echo "resultat = 0 <br/>\n";
}