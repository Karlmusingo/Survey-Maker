<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/jquery-1.11.3.min.js" type="text/javascript"></script>
        <title>Concevoir le questionnaire</title>
    </head>
    <body class="container">

        <div class="section"> 
            <div class="container">
                <h1 class="text-center title"><strong> Data Fishing </strong> <br> <small >Conceive your questionnaire</small> </h1>
                
                <div>
                    <h2 class="title">Vos sondages</h2>
                    <ul><?php foreach ($sondages as $sondage) { ?>
                            <li><a href="question?id_sondage=<?php echo $sondage->id_sondage;?>"><?php echo $sondage->nom; ?></a> </li>
                        <?php } ?>
                    </ul>                   
                    
                </div>
                
                <div class="col-lg-8 col-lg-offset-2" style="margin-top: 50px">
                    <form action="" method="POST" role="form">

                        <div class="form-group-lg">
                            <label>Title</label>
                            <input type="text" required class="form-control" required="required" name="nom" value="" 
                                   size="90" placeholder="Enter the title here"/>
                        </div>
                        <div class="form-group-lg" style="margin-top: 20px">
                            <label>Description of the survey</label>
                            <textarea class="form-control" required name="description"
                                      placeholder="Describe your survey to help responders"></textarea>

                        </div>
                        <div class="col-lg-2 col-lg-offset-10" style="margin-top: 20px">
                            <input type="submit" value="Next" name="next" class=" btn btn-primary btn-lg" >
                        </div>

                    </form>

                </div>

            </div>
        </div>

    </body>
</html>
