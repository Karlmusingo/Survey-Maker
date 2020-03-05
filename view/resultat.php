<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Resultat</title>
	<link href="css/style.css" rel="stylesheet" type="text/css"/>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

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

	<script src="bootstrap/js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
	<style type="text/css">
	h1 {
		margin-top: 100px;
		margin-bottom: 25px;
	}

	ul .active {
		border-top: 3px solid green;
	}

</style>
</head>
<body class="container" style="font-family: cursive;">

	<?php require_once 'include/menu.php'; ?>

	<h1 style="" class="text-uppercase text-center"><b>RESULTAT DE <?php echo $_SESSION['nom_sondage']; ?></b></h1>

	<p class="huge">Nombre des reponses : <?php echo $nombre->nombre; ?> </p>

	<div class="nav-tabs-custom">
		<ul class="nav nav-tabs">
			
				<li class="active col-lg-offset-4"><a href="#simple" data-toggle="tab"><h4>Tableaux Simples</h4></a></li>
				<li class=""><a href="#croise" data-toggle="tab"><h4>Tableaux Croisés</h4></a></li>
			
		</ul>
		<div class="tab-content">
			<div class="active tab-pane" id="simple">
				
				<?php foreach ($sections as $section) { ?>
					<h3 class=""><?php echo $section->section; ?> </h3>
					<hr style="border: 1px solid green; "> 
					<div class="row">
						<?php foreach ($section->questions as $question) { ?>
							<?php foreach ($question as $question_reponse_nombre) { ?>
								<div class="col-lg-6">
									<div class="panel panel-primary">
										<div class="panel-heading">
											<?php echo $question_reponse_nombre->question . ' ? '; ?>
											<span class="fa fa-download pull-right"></span>
										</div>
										<!-- /.panel-heading -->
										<div class="panel-body">
											<div class="table-responsive">
												<table class="table table-striped table-bordered table-hover">
													<thead>
														<tr>
															<th>#</th>
															<th>Reponse</th>
															<th>Effectif</th>
															<th>Pourcentage</th>
														</tr>
													</thead>
													<tbody>
														<?php 
														$i = 1;
														$total = 0;
														$pourc = 0
														?>
														<?php foreach ($question_reponse_nombre->reponses as $reponse) { ?>
															<tr>
																<td><?php echo $i; ?></td>
																<td><?php echo $reponse->reponse; ?></td>
																<td><?php echo $reponse->nombre; ?></td>
																<td><?php echo round(($reponse->nombre / $nombre->nombre) * 100, 2); ?></td>
															</tr>
															<?php 
															$i++;
															$total += $reponse->nombre; 
															$pourc += round(($reponse->nombre / $nombre->nombre) * 100, 2);
															?>
														<?php } ?>
														<tr style="background: green; color: white;">
															<td><?php echo ''; ?></td>
															<td><?php echo 'Total'; ?></td>
															<td><?php echo $total; ?></td>
															<td><?php echo round($pourc); ?></td>
														</tr>

													</tbody>
												</table>
											</div>
											<!-- /.table-responsive -->
										</div>
										<!-- /.panel-body -->
									</div>
									<!-- /.panel -->
								</div>
							<?php } ?>
						<?php } ?>
					</div>
				<?php } ?>

			</div>

			<div class="tab-pane" id="croise">
				
				<?php foreach ($sections as $section) { ?>
					<h3 class=""><?php echo $section->section; ?> </h3>
					<hr style="border: 1px solid green; "> 
					<div class="row">
						
					</div>
				<?php } ?>

			</div>
			<!-- /.tab-pane -->
			
		</div>
		<!-- /.tab-content -->
	</div>

	

</body>
</html>