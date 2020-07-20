<?php

session_start();

require('../data/database.php');
require('../data/functions.php');

if (isset($_SESSION['pseudo'])) {

    if (isset($_GET['pseudo'])) {
        ?>

<!DOCTYPE>
<html>
    <head>
        <link rel="stylesheet" href="../assets/materialize/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="../assets/materialize/js/materialize.min.js"></script>
        <script src="../assets/js/jquery.min.js"></script>
    </head>
    <body>
        <div class="row " style="height : 95%;  margin-left : 0px">
            <div class="col m3 " style=" height: 100%">
                <div class="col m12" style="height: 11%; margin-bottom : 1%;">
                    <nav  style="height: 90%; margin-top : 1%;" class="grey darken-2">
                        <div class="nav-wrapper">
                            <a href="./index.php" class="brand-logo center">EstiChat=><?= $_SESSION['pseudo'] ?></a>
                            <span id="pseudo" style="display : none;"><?= $_SESSION['pseudo'] ?></span>
                        </div>
                    </nav>            
                </div>
                <?php 




$futcontacts = tousUser($database);

$i = 0;
foreach ($futcontacts as $contact) {
    if($contact['pseudo'] != $_SESSION["pseudo"]) {
        $contacts[$i] = $contact;
        $i++;
    }
}
                
                ?>

                <div class="col m12" style="height: 80%; margin-bottom : 2%; overflow : auto;">
                    <div class="col m12" style=" height : 17%; margin: 3px; padding:5%;">
                        <?php 

                            foreach ($contacts as $contact) {
                               ?>
                                <?php echo '<a href="./index.php?pseudo='.$contact['pseudo'].'">' ?>
                                    <div class="row">
                                        <div class="card  white  row" style="padding: 5%;">
                                            <div class="col m4">
                                                <div class="card-image">    
                                                    <?php 
                                                        if($contact['sexe'] == "feminin") {
                                                            ?>
                                                                <img src="../assets/images/girl.png">
                                                            <?php
                                                        } else {
                                                            ?>
                                                                <img src="../assets/images/boy.png">
                                                            <?php
                                                        }
                                                    ?>    
                                                </div>
                                            </div>
                                            <div class="col m8">
                                                <div class="card-content black-text">
                                                    <span class="card-title">
                                                        <strong>
                                                            <?= $contact["pseudo"] ?>
                                                        </strong>
                                                    </span>
                                                    <p> je suis <?= $contact['sexe'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                               
                               <?php
                            }

                        ?>
                    </div>
                </div>


                <div class="col m12" style="height: 7.5%; padding : 1%;">
                            <div class="col m2 offset-m1">
                                <a class="btn-floating btn-large waves-effect waves-light red">
                                    <i class=" material-icons">sentiment_very_dissatisfied</i>
                                </a>
                            </div>
                            <div class="col m2" style="height: 100%">
                                <a class="btn-floating btn-large waves-effect waves-light red">
                                    <i class="material-icons">sentiment_dissatisfied</i>
                                </a>
                            </div>
                            <div class="col m2">
                                <a class="btn-floating btn-large waves-effect waves-light red">
                                    <i class="material-icons">sentiment_neutral</i>
                                </a>
                            </div>
                            <div class="col m2">
                                <a class="btn-floating btn-large waves-effect waves-light red">
                                    <i class="material-icons">sentiment_satisfied</i>
                                </a>
                            </div>
                            <div class="col m2">
                                <a class="btn-floating btn-large waves-effect waves-light red">
                                    <i class=" material-icons">sentiment_very_satisfied</i>
                                </a>
                            </div>
                </div>

            </div>
            <div class="col m9" style=" height: 100%; padding: 5px;">
                <div class="col m12" style="height: 10%; margin-bottom : 1%;">
                    <nav class="grey darken-2">
                        <div class="nav-wrapper">
                            <a id="contact" href="#!" class="brand-logo center"><?= $_GET['pseudo'] ?></a>
                            <ul class="right ">
                                <li>
                                    <a class="dropdown-trigger" href="../logout/index.php">
                                        Déconnexion
                                        <i class="material-icons right">forward</i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col m12" style=" height: 79%; margin-bottom : 1%" >
                    <div  id="recept" class="col m12 grey lighten-1" style="z-index: 0;  height: 100%; overflow: auto; ">
                        
                    </div>
                </div>
                <div class="col m12" style="height: 8%;  ">
                    <div class="row">
                        <form id="myform" action="./envoiMessage.php" method="post" class="col m12" style="height: 100%; margin-left : 5%">
                                <div class="input-field col m10">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <input id="message" type="text" class="validate" name="message">
                                    <label for="message">Message</label>
                                </div>
                                <div class="col m2">
                                    <button id="btnsend" type="submit" class="btn-floating btn-large waves-effect waves-light red pulse">
                                        <i class="material-icons">send</i>
                                    </button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        
    </body>
    <script src="../assets/js/index.js"></script>
    
   
</html>
        
        <?php
    } else {
        ?>

<!DOCTYPE>
<html>
    <head>
        <link rel="stylesheet" href="../assets/materialize/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="../assets/materialize/js/materialize.min.js"></script>
        <script src="../assets/js/jquery.min.js"></script>
    </head>
    <body>
        <div class="row " style=" border : 1px solid black; height : 95%;  margin-left : 0px">
            <div class="col m3 " style="border: 1px solid blue; height: 100%">
                <div class="col m12" style="height: 11%; margin-bottom : 1%;">
                    <nav  style="height: 90%; margin-top : 1%;" class="grey darken-2">
                        <div class="nav-wrapper">
                            <a href="./index.php" class="brand-logo center">EstiChat=><?= $_SESSION['pseudo'] ?></a>
                            </div>
                    </nav>            
                </div>
                <?php 




$futcontacts = tousUser($database);

$i = 0;
foreach ($futcontacts as $contact) {
    if($contact['pseudo'] != $_SESSION["pseudo"]) {
        $contacts[$i] = $contact;
        $i++;
    }
}
                
                ?>

                <div class="col m12" style="height: 80%; margin-bottom : 2%; overflow : auto;">
                    <div class="col m12" style=" height : 17%; margin: 3px; padding:5%;">
                        <?php 

                            foreach ($contacts as $contact) {
                               ?>
                                <?php echo '<a href="./index.php?pseudo='.$contact['pseudo'].'">' ?>
                                    <div class="row">
                                        <div class="card  white  row" style="padding: 5%;">
                                            <div class="col m4">
                                                <div class="card-image">    
                                                    <?php 
                                                        if($contact['sexe'] == "feminin") {
                                                            ?>
                                                                <img src="../assets/images/girl.png">
                                                            <?php
                                                        } else {
                                                            ?>
                                                                <img src="../assets/images/boy.png">
                                                            <?php
                                                        }
                                                    ?>    
                                                </div>
                                            </div>
                                            <div class="col m8">
                                                <div class="card-content black-text">
                                                    <span class="card-title">
                                                        <strong>
                                                            <?= $contact["pseudo"] ?>
                                                        </strong>
                                                    </span>
                                                    <p>je suis <?= $contact['sexe'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                               
                               <?php
                            }

                        ?>
                    </div>
                </div>


                <div class="col m12" style="height: 7.5%; padding : 1%;">
                            <div class="col m2 offset-m1">
                                <a class="btn-floating btn-large waves-effect waves-light red">
                                    <i class=" material-icons">sentiment_very_dissatisfied</i>
                                </a>
                            </div>
                            <div class="col m2" style="height: 100%">
                                <a class="btn-floating btn-large waves-effect waves-light red">
                                    <i class="material-icons">sentiment_dissatisfied</i>
                                </a>
                            </div>
                            <div class="col m2">
                                <a class="btn-floating btn-large waves-effect waves-light red">
                                    <i class="material-icons">sentiment_neutral</i>
                                </a>
                            </div>
                            <div class="col m2">
                                <a class="btn-floating btn-large waves-effect waves-light red">
                                    <i class="material-icons">sentiment_satisfied</i>
                                </a>
                            </div>
                            <div class="col m2">
                                <a class="btn-floating btn-large waves-effect waves-light red">
                                    <i class=" material-icons">sentiment_very_satisfied</i>
                                </a>
                            </div>
                </div>

            </div>
            <div class="col m9" style=" height: 100%; padding: 5px;">
                <div class="col m12" style="height: 10%; margin-bottom : 1%;">
                    <nav class="grey darken-2">
                        <div class="nav-wrapper">
                            <a id="pseudo" href="#!" class="brand-logo center"><?= $_SESSION['pseudo'] ?></a>
                            <ul class="right ">
                                <li>
                                    <a class="dropdown-trigger" href="../logout/index.php" data-target="#dropdown1">
                                        Déconnexion
                                        <i class="material-icons right">forward</i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        
    </body>
    <script src="../assets/js/index.js"></script>
    
   
</html>

        <?php
    }
} else {
    vaVers('../scon/index.php');
}

?>

