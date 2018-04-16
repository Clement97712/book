<?php
session_start();
session_destroy();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Deconnexion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/styletraitement.css" />
    <link href="https://fonts.googleapis.com/css?family=Armata" rel="stylesheet">
    <link rel="icon" type="image/ico" href="../images/fav.ico" />
</head>
<body>
    <div class="fond4">
        <div class="phrase">


<?php
    header('refresh:6;url=../index.php');
    print("<h1>Deconnexion en cours</h1><p class='saving'>Veuillez patientez<span>.</span><span>.</span><span>.</span></p>");
?>
        </div>
    </div>
</body>
</html>
