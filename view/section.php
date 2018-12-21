<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ajouter les sections</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/jquery-1.11.3.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/functions.js" type="text/javascript"></script>

    </head>
    <body class="container">

        <h1 class="text-center title"><strong> Data Fishing </strong> <br> <small class="hidden-xs" >Conceive your Questionnaire</small> </h1 >

        <div class="col-lg-8 col-lg-offset-2" style="margin-top: 20px">
            <h2 class="text-center"> Sections for the Questionnaire </h2> 
        </div>
        <div id="section1" class="col-lg-8 col-lg-offset-2 section1 sr-only">

            <div class="input-group" style="margin-top: 10px">
                <input class="form-control" name="section[]" id="section_title" type="text" placeholder="Entrer le nom de la section" />
                <span class="input-group-addon btn btn-danger btn_remove_section">&times;</span>
            </div>

        </div>
        <form role="form" method="POST">
            <div class="col-lg-8 col-lg-offset-2 section1">

                <div class="" style="margin-top: 10px">
                    <input class="form-control" name="section[]" id="section_title" type="text" placeholder="Entrer le nom de la section" />

                </div>

            </div>

            <div id="addS" class="col-lg-8 col-lg-offset-2" style="margin-bottom: 20px;"></div>
            <div class="text-danger col-lg-10 col-lg-offset-3">
                <?php if(isset($err)) { echo $err; } ?>
            </div>
            <div class="row col-lg-10 col-lg-offset-2" style="margin-top: 20px;" >
                <div class="col-lg-2 col-lg-offset-1" style="">
                    <button type="button" class="btn btn-primary form-control btn-lg gliphicon glyphicon-plus" id="section_btn"> Add </button>
                </div>
                <div class="col-lg-2 col-lg-offset-3" style="">
                    <button type="submit" class="btn btn-primary btn-lg form-control" name="next" value="next" id="next"> Next </button>
                </div>
            </div>
        </form>
    </body>
</html>
