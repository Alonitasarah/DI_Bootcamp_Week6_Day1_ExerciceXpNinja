<?php

   // Vérifier si le formulaire est soumis 
   if ( isset( $_POST['submit'] ) ) {

     if (!empty($_POST['couleur'])) {

      //compter les cases à cocher et sélectionner le nom

      $value = count($_POST['couleur']);
      $nom = $_POST['nom']; 
      $prenom  = $_POST['prenom']; 
      echo  " $nom " . "$prenom " . ' à pour couleur préférées : '  .  $value . '<br/>';

      //Pour parcourir le tableau

      foreach($_POST['couleur'] as $value1){
         echo '<p>' . $value1 . '</p>';
      }
     }
     else {
      echo 'veuillez saisir au moins les deux premiére cases';
     }
  }
?>