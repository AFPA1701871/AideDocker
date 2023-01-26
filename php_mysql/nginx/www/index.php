<?php
include "DbConnect.php";
include "Personnes.php";
DbConnect::init();

echo '
<!DOCTYPE html>
     <head>
      <title>Hello World!</title>
     </head>

     <body>
      <h1>Hello World!</h1>
      <p> Le contenu de la base</p>';

      $liste = PersonnesServices::getList();
      foreach ($liste as $value) {
          echo $value->getNom().'<br>';
      }
echo '     </body>';