<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/ico" href="images/fav.ico" />
    <link rel="stylesheet" href="css/inscription.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Armata" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css" />
    <title>Inscription</title>
</head>

<body>
    <div class="formulaire">
        <fieldset>
            <legend>Inscription</legend>
            <form method="POST" action="php/traitement.php">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nom" required name="nom" title ="Que des lettres. Ex: hernandez" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Prenom" required name="prenom"  title="Que des lettres et plus de 3 lettres. Ex:paul"/>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Ex: example@gmail.com" required name="email" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Login" required name="login"/>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Mot de passe" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]{2,})(?!.*\s).*$" minlength="5" maxlength="12" required name="pwd" title="Saisir au moins 2 lettres majuscules, au moins 1 lettre minuscule.Verifier la taille (entre 5 et 12)." />
                </div>

                <div class="form-group action">
                    <input class="btn btn-default" type="submit" value="Send" />
                    <input class="btn btn-default" type="reset" value="Reset" />
                </div>
                <div class="form-group">
                    <p class="sentence">Vous avez un compte ?
                        <a href="index.php" class="sentence">Connexion</a>
                    </p>
                </div>
            </form>
        </fieldset>
    </div>
</body>

</html>
