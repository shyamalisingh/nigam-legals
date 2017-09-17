<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="generator"
		content="HTML Tidy for Linux/x86 (vers 25 March 2009), see www.w3.org">
		<meta http-equiv="Content-Type" content="text/html; charset=us-ascii">
		<meta name="author" content="Akhilesh Singh, www.luckyakhi.com">
		<link rel="shortcut icon" href="img/logo.ico" />
		<link rel="favicon" href="img/logo.ico" />
		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="css/business-casual.css" rel="stylesheet">

		<!-- Fonts -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<title>Nigam Legals & Associates</title>

		<link rel="shortcut icon" href="images/logo.ico"/>

	</head>

	<body>
		<?php $page = "home";
		if ($_GET && ($_GET["p"] == "home" || $_GET["p"] == "aboutUs" || $_GET["p"] == "query" || $_GET["p"] == "album" || $_GET["p"] == "gallery" || $_GET["p"] == "contact")) {
			$page = $_GET["p"];
			$pageUrl = $page . ".php";
		}
		$pageUrl = $page . ".php";
		?>

		<div class="brand">
			Nigam Legals & Associates
		</div>
		<div class="address-bar">
			50/12/4,F-2 | Sankat Mochan Apartment | Lohia Marg | Allahabad
		</div>

		<!-- Navigation -->
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
					<a class="navbar-brand" href="index.php?page=home">Nigam-Legals</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a href="index.php?p=home">Home</a>
						</li>
						<li>
							<a href="index.php?p=query">Ask</a>
						</li>
						<li>
							<a href="index.php?p=aboutUs">About</a>
						</li>
						<li>
							<a href="index.php?p=contact">Contact</a>
						</li>
						<li>
							<a href="whatsapp://send?text=Nigam & Associates Advocate high court!" data-action="share/whatsapp/share">
							<img src="img/whatsapp_ico.png"/></a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
		</nav>

		<div class="container">
			<?php
			include $pageUrl;
			?>

		</div>
		<!-- /.container -->

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<p>
							Copyright &copy; <a href="http://www.nigam-legals.com/" target="_blank">Anshul Nigam and Associates</a> 2014
						</p>
					</div>
				</div>
			</div>
		</footer>

		<!-- jQuery -->
		<script src="js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>

		<!-- Script to Activate the Carousel -->
		<script>
			$('.carousel').carousel({
				interval : 5000 //changes the speed
			})
		</script>

	</body>
</html>

