<?php 
session_start();
   if($_SESSION['nom']==""){
    header('Location:index.php');
}



if($_GET['id_book']!=""){
    include "php/PDO.php";
    $update = new Connect();
    $requete ="SELECT * FROM book WHERE id_book='".$_GET['id_book']."'";
    $table=$update->getAllElement($requete);
  }
else{
  header('Location:templatelist.php');
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
    <legend>Update</legend>
    <form method="POST" action="php/traite.php">
  <div class="form-group">
    <label for="titre">Titre:
    <input type="text" class="form-control champ" required value="<?php echo $table['title'];?>" name="titre_update"/>
  </div>
  <div class="form-group">
    <label for="message">Description:
    <textarea type="text" class="form-control resize" cols="45" rows="8" required name="message_update"><?php echo $table['description'];?></textarea>
  </div>
  <div class="form-group">
    <input  type="hidden" class="form-control champ" value="<?php echo $table['id_book'];?>" required name="id_book_update"/>
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
