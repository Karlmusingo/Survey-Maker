<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo "repondez au " . $sondage->nom; ?></title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/jquery-1.11.3.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/functions.js" type="text/javascript"></script>

    </head>
    <body class="container">
        <h1 class="text-center title"><strong> Data Fishing </strong> <br> <small class="hidden-xs" >Conceive your Questionnaire</small> </h1 >

        <div class="col-lg-8 col-lg-offset-2" style="margin-top: 5px">
            <h2 class="text-center"> Repondez au questionnaire </h2> 
        </div>

        <div class="col-lg-8 col-lg-offset-2" style="margin-top: 20px">
            <h2 class="text-center"> <?php echo $sondage->nom; ?> <br/>
                <small> <?php echo $sondage->description; ?> </small>
            </h2> 
        </div>
        <div class="col-lg-2"></div>
        <form method="post">
            <?php foreach ($sections as $section) { ?>
                <fieldset class="col-lg-8 col-lg-offset-2">
                    <legend class="text-uppercase"> <?php echo $section->section; ?> </legend>
                    <?php foreach ($section->questions as $question) { ?>                    
                        <?php foreach ($question as $question_reponse) { ?>
                            <?php if ($question_reponse->question_id_param == NULL) { ?>
                                <div id="<?php echo $question_reponse->id_question; ?>">
                                    <div class="text-nowrap question">
                                        <?php echo $question_reponse->question . ' ?'; ?>
                                    </div>
                                    <?php foreach ($question_reponse->reponses as $reponse) { ?>
                                        <div class="form-inline reponse">
                                            <?php if ($reponse->type === "radio"){ ?>
                                                <input class="form-control" id="<?php echo $reponse->id_reponse_proposee; ?>" required placeholder="entrer votre reponse ici" type="<?php echo $reponse->type; ?>" name="<?php echo $reponse->cle; ?>" value="<?php echo $reponse->valeur; ?>"/>
                                            <?php } else { ?>
                                                <input class="form-control" id="<?php echo $reponse->id_reponse_proposee; ?>" required placeholder="entrer votre reponse ici" type="<?php echo $reponse->type; ?>" name="<?php echo $reponse->cle; ?>[]" value="<?php echo $reponse->valeur; ?>"/>
                                            <?php } ?> 
                                            <label><?php echo $reponse->valeur; ?></label>
                                        </div>
                                    <?php } ?>
                                </div>
                                <hr>
                            <?php } else { ?>
                                <div class="hidden <?php echo $question_reponse->question_id_param,$question_reponse->reponse_id_param;?>" id="<?php echo $question_reponse->id_question; ?>">
                                    <div class="text-nowrap question">
                                        <?php echo $question_reponse->question . ' ?'; ?>
                                    </div>
                                    <?php foreach ($question_reponse->reponses as $reponse) { ?>
                                        <div class="form-inline reponse">
                                            <?php if ($reponse->type === "radio"){ ?>
                                                <input 
                                                    class="form-control"
                                                    id="<?php echo $reponse->id_reponse_proposee; ?>" 
                                                    required 
                                                    placeholder="entrer votre reponse ici" 
                                                    type="<?php echo $reponse->type; ?>" 
                                                    name="<?php echo $reponse->cle; ?>" 
                                                    value="<?php echo $reponse->valeur; ?>"
                                                />
                                            <?php } else { ?>
                                                <input 
                                                    class="form-control" 
                                                    id="<?php echo $reponse->id_reponse_proposee; ?>" 
                                                    required
                                                    placeholder="entrer votre reponse ici" 
                                                    type="<?php echo $reponse->type; ?>" 
                                                    name="<?php echo $reponse->cle; ?>[]" 
                                                    value="<?php echo $reponse->valeur; ?>"/
                                                >
                                            <?php } ?>    
                                            <label><?php echo $reponse->valeur; ?></label>
                                        </div>
                                    <?php } ?>
                                </div>
                                <hr>
                            <?php } ?>
                        <?php } ?>

                    <?php } ?>
                </fieldset>
            <?php } ?>
            <div class="col-lg-2 col-lg-offset-8">
                <button type="submit" class="btn btn-success" name="deploy" value="Collecte en cours ...">Déployer Votre Questionnaire</button>
            </div>
        </form>
    </body>
</html>
