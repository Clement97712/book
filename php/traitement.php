<html>
    <head>
      <title>traitement</title>
      <link rel="icon" type="image/ico" href="../images/fav.ico" />
      <link href="https://fonts.googleapis.com/css?family=Armata" rel="stylesheet">
      <link rel="stylesheet" href="../css/styletraitement.css" type="text/css"/>
  </head>
  <body>
    <div class="fond2">
      <div class="phrase">

<?php
    include "PDO.php";

    $nom=trim($_POST['nom'],'');
    $prenom=trim($_POST['prenom'],'');
    $email=trim($_POST['email'],'');
    $login=trim($_POST['login'],'');
    $pwd=trim($_POST['pwd'],'');
    $pwdhash=crypt(md5($pwd));

   // print($nom." ".$prenom." ".$login."".$email."".$pwd."</br>".$pwdhash);

    $connection = new Connect();
    $sql="SELECT * FROM user Where login='$login' OR passwordhash='$pwdhash' OR email='$email'";
    $sql2="INSERT INTO user (nom,prenom,login,email,password,passwordhash) VALUES ('$nom','$prenom','$login','$email','$pwd','$pwdhash');";

   // print ("</br>".$sql);
    $connection->getVerification($sql,$sql2);

  ?>

      </div>
    </div>

  </body>
</html>
