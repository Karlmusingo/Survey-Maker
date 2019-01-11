<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inscription</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/jquery-1.11.3.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    </head>
    <body>

<?php
require 'include/menu.php';
?>

        <div class="container">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lg-push-4 col-md-push-4 col-sm-push-3">
                <br><br><br>
                <form method="POST">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h5 class="panel-title">Inscription</h5>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label > Nom:</label>
                                <input type="text" required class="form-control" name='nom' placeholder="Enter the nom" /> <i class="fa fa-user"></i>
                            </div>
                            <div class="form-group">
                                <label > email:</label>
                                <input type="email" required class="form-control" name='email' placeholder="Enter the email" /> <i class="fa fa-user"></i>
                            </div>
                            <div class="form-group">
                                <label > telephone:</label>
                                <input type="text" required class="form-control" name='telephone' placeholder="Enter the telephone" /> <i class="fa fa-user"></i>
                            </div>
                            <div class="form-group hidden">
                                <label > Type:</label>
                                <select name="type" required class="form-control">
                                    <option value="enqueteur">enqueteur</option>
                                    <option value="global">global</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label > Password:</label>
                                    <input type="password" required class="form-control" name='password' placeholder="Enter the password" /> <i class="fa fa-user"></i>
                                </div>
                                <div class="form-group col-md-6">
                                    <label > Confirmer:</label>
                                    <input type="password" required class="form-control" name='confirm' placeholder="confirmer votre password" /> <i class="fa fa-user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="text-danger container">
                            <?php if(isset($error)){ echo $error; } ?>
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="reset" class=" btn btn-danger form-control" value="effacer">
                                </div>
                                <div class="col-md-6">
                                    <input type="submit" name='inscrire' value="Inscrire" class="btn btn-primary form-control"/>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>

            </div>

        </div>

    </body>
</html>
