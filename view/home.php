
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="refresh" content="url=home.php">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Home</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
        <link href="dist/css/timeline.css" rel="stylesheet">
        <link href="dist/css/sb-admin-2.css" rel="stylesheet">
        <link href="bower_components/morrisjs/morris.css" rel="stylesheet">
        <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
        <link href="dist/css/timeline.css" rel="stylesheet">
        <link href="dist/css/sb-admin-2.css" rel="stylesheet">
        <link href="bower_components/morrisjs/morris.css" rel="stylesheet">
        <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    </head>

    <body style="font-family: cursive;">

        <div id="wrapper">
            <?php // require_once 'include/menu.php'; ?>
            <?php require_once 'include/navig.php'; ?>

            <div id="page-wrapper" style="margin-top: 50px">
                <div class="row container-fluid">
                    <div class="col-lg-9">
                        <h1 class="page-header"><?php echo $_SESSION['nom_sondage']; ?></h1>
                    </div>
                    <div class="col-lg-2 btn-group">
                        <h1 class="page-header">
                            <a href="#">
                                <button class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Modifier le questionnaire</button>
                            </a>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xs-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge" style=""><?php echo $_SESSION['statut']; ?></div>
                                        <div>Statut</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-check-square fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $nombre->nombre; ?></div>
                                        <div>Reponses</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-clock-o fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><span class="small" style="font-size: 20px">Il y a</span> 12 <span class="small" style="font-size: 20px">minutes</span></div>
                                        <div>Dernière Reponse</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-7">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-bar-chart-o fa-fw"></i> Area Chart Example

                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div id="morris-area-chart"></div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart Example

                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div id="morris-bar-chart"></div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->

                        <!-- /.panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-bar-chart-o fa-fw"></i> Donut Chart Example
                            </div>
                            <div class="panel-body">

                                <div class="row">
                                    <!-- /.col-lg-4 (nested) -->
                                    <div class="col-lg-8">
                                        <div id="morris-donut-chart"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- /.panel-body -->
                        </div>

                    </div>
                    <!-- /.col-lg-8 -->
                    <div class="col-lg-5 hidden-xs">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <i class="fa fa-question-circle fa-fw"></i> Questionnaire
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">

                               <div id="accordion">
  <?php $i = 1; ?>
  <?php foreach ($sections as $section) {?>
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapseOne">
          <?php echo $section->section; ?>
        </button>
      </h5>
    </div>

      <div id="collapse<?php echo $i; ?>" class="collapse <?php if ($i == 1) echo 'show'; ?>" aria-labelledby="heading<?php echo $i; ?>" data-parent="#accordion">
      <div class="card-body">
        <ol>
            <?php foreach ($section->questions as $question) { ?>
            <?php foreach ($question as $question_reponse_nombre) { ?>
            <li><?php echo $question_reponse_nombre->question; ?>
                <ul> <?php //print_r($question_reponse_nombre->reponses) ?>
                      <?php foreach ($question_reponse_nombre->reponses as $reponse) { ?>
                        
                        <li><?php echo $reponse->reponse; ?> <span class="label label-success pull-right right"><?php echo $reponse->nombre; ?> </span> </li>
                      
                      <?php } ?>

                  </ul>

              </li>
            <?php } ?>
            <?php } ?>
          </ol>
      </div>
    </div>
  </div>
  <?php $i++; ?>
  <?php } ?><!--
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Section 2
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
          <ul>
              <li>question 1
                  <ul>
                      <li>reponse 1</li>
                      
                  </ul>

              </li>
              
          </ul>

      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Section 3
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        <ul>
              <li>question 1
                  <ul>
                      <li>reponse 1</li>

                  </ul>

              </li>
              
          </ul>
      </div>
    </div>
  </div> -->
</div>
                                <!--                                <p id="accordion">
                                                                    <a class="list-group-item" data-parent="#accordion" data-toggle="collapse" href="#multiCollapseExample1" role="tn btn-primarybutton" aria-expanded="false" aria-controls="multiCollapseExample1">
                                                                        <i class="fa fa-envelope fa-fw"></i> Section 3
                                                                        <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                                                        </span>
                                                                    </a>
                                                                    <div class="col">
                                                                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                                                                            <ul>
                                                                                <li> question 1
                                                                                    <ul>
                                                                                        <li>Reponse 1<span class="pull-right">25</span></li>
                                                                                        <li>Reponse 2<span class="pull-right">38</span></li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li> question 2
                                                                                    <ul>
                                                                                        <li>Reponse 1<span class="pull-right">25</span></li>
                                                                                        <li>Reponse 2<span class="pull-right">38</span></li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <a class="list-group-item" data-parent="#accordion" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">
                                                                        <i class="fa fa-twitter fa-fw"></i> Section 2
                                                                        <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                                                        </span>
                                                                    </a>
                                                                    <div class="col">
                                                                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                                                                            <div class="card card-body">
                                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                
                                                                <button class="" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
                                                                </p>-->
                                <div class="row">


                                </div>

                                <div class="list-group">



                                    <!--                                <a href="#" class="list-group-item">
                                                                        <i class="fa fa-check-square fa-fw"></i> Section 1
                                                                        <span class="pull-right text-muted small"><em>26</em>
                                                                        </span>
                                                                    </a>
                                                                    <a href="#" class="list-group-item">
                                                                        <i class="fa fa-twitter fa-fw"></i> Section 2
                                                                        <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                                                        </span>
                                                                    </a>
                                                                    <a href="#" class="list-group-item">
                                                                        <i class="fa fa-envelope fa-fw"></i> Section 3
                                                                        <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                                                        </span>
                                                                    </a>
                                                                    <a href="#" class="list-group-item">
                                                                        <i class="fa fa-tasks fa-fw"></i> Section 4
                                                                        <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                                                        </span>
                                                                    </a>-->

                                </div>
                                <!-- /.list-group -->

                            </div>
                            <!-- /.panel-body -->
                        </div>

                    </div>
                    <!-- /.col-lg-4 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="bootstrap/js/jquery-1.11.3.min.js"></script>
        <script src="bootstrap/bootstrap-4.0.0/dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>
        <script src="bower_components/raphael/raphael-min.js"></script>
        <script src="bower_components/morrisjs/morris.min.js"></script>
        <script src="dist/js/sb-admin-2.js"></script>

    </body>

</html>
