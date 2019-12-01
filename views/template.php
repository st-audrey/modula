<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="utf-8" />
    <!--CSS PERSO-->
    <link rel="stylesheet" href="css/style.css" />
    <!--CSS BOOTSTRAP-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <title>Page d'Accueil</title>
    <!--GOOGLE FONT-->
    <link href="https://fonts.googleapis.com/css?family=Chathura|Libre+Barcode+39+Text|Megrim&display=swap" rel="stylesheet">
	<!--Google Captcha-->
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body>
	<header>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="#">Navbar</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		<li class="nav-item active">
		<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="#">Link</a>
		</li>
		<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		Dropdown
		</a>
		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
		<a class="dropdown-item" href="#">Action</a>
		<a class="dropdown-item" href="#">Another action</a>
		<div class="dropdown-divider"></div>
		<a class="dropdown-item" href="#">Something else here</a>
	</div>
	</li>
	<li class="nav-item">
	<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
	</li>
	</ul>
	<form class="form-inline my-2 my-lg-0">
	<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	</form>
	</div>
</nav>




















		<div class="container-fluid main-bg">
			<div class="row">
				<div class="col-md-5 mt-2 ml-2">
					<a href="index.php?id=1"><img id="logo" src="img/logo.png" /></a>
				</div>
				<div class="col-md-6 text-right mr-2 mt-2">
					<button id="menu-btn"><img id="menu-img" src="img/menu01.png" /></button>
				</div>
			</div>
		</div> 
		
		<div class="container-fluid main-bg">
			<div class="row">
				<div class="col-md-7">
					<h1 id="main-title">CARPENTER<br /><strong>BRUT</strong></h1>
				</div>
				<div class="col-md-5">
					<a id="menu-link-contact" class="menu-link" href="index.php?type=contact">CONTACT_____//</a><br />
					<a id="menu-link-admin" class="menu-link" href="index.php?type=login">ADMIN______//</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-11 line">
			</div>
				<div class="col-md-1">
					<p class="upside-text">scroll</p>
				</div>
			</div>
		</div>
	</header>

        <div id="global">
            <div id="contenu">
                <?= $contenu ?>
            </div>
        </div> 

	
	<!--Jquery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--JS PERSO-->
    <script src="js/main.js"></script>
    <!--JS BOOTSTRAP-->   
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
</body>
    
</html>