<!DOCTYPE>
<html>
    <head>
        <link rel="stylesheet" href="../assets/css/index.css">
        <link rel="stylesheet" href="../assets/materialize/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="../assets/materialize/js/materialize.min.js"></script>
        
    </head>
    <body>
        <div class="container" id="card_scon">
        <div class="row">
            <div class="col s12 m6" style="margin-top : 20%">
                <div class="card center">
                    <div class="card-content black-text">
                        <span class="card-title">
                            <h4>
                                <strong>
                                    Authentification
                                </strong>
                            </h4>
                            
                        </span>
                        <br><br>
                        
                        <form action="../security/connexion.php"  method="POST" class="row">
                            <div class="row">
                                <div class="input-field col s12 m6 ">
                                    <input id="pseudo" type="text" class="validate" name="pseudo">
                                    <label class="active" for="pseudo">Pseudo</label>
                                </div>
                                <div class="input-field col s12 m6 ">
                                    <input id="motdepasse" type="password" class="validate" name="motdepasse">
                                    <label class="active" for="motdepasse">Mot de passe</label>
                                </div>
                            </div>
                            <div class="row">
                                <button class="btn btn-large green" type="submit" name="send_scon">
                                    <span style="font-size: 30px">OK</span>
                                    <i class="material-icons">send</i>
                                </button>
                                <button class="btn btn-large red" type="reset">
                                    <span style="font-size: 30px">NOK</span>
                                    <i class="material-icons">delete</i>
                                </button>
                            </div>
                            <div class="row">
                                <p class="">
                                    Pas encore inscrit ???,
                                    <span>
                                        <a href="../sinc">
                                            Inscrivez-vous
                                        </a>
                                    </span>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col m6" style=""></div>
        </div>
        </div>


        
    </body>
    <script src="../assets/js/jquery.min.js"></script>
</html>