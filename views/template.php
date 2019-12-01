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
    <link href="https://fonts.googleapis.com/css?family=Chathura|Libre+Barcode+39+Text|Megrim|Kelly+Slab&display=swap" rel="stylesheet">
	<!--Google Captcha-->
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body>
	<header>

<nav class="navbar navbar-expand-lg navbar-light main-bg typo02 borderbot">
	<a class="navbar-brand" href="index.php?id=1"><img id="logo" src="img/logo.png" /></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">			
			<li class="nav-item mr-5">
			<a class="nav-link mr-5" href="index.php?type=contact">Contact</a>
			</li>
			<li class="nav-item mr-5">
			<a class="nav-link mr-5" href="index.php?type=login">Admin</a>
			</li>
		</ul>	
	</div>
</nav>
</header>
<div id="global">
    <div id="contenu">
        <?= $contenu ?>
    </div>
</div> 
<footer>
<div class="container-fluid main-bg bordertop">
	<div class="row pt-5">
		<div class="col-md-3 text-center">
            <a target="_blank" href="https://www.facebook.com/carpenter.brut/"><img class="social" src="img/facebook.png" /></a>
			<a target="_blank" href="https://www.instagram.com/carpenterbrut/"><img class="social" src="img/insta.png" /></a>
			<a target="_blank" href="https://www.youtube.com/channel/UCPVnLrkvF3M_H1NTOsMvgrA"><img class="social" src="img/youtube.png" /></a>
			<a target="_blank" href="https://twitter.com/carpenter_brut"><img class="social" src="img/twitter.png" /></a>
		</div>
	</div>
</div>
</footer>

	
	<!--Jquery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--JS PERSO-->
    <script src="js/main.js"></script>
    <!--JS BOOTSTRAP-->   
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
</body>
    
</html>