<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="500"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link href="https://fonts.googleapis.com/css?family=Armata" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="css/connexion.css" type="text/css"/>
    <link rel="icon" type="image/ico" href="images/fav.ico" />
    <title>Connexion</title>
</head>
<body>
<div class="formulaire">
        <fieldset>
            <legend>Connexion</legend>
            <form method="POST" action="php/traitements.php">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Login" name="log" />
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="pwd" />
                </div>
                <div class="form-group action">
                    <input class="btn btn-default" type="submit" value="Send" />
                    <input class="btn btn-default" type="reset" value="Reset" />
                </div>
                <div class="form-group">
                    <p class="sentence">Vous n'etes pas inscrit ?
                        <a href="inscription.php" class="sentence">Inscription</a>
                    </p>
                </div>
            </form>
        </fieldset>
    </div>

</body>
</html>
