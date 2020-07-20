<?php

require('../data/database.php');
require('../data/functions.php');

if (isset($_POST['send_scon'])) {
    $post = $_POST;
    

    $pseudo = varchar($post['pseudo']);
    $motdepasse = varchar($post['motdepasse']);

    $futuser = tousUserSelon($database, 'pseudo', $pseudo);


    if (count($futuser) == 1) {
        $user = $futuser[0];


        if ($user['motdepasse'] == $post['motdepasse']) {
            session_start();

        
            $_SESSION['id'] = $user['id'];
            $_SESSION['pseudo'] = $user['pseudo'];
            $_SESSION['motdepasse'] = $user['motdepasse'];
            $_SESSION['sexe'] = $user['sexe'];
            $_SESSION['groupe'] = $user['groupe'];

            vaVers('../chat/index.php');
        } else {
            vaVers('../scon/index.php');
        }  
    } else {
        vaVers('../scon/index.php');
    }
    


} else {
    echo 'nopost';
}
