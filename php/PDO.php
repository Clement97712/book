<?php
  session_start();
  class Connect{


        function  __construct(){
          try{
            $this->connect = new PDO("mysql:host=127.0.0.1;dbname=Log","root","Laurine_97112");
        }
        catch(PDOException $e){
        print("Erreur: ".$e->getMessage());
      }
      }

      //revoir les fonctions qui vont prendre en parametre 
      // la requete, la redirection et le nom de la redirection


        function getAction($requete){
            $query=$this->connect->prepare($requete);
            $query->execute();
            if($resultat=$query->fetch()){
               // print'YEST';
                $_SESSION['nom']=$resultat['nom'];
                $_SESSION['id_user']=$resultat['id_user'];
                //print $_SESSION['nom'];
                if($_SESSION['nom']!=""){
                header('refresh:10; url= ../templatelist.php');
                print("<h1>Connexion reussi.</h1><p>Creation de votre session.</p><p class='saving'> Veuillez patientez <span>.</span><span>.</span><span>.</span></p>");
                }
                else{
                  print($_SESSION['nom']."<h1>Echec connexioN.</h1>. <p>Vous allez etre redirige vers la page de connexion.</p><p class='saving'> Veuillez patientez <span>.</span><span>.</span><span>.</span></p>");
                }
            }
            else{
              header('refresh:10; url= ../index.php');
              print("<h1>Nope Echec connexion.</h1><p>Vous allez etre redirige vers la page de connexion.</p><p class='saving'> Veuillez patientez <span>.</span><span>.</span><span>.</span></p>");
            }
        }

       


        function getUpdate($requetes){
          $querys=$this->connect->prepare($requetes);
          if($querys->execute()){
            // redirection vers la page de connexion
            header('refresh:10; url= ../index.php');
            print("<h1>Inscription reussi.</h1> <p>Vous allez etre redirige vers la page de connexion.</p><p class='saving'> Veuillez patientez <span>.</span><span>.</span><span>.</span></p>");
          }
          else{
          //  redirection vers la page d'inscription
          header('refresh:10; url= ../inscription.php');
          print("<h1>Echec.</h1> <p>Vous allez etre redirige vers la page d'inscription.</p><p class='saving'> Veuillez patientez <span>.</span><span>.</span><span>.</span></p>");
          }
        }



        function getUpdates($requete){
          $sql=$this->connect->prepare($requete);
          $sql->execute();
          header('refresh:10;url=../templatelist.php');
          print("<h1>Reussi.</h1> <p>Vous allez etre redirige vers votre librairie.</p><p class='saving'> Veuillez patientez <span>.</span><span>.</span><span>.</span></p>");
        }


        function getVerification($requete,$requete2){
          $query=$this->connect->prepare($requete);
          $query->execute();
          if($resultat=$query->fetch()){
            //print("No");
            header('refresh:10; url= ../inscription.php');
            print("<h1>Le mot de passe, le login ou l'email est deja pris.</h1> <p>Vous allez etre redirige vers la page d'inscription.</p> <p class='saving'> Veuillez patientez <span>.</span><span>.</span><span>.</span></p>");

          }
          else{
            //print("Verification OK");
            $this->getUpdate($requete2);
          }
        }

        //3 parametres: requete, la rediurection et le nom de la redirection
        function getAllElement($requete){
          $query=$this->connect->prepare($requete);
          $query->execute();
          while($resultat=$query->fetch(PDO::FETCH_ASSOC)){
              $tableInfo=$resultat;
          }
          return $tableInfo;


  }

  function getAllElements($requete){
    $tableInfo = array();
    $query=$this->connect->prepare($requete);
    $query->execute();
    while($resultat=$query->fetch(PDO::FETCH_ASSOC)){
        $tableInfo[]=$resultat;
    }
    return $tableInfo;


}
}

?>
