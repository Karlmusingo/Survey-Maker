

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="home.php" style="font-size: 30px">Survey Maker</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right hidden-xs">
        <a style=" margin-top: 8px; margin-right: 10px; " class="btn btn-success" href="sondage.php">Créer un questionnaire</a>
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation" style="">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">

                <li>
                    <a href="home.php"><i class="fa fa-home fa-fw"></i> Home</a>
                </li>
                <li class="active treeview menu-open">
                    <a href="#"><i class="fa fa-tasks fa-fw"></i> Sondages <span class="pull-right fa fa-chevron-circle-down "></span></a>
                    <ul class="nav nav-second-level">
                        
                        <?php foreach ($sondages as $sondage) { ?>
                            <li>
                                <a href="question?id_sondage=<?php echo $sondage->id_sondage; ?>"><?php echo $sondage->nom; ?>
                                    <span class="pull-right-container">
                                        <small class="label label-primary pull-right"><?php echo $sondage->statut; ?></small>
                                    </span>
                                </a>
                            </li>
                        <?php } ?>
                        
                        <li>
                            <a href="sondage">Nouveau Sondage
                                <span class="pull-right-container">
                                    <small class="label label-success pull-right">new</small>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>

            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>