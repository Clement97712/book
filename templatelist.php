<?php
    session_start();
    if($_SESSION['nom']==""){
        header('Location:index.php');
    }
    include 'php/PDO.php';
    $list =new Connect();
    $sql ="SELECT title, description, id_book from book where id_user='".$_SESSION['id_user']."'";
?>


<html>
    <head>
        <title>Liste livre</title>
        <link href="https://fonts.googleapis.com/css?family=Armata" rel="stylesheet">
        <link rel="stylesheet" href="css/templatelist.css" type="text/css"/>
        <link rel="icon" type="image/ico" href="images/fav.ico" />
        <link rel="stylesheet" href="css/header.css" type="text/css"/>
    </head>
<body>
<?php
  include "html/header.html";
  print("<div class='username'><h1>Welcome ".$_SESSION['nom']."</h1></div>");
?>
  <div class='sentence'><p class='title'>Listes de livres </p></div>
    <div class="boites">
        <div class="size"><p>Title</p></div>
        <div class="sizes"><p>Description</p></div>
        <div class="size"><p>Action</p></div>
    </div>




<div class='contenus'>
    <?php 
   
    foreach( $list->getAllElements($sql) as $val){
        print(" <div class='boite'>
        <div class='taille'><p>".$val['title']."</p></div>
        <div class='tailles'><span>".$val['description']."</span></div>
        <div class='taille'><a href='templateupdate.php?id_book=".$val['id_book']."'>Update</a>&nbsp;/&nbsp;<a href='php/traite.php?id_book=".$val['id_book']."'>Delete</a></div>
    </div>");
    }

    ?>
</div>
    <?php

    include "html/footer.html";
    ?>
</body>
</html>
