<?php

session_start();

require('../data/database.php');
require('../data/functions.php');

if (isset($_GET) && isset($_SESSION)) {

    $destinateur = $_SESSION["pseudo"];
    $destinataire= $_GET["destinataire"];

    $listeMessage = listeMessage($database, varchar($destinateur), varchar($destinataire));

    if (count($listeMessage) != 0) {
        foreach ($listeMessage as $message) {
            if($message['destinateur'] == $destinateur) {
                ?>
                    <div id="mm" class="col m12 " style=" height: auto; margin: 10px;">
                        <div id="mright" class="col m3 right teal lighten-3" style="border: 2px solid green; padding: 1%; height: auto; border-radius: 25px 40px 0% 25px; width: auto;">
                            <h5 class="center">
                                <?= $message['message'] ?>
                            </h5>
                        </div>
                    </div>
                <?php
            } else {
                ?>
                    <div id="mm" class="col m12 " style="height: auto; margin: 10px;">
                        <div id="mleft" class="col m3 left orange lighten-3" style="border: 2px solid orange; padding: 1%; height: auto; border-radius: 40px 25px 25px 0%; width: auto;">
                            <h5 class="center">
                                <?= $message['message'] ?>
                            </h5>
                        </div>
                    </div>
                <?php
            }
        }
    } else {
        echo "";
    }

} else {
    echo "no";
}
