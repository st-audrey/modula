
<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="utf-8" />
    <!--CSS PERSO-->
    <link rel="stylesheet" href="css/style.css" />
    <!--CSS BOOTSTRAP-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <title>Contact</title>
    <!--GOOGLE FONT-->
    <link href="https://fonts.googleapis.com/css?family=Chathura|Libre+Barcode+39+Text|Megrim&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container-fluid main-bg">
        <div class="row">
            <form method="post" action="" id="contact-form">
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" id="" aria-describedby="" placeholder="Votre nom">
                    <small id="nameHelp" class="form-text text-muted">Veuillez n'utiliser que des lettres majuscules.</small>
                </div>
                <div class="form-group">
                    <label for="firstname">Prénom</label>
                    <input type="text" class="form-control" id="" aria-describedby="" placeholder="Votre prénom">
                    <small id="firstnameHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Adresse email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Votre email">
                    <small id="emailHelp" class="form-text text-muted">Nous ne partageons pas vos données.</small>
                </div>
                <div class="form-group">
                    <label for="textarea">Message</label><br />
                    <textarea class="form-control" id="text-zone" placeholder="Votre message"></textarea>
                </div>
                <!--TODO: re-Captcha google -->
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">En soumettant ce formulaire, j'accepte que mes informations ne soient utilisées qu'exclusivement dans le cadre de ma demande. Mes données ne seront ni revendues, ni utilisées à des fins commerciales.</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
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