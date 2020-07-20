<?php

function nouveauUser($database, $content) {
    $requete = "INSERT INTO user SET code_user = ".$content['code_user'].", groupe = ".$content['groupe'].", pseudo = ".$content['pseudo'].", motdepasse = ".$content['motdepasse'].", sexe = ".$content['sexe']."";
    $nbModifications = $database->exec($requete);

    return $nbModifications;
}

function tousUser($database) {
    $requete = "SELECT * FROM user";
    $reponse = $database->query($requete);
    $data = $reponse->fetchAll();

    return $data;
    $reponse->closeCursor();
    $data = NULL;
}


function tousUserSelon($database, $champ, $valeurChamp) {
    $requete = "SELECT * FROM user WHERE ".$champ."=".$valeurChamp;
    $reponse = $database->query($requete);  
    $data = $reponse->fetchAll();

    return $data;
    $reponse->closeCursor();
    $data = NULL;
}


function modifierUserSelon($database, $cible, $valeurCible, $champCible, $valeurChampCible) {
    try {
        $requete = "UPDATE user SET ".$champCible."=".$valeurChampCible." WHERE ".$cible."=".$valeurCible;
        $nbModifications = $database->exec($requete);

        return $nbModifications;
    } catch (Exception $e) {
        die ("Erreur:".$e->getmessage());
    }
}

function supprimerUserSelon($database, $cible, $valeurCible) {
    try {
        $requete = "DELETE FROM user WHERE ".$cible."=".$valeurCible;
        $nbModifications = $database->exec($requete);

        return $nbModifications;
    } catch (Exception $e) {
        die ("Erreur:".$e->getmessage());
    }
}


function nouveauMessage($database, $content) {
    $requete = "INSERT INTO message SET code_message= ".$content['code_message'].", destinateur = ".$content['destinateur'].", destinataire = ".$content['destinataire'].", message = ".$content['message'].", date_register = ".$content['date_register']."";
    $nbModifications = $database->exec($requete);

    return $nbModifications;
}

function tousMessage($database) {
    $requete = "SELECT * FROM message";
    $reponse = $database->query($requete);
    $data = $reponse->fetchAll();

    return $data;
    $reponse->closeCursor();
    $data = NULL;
}

function tousMessageSelon($database, $champ, $valeurChamp) {
    $requete = "SELECT * FROM message WHERE ".$champ."=".$valeurChamp;
    $reponse = $database->query($requete);  
    $data = $reponse->fetchAll();

    return $data;
    $reponse->closeCursor();
    $data = NULL;
}

function listeMessage($database, $valeurDestinateur, $valeurDestinataire) {
    $requete = "SELECT * FROM message WHERE ( destinateur =".$valeurDestinateur." AND destinataire =".$valeurDestinataire.
    ") OR  ( destinateur =".$valeurDestinataire." AND destinataire =".$valeurDestinateur.")";
    $reponse = $database->query($requete);  
    $data = $reponse->fetchAll();

    return $data;
    $reponse->closeCursor();
    $data = NULL;
}

function modifierMessageSelon($database, $cible, $valeurCible, $champCible, $valeurChampCible) {
    try {
        $requete = "UPDATE message SET ".$champCible."=".$valeurChampCible." WHERE ".$cible."=".$valeurCible;
        $nbModifications = $database->exec($requete);

        return $nbModifications;
    } catch (Exception $e) {
        die ("Erreur:".$e->getmessage());
    }
}

function supprimerMessageSelon($database, $cible, $valeurCible) {
    try {
        $requete = "DELETE FROM message WHERE ".$cible."=".$valeurCible;
        $nbModifications = $database->exec($requete);

        return $nbModifications;
    } catch (Exception $e) {
        die ("Erreur:".$e->getmessage());
    }
}


function nouveauGroupe($database, $content) {
    $requete = "INSERT INTO groupe SET code_groupe= ".$content['code_groupe'].", nb_elt = ".$content['nb_elt'].", date_register = ".$content['date_register']."";
    $nbModifications = $database->exec($requete);

    return $nbModifications;
}

function tousGroupe($database) {
    $requete = "SELECT * FROM groupe";
    $reponse = $database->query($requete);
    $data = $reponse->fetchAll();

    return $data;
    $reponse->closeCursor();
    $data = NULL;
}

function tousGroupeSelon($database, $champ, $valeurChamp) {
    $requete = "SELECT * FROM groupe WHERE ".$champ."=".$valeurChamp;
    $reponse = $database->query($requete);  
    $data = $reponse->fetchAll();

    return $data;
    $reponse->closeCursor();
    $data = NULL;
}

function modifierGroupeSelon($database, $cible, $valeurCible, $champCible, $valeurChampCible) {
    try {
        $requete = "UPDATE groupe SET ".$champCible."=".$valeurChampCible." WHERE ".$cible."=".$valeurCible;
        $nbModifications = $database->exec($requete);

        return $nbModifications;
    } catch (Exception $e) {
        die ("Erreur:".$e->getmessage());
    }
}

function supprimerGroupeSelon($database, $cible, $valeurCible) {
    try {
        $requete = "DELETE FROM groupe WHERE ".$cible."=".$valeurCible;
        $nbModifications = $database->exec($requete);

        return $nbModifications;
    } catch (Exception $e) {
        die ("Erreur:".$e->getmessage());
    }
}

function vaVers($route) {
    header('Location: '.$route);
}

function gencode($motcle)
{
    $nb1 =  0;
    $nb2 = 900000;
    $nb  = rand($nb1, $nb2);
    $code = $motcle.'-'.$nb;

    return $code;
}

function today(){
    $today = date("Y-m-d H:i:s");
    return $today;
}

function varchar($variable) {
    return '"'.$variable.'"';
}

