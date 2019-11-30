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
</head>

<body>
	<header>
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
					<a id="menu-link-contact" class="menu-link" href="">CONTACT_____//</a><br />
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