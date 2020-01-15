<?php include ('config.php') ?>
<?php 

session_start ();
if (isset ($_SESSION['login'])) 
	{
		
	}else {
		header ('Location:admin_connect.php');
	}

?>

  <!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Car Express|Connexion</title>

	<link rel="shortcut icon" href="assets/images/logg.jpg">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">             

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
 </head>

<body>            
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">       
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a style="margin-left:25%; width:100%" class="navbar-brand" href="index.php">Car Express</a> <img style="margin-top:-15%" src="assets/images/logg.jpg" alt="" width="40" height="40">
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">

					<li class="active"><a href="back_office.php"> Gestion des voitures </a></li>
					<li><a href="modele.php">Modeles de Voitures</a></li>
					<li><a href="#">Gestion Location</a></li>
                    <li><a href="insert_admin.php">inscription admin</a></li>
                    <li ><a class="btn" name="dec" href="admin_deconnect.php">Deconnexion </a></li>

					</ul> 
		</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->
<br/><br/><br/><br/><br/><br/> 

	<!-- container -->
	<div class="container">

		<div class="row">            
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<br/>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Modification Informations Voiture</h3>
							
							<hr>

							
							
							<form method="post" action="affich.php" name="affich.php">

						<div class="top-margin">
									<label style="margin-top:1.5%	">Immatriculation : <span class="text-danger">*</span></label>

							<?php

							$id= $_POST['identifiant'];
							$id = 'immatriculation'.$id;
							$identifiant = $_POST[$id];
						
						    echo '<input type="text" name="immat" value="'.$identifiant.'" class="form-control">';?>
						</div>
			
						<div class="top-margin">
									<label style="margin-top:1.5%	">Couleur : <span class="text-danger">*</span></label>
								<?php echo '<input type="text" name="couleur" class="form-control">';?>	
						</div>

						<!--    <div class="top-margin">
								<label style="margin-top:1.5%	">Prix Journalier : <span class="text-danger">*</span></label>
								<?php echo '<input type="number" name="prixJournalier" min="0" max="9999" class="form-control">';?>
								</div>     -->     

								<hr>

								<div class="row">
									<div class="col-lg-8">
										
									</div>        

									<div class="col-lg-4 text-right">
										<button class="btn btn-info" name="submit" type="submit">Enregistrer</button>
									</div>
								</div>
							</form>   
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container  -->    
	

	<footer id="footer" class="top-space">

		<br/><br/><br/><br/>
		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
                           Tel : (+33) 07-68-19-71-25 | E-mail : locationvoiture@gmail.com
								<p>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; Dec 2019, Koudous IBOURAIMA & Lassana MAKADJI 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>
	</footer>	 
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>    

