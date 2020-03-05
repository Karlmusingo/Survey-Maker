<?php
session_start();

include 'models/User.php';
if (isset($_POST['login'])) {
    if (isset($_POST['nom']) AND isset($_POST['password']) AND ! empty($_POST['nom']) AND ! empty($_POST['password'])) {
        
        extract($_POST);
        $idUser = User::select($nom, md5($password));
        
        if ($idUser == FALSE) {
            echo 'password ou nom incorrect';
        } else {
            $_SESSION['nom'] = $nom;
            $_SESSION['id_user'] = $idUser;
            header("location:home?message=1");
        }
    } else {
        echo 'veillez entrer tous les champs!';
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/jquery-1.11.3.min.js" type="text/javascript"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <title>Concevoir le questionnaire</title>
    </head>
    <body style="font-family: cursive">
        <?php
        require 'include/menu.php';
        ?>
        <div id="banner" class="banner">
            <div class="banner-image">
                <img class="img-responsive img" src="img/photo1.png" alt=""/>
            </div>
            <div class="banner-caption">
                <div class="container" style="margin-top: -50px">
                    <div class="row">
            
                        <div class="container">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lg-push-4 col-md-push-4 col-sm-push-3">

                                <form method="POST">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h5 class="panel-title">Login</h5>
                                        </div>
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label style="color: black"> Nom:</label>
                                                <input type="text" class="form-control" name='nom' placeholder="Enter the nom" /> <i class="fa fa-user"></i>
                                            </div>

                                            <div class="form-group">
                                                <label style="color: black"> Password:</label>
                                                <input type="password" class="form-control" name='password' placeholder="Enter the password" /> <i class="fa fa-user"></i>
                                            </div>

                                            <div class="text-right" >
                                                Pas encore inscrit<a href="user"><i>Inscrivez-vous ici</i></a>
                                            </div>

                                        </div>
                                        <div class="panel-footer">
                                            <div class="row">
                                                <input type="reset" value="effacer" class="btn btn-danger col-md-offset-1 col-md-4" />
                                                <input type="submit" name='login' value="Login" class="btn btn-primary col-md-offset-2 col-md-4" />
                                            </div>
                                        </div>

                                    </div>
                                </form>

                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>      
    </body>
</html>