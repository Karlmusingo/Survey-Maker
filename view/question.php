<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>concevoir questionnaire</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap/js/jquery-1.11.3.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/functions.js" type="text/javascript"></script>

    </head>
    <body class="container-fluid" id="<?php echo $_SESSION['id_sondage'] ?>">
        <p id="demo"></p>

        <h1 class="text-center title"><strong> Data Fishing </strong> <br> <small class="hidden-xs" >Conceive your Questionnaire</small> </h1 >

        <div class="col-lg-8 col-lg-offset-2" style="margin-top: 10px">
            <h2 class="text-center"> Questions for the Questionnaire </h2> 
        </div>
        <?php foreach ($sections as $section) { ?>

            <div id="section1" class="col-lg-8 col-lg-offset-2 section1">
                <fieldset  style="margin-top: 0px" class="fieldset">
                    <legend class="legend">
                        <div class="text-uppercase">
                            <?php echo $section->section; ?>
                        </div>
                    </legend>
                    <div class="jumbotron" id="section<?php echo $section->id_section; ?>" style="margin-top: 0px">

                    </div>

                    <div class="col-lg-2 col-lg-offset-9" >

                        <button type="button" class="btn btn-lg  btn-success gliphicon glyphicon-plus " 
                                data-backdrop="static" data-toggle="modal" data-target="#question" id="<?php echo $section->id_section; ?>"> Add Question</button>
                    </div>
                </fieldset>
            </div>
        <?php } ?>

        <div class="row">

            <div class="col-lg-2 col-lg-offset-8" style="margin-top: 20px;">
                <a href="deploy?id_sondage=<?php echo $_SESSION['id_sondage']; ?>" class="btn btn-primary btn-lg form-control" id="next"> Next </a>
            </div>
        </div>

        <div id="question" class="modal" role="dialog" style="margin-top: 50px; font-family: cursive; font-size: 15px;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Question</h4>
                    </div>
                    <div class="modal-body " style="">
                        <form role="form" id="form">

                            <label>Question</label>
                            <div class="input-group">
                                <input type="text" name="question" class="form-control" placeholder="Enter the question here" required>
                                <span class="input-group-addon">?</span>
                            </div>
                            <div class="sr-only" id="sr-only"></div>
                            <div class="<!--col-lg-offset-1-->" style="margin-top: 10px">
                                <label>Type de reponses:</label><br/>
                                <!-- <div class="row btn-group radio-button " data-toggle="buttons" role="group">
                                     <label class="btn btn-default "> 
                                         <input type="radio" id="unique" name="type_answer" value="unique">
                                         <i class="fa-check-square-o "></i> Selection unique </label> 
                                     <label class="btn btn-default"> 
                                         <input type="radio" id="multiple" name="type_answer" value="multiple">
                                         <span class="glyphicon glyphicon-list "> </span> Selection multiple </label> 
                                     <label class="btn btn-default"> 
                                         <input type="radio" id="text" name="type_answer" value="text">
                                         <span class="glyphicon glyphicon-text-background"> </span> Text </label> 
 
                                 </div>-->
                                <select name="type_answer" class="form-control" id="select" >
                                    <option value="radio">Selection unique</option>
                                    <option value="checkbox">Selection multiple</option>
                                    <option value="text">Texte</option>
                                    <option value="number">Nombre</option>
                                </select>
                            </div>
                            <div id="remove" class="form-group has-feedback">
                                <fieldset id="fieldset" style="margin-top: 10px">
                                    <legend>Les reponses proposées</legend>
                                    <div class="input-group" >
                                        <label class="sr-only" for="Answer1">Answer1</label>
                                        <input type="text" class="form-control" name="answer[]" onclick="type()" placeholder="Enter answer">
                                        <span class="input-group-addon btn btn-default" id="add" style="font-size: 20px">&plus;</span>
                                    </div> 
                                    <div id="addA"></div>
                                    <!--                                    <div class="row col-lg-12">
                                                                            <div class="col-lg-offset-1 input-group" style="margin-top: 10px">
                                                                                <label>Ajouter l'assertion "Autres à préciser" : </label>
                                                                                <input type="checkbox" class="" name="other">
                                                                            </div>
                                                                        </div>-->

                                </fieldset>
                            </div>
                            <hr style="margin-top: 10px; margin-bottom: 10px;">
                            <div class="col-lg-7 col-lg-offset-0 input-group" style="">
                                <label> Parametrer la question: </label>
                                <input type="checkbox" id="parametre" class="" name="parametre">
                            </div>
                                
                            </div>
                            <div id="select_parametre" class="col-lg-12 row hidden" style="margin-bottom: 10px;">
                                <div>Afficher cette question seulement lorsque:</div>
                                <div class="col-lg-6">
                                    <select class="form-control" name="param_question">
                                        <option selected >Selectionnez une question</option>
                                        <?php foreach ($allQuestions as $allQuestion) { ?>
                                            <option value="<?php echo $allQuestion->id_question; ?>" ><?php echo $allQuestion->question; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="text col-lg-1" style="font-size: 20px;">=</div>
                                <div class="col-lg-5">
                                    <select class="form-control" name="param_reponse">
                                        <option selected >Selectionnez une réponse</option>
                                        <?php foreach ($selectReponses as $selectReponse) { ?>
                                            <option value="<?php echo $selectReponse->id_reponse_proposee; ?>" ><?php echo $selectReponse->valeur; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <hr style="margin-top: 10px; margin-bottom: 10px;">
                            <div class="row" style="margin-bottom: 10px">
                                <div class="col-md-4 col-md-offset-1">
                                    <input type="reset" class="btn btn-danger form-control" value="Reset">
                                </div>
                                <div class="col-md-4 col-md-offset-2">
                                    <input type="submit" id="submit" name="submit" class="btn btn-outline btn-primary form-control receiver" value="submit">
                                </div>
                            </div>

                        </form>

                   
                    <div class="modal-footer" style="" >
                        <button class="btn btn-default form-control receiver" id="dismiss" data-dismiss="modal" style="margin-right: 50px;">Close</button>
                    </div>
                </div>
            </div>
        </div>

<!--    <script type="text/javascript">

            var i = 1;
                    function addAnswer() {

                        console.log(i);
                        if (true) {
                            var divTag = document.createElement("div");
                            divTag.setAttribute("class", "input-group")

                            var para = document.createElement("input");
                            para.setAttribute("type", "text");
                            para.setAttribute("ng-model", 'enteredAnswer' + (i + 1));
                            para.setAttribute("placeholder", "enter the answer here");
                            para.setAttribute("class", "form-control ng-valid ng-touched ng-dirty");
                            //para.setAttribute("onclick", "myfunction()");
                            para.setAttribute("id", i);

                            var para1 = document.createElement("span");
                            para1.setAttribute("class", "input-group-addon btn btn-danger");
                            para1.setAttribute("style", "font-size:20px");
                            para1.setAttribute("onclick", "deleteElement()");

                            var node = document.createTextNode("x");
                            para1.appendChild(node);

                            divTag.appendChild(para);
                            divTag.appendChild(para1);


                            var element = document.getElementById("addA");
                            //element.appendChild(para);
                            element.appendChild(divTag);

                            i++;
                            console.log(i);
                        }
                    }

            var i = 1;
                    function deleteElement() {


                        if (true) {
                            //var para = document.createElement("button");
                            //var node = document.createTextNode("button deleted");
                            //para.appendChild(node);


                            var element = document.getElementById("addA");
                            var elements = element.getElementsByTagName("input");
                            //element.appendChild(para);
                            var i = elements.length;
                            var chil = element.childNodes[i - 1];
                            element.removeChild(element.childNodes[i - 1]);
                            console.log(chil);
                            console.log(i);
                        }
                    }

            function addSection() {
                if (true) {
                    var fieldset = document.createElement("fieldset");
                    var legend = document.createElement("legend");
                    var input = document.createElement("input");
                    input.setAttribute("class", "form-control");
                    input.setAttribute("placeholder", "Entrer le nom de la section");
                    var divTag = document.createElement("div");
                    divTag.setAttribute("class", "jumbotron");

                    legend.appendChild(input);
                    fieldset.appendChild(legend);
                    fieldset.appendChild(divTag);


                    var element = document.getElementById("addS");
                    element.appendChild(fieldset);


                }
            }


</script>
        -->

    </body>
</html>
