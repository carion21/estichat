<?php

try
{
    $database = new PDO ("mysql:host=localhost; dbname=estichat; charset=utf8",'carion', 'root');
    //echo  "yes";
}
catch (Exception $e){
    die ("Erreur:".$e->getMessage());
}

?>
