<?php
require('../data/database.php');
require('../data/functions.php');



if (isset($_POST['send_sinc'])) {
    $post = $_POST;

    $code_user        = varchar(gencode('user'));
    $pseudo             = varchar($post['pseudo']);
    $motdepasse     = varchar($post['motdepasse']);
    $sexe                  = varchar($post['sexe']);

    $content['code_user']     = $code_user;
    $content['pseudo']          = $pseudo;
    $content['motdepasse']  = $motdepasse;
    $content['sexe']                = $sexe;
    $content['groupe']          = '""';

    $futuser = tousUserSelon($database, 'pseudo', $pseudo);

    if (count($futuser) == 0) {
        $nbmodif = nouveauUser($database, $content);

        if ($nbmodif == 1) {
            vaVers('../scon/index.php');
        } else {
            vaVers('../sinc/index.php');
        }
    } else {
        vaVers('../sinc/index.php');
    }
} else {
    echo "La variable POST n'a
    
    +36060pas été détecté";
}
