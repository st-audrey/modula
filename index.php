
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
    <?php include 'header.php' ?>
	</header>

	<section>
		<div class="container-fluid main-bg">
		    <div class="row">
				<div class="col-md-7">
					<h1 id="main-title">CARPENTER<br /><strong>BRUT</strong></h1>
				</div>
				<div class="col-md-5">
					<a id="menu-link-contact" class="menu-link" href="#">CONTACT_____//</a><br />
					<a id="menu-link-admin" class="menu-link" href="#">ADMIN______//</a>
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
	</section>   

    <section>
        <div class="container-fluid main-bg">
            <div class="row">
                <div class="col-md-1 offset-1 mt-5">
                    <p class="typo02">Franck Hueso, better known by his stage name <strong>Carpenter Brut</strong><br /> is a French synthwave artist from Poitiers.</p>
                </div>
                <div class="col-md-8 offset-2 mt-2">
                    <img id="bio-img" class="w-100 bio-img" src="img/bio-neg.jpg" />
                </div>
            </div>
        </div>
    </section>


    <!--CAROUSEL-->
    <section>
        <div class="container-fluid main-bg">
            <div class="row mt-2">
                <div class="col-md-8 text-center">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/slider01.jpg" class="d-block w-100 slide" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/slider02.jpg" class="d-block w-100 slide" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/slider03.jpg" class="d-block w-100 slide" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
  

    <footer>
    <?php include 'footer.php' ?>
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