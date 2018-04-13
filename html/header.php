<?php
    class Composant{


    function getHeader($images,$auteur,$name){
        print("

        <img src='".$images"' alt='jesse' class='picture'/>
      <div class='box'>
        <a href=''#''>logo</a>
        <div class='lien'>
          <a href=''>Livre</a>
          <a href=''>Mise a jour</a>
        </div>
      </div>
      <div class='artist'>".$auteur."</div>
      <div class='sentence'><p class='title'>".$name."</p></div>
        ");
     }

    function test($bonjour){
      print("<h1>".$bonjour."</h1>");
    }

  }
     ?>
