<html>
<head>
  <title>Traitement de la demande</title>
  <link rel="icon" type="image/ico" href="../images/fav.ico" />
  <link href="https://fonts.googleapis.com/css?family=Armata" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/styletraitement.css"/>
</head>

<body>
<div class="fond2">
    <div class="phrase">
    <?php
  include "PDO.php";

    $login= trim($_POST['log']," ");
    $password= trim($_POST['pwd']," ");



if((!isset($login) || !isset($password)) && (empty($login) || empty($password))){
      print("<h1>Il nous manque des informations.</h1><p><Vous allez etre redirigé vers la page d'inscription</p>.<p class='saving'>Veuillez patientez<p><span>.</span><span>.</span><span>.</span>");
        header('refresh:2; url= ../index.php');
}
else{
    $test = new Connect();
    $sql="SELECT * from user Where login='".$login."' AND password='".$password."'";
   
    $test->getAction($sql);
  
}


?>



    </div>

</div>

</body>
</html>
