<?php
  session_start();
  if($_SESSION['nom']==""){
    header('Location:index.php');
}
  
?>

<html>
    <head>
        <title>Mise a jour livre</title>
        <link href="https://fonts.googleapis.com/css?family=Armata" rel="stylesheet">
        <link rel="icon" type="image/ico" href="images/fav.ico" />
        <link rel="stylesheet" href="css/templateupdate.css" type="text/css"/>
        <link rel="stylesheet" href="css/header.css" type="text/css"/>
        <link rel="stylesheet" href="css/connexion" type="text/css"/>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css"/>
    </head>
<body>
<?php
  include "html/header.html";
  
?>
  <div class='sentence'><p class='title'>Mise a jour Livre</p></div>

  <fielset>
    <legend>Create</legend>
    <form method="POST" action="php/traite.php">
  <div class="form-group">
    <label for="titre">Titre:
    <input type="text" class="form-control champ" required name="titre_create"/>
  </div>
  <div class="form-group">
    <label for="message">Description:
    <textarea type="text" class="form-control resize" cols="30" rows="8" required name="message_create"></textarea>
  </div>
  <div class="form-group">
    <input type="hidden" class="form-control champ"  value="<?php echo $_SESSION['id_user'];?>" required name="id_user_create"/>
  </div>
  <div class="form-group">
    <input type="submit" class="form-control champ" value="Send"/>
  </div>
</form>
</fieldset>
<?php
  include 'html/footer.html';
?>
</body>
</html>
