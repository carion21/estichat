

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
                <div class="col m12" style="border: 1px solid black; height: 11%; margin-bottom : 1%;">
                    <nav  style="height: 90%; margin-top : 1%;" class="grey darken-2">
                        <div class="nav-wrapper">
                            <a href="#!" class="brand-logo center">EstiChat</a>
                            </div>
                    </nav>            
                </div>
                <?php 




$futcontacts = tousUser($database);

foreach ($futcontacts as $contact) {
    if($contact["code_user"] == $_SESSION["code_user"]) {
        echo "yes";
    } else {
        echo "no";
    }
}
                
                ?>
                <div class="col m12" style="border: 1px solid black; height: 7.5%; padding : 1%;">
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
            <div class="col m9" style="border: 1px solid red; height: 100%; padding: 5px;">
                <div class="col m12" style="border: 1px solid black; height: 10%; margin-bottom : 1%;">
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
                <div id="recept" class="col m12" style="border: 1px solid orange; height: 79%; margin-bottom : 1%" >


                    <div class="col m12 grey lighten-1" style="z-index: 0;  height: 100%; overflow: auto; ">
                        <div id="mm" class="col m12 " style="border : 1px solid black; height: auto; margin: 10px;">
                            <div id="mleft" class="col m3 left orange lighten-3" style="border: 2px solid orange; padding: 1%; height: auto; border-radius: 40px 25px 25px 0%; width: auto;">
                                <h5 class="center">salut , j'espère bien ? 
                                    </h5>
                            </div>
                        </div>
                        <div id="mm" class="col m12 " style="border : 1px solid black; height: auto; margin: 10px;">
                            <div id="mright" class="col m3 right teal lighten-3" style="border: 2px solid green; padding: 1%; height: auto; border-radius: 25px 40px 0% 25px; width: auto;">
                                <h5 class="center">oui , cool</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col m12" style="border: 1px solid green; height: 8%;  ">
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