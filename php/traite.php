<?php 
session_start();
  if($_SESSION['id_user']==""){
      header('Location:../index.php');
  }

?>

<html>
    <head>
        <title>Controller</title>
        <link rel="icon" type="image/ico" href="../images/fav.ico" />
        <link href="https://fonts.googleapis.com/css?family=Armata" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/styletraitement.css"/>
    </head>

    <body>
    
        <div class="fond3">
        
            <div class="phrase">
            
            
            
<?php
        //Partie creation
        include "PDO.php";


        
        if(!empty($_POST['titre_create']) && !empty($_POST['message_create'])){
                
            $istitle=$_POST['titre_create'];
            $ismessage=$_POST['message_create'];
            $isidbook=$_POST['id_user_create'];

                $isUpdate = new Connect();
                
                $req="INSERT INTO book (title,description,id_user) VALUES ('".$istitle."','".$ismessage."','".$isidbook."')";
               // print($req);
               $isUpdate->getUpdates($req);

        }
        //Partie update

        if(!empty($_POST['titre_update']) && !empty($_POST['message_update'])){
                
            $istitle=$_POST['titre_update'];
            $ismessage=$_POST['message_update'];
            $isidbook=$_POST['id_book_update'];

                $isUpdate = new Connect();
                
                $req="UPDATE book SET title='$istitle', description='$ismessage' WHERE id_book='$isidbook'";
               // print($req);
                $isUpdate->getUpdates($req);

        }


        //Partie DElete

        if(!empty($_GET['id_book'])){
            $delete = new Connect();
           
            $requete="DELETE FROM book where id_book='".$_GET['id_book']."'";
           $delete->getUpdates($requete);
        }

?>
            
            
            
            </div>
        
        </div>
    
    </body>
</html>

