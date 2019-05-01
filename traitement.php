<?php
  if (isset($_POST['envoie'])) {

    if (!empty($_POST['prenom']) AND !empty($_POST['nom']) AND !empty($_POST['email']) AND !empty($_POST['message']))
    {
      //$header = "MIME-Version: 1.0\r\n";
      //$header.='Content-Type:text/html; charset="uft-8"'."\n";
      //$header.='Content-Transfer-Encoding: 8bit';
      $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      $email = $_POST['email'];
      $message = $_POST['nom'];

      $destinataire = "vavadu07@gmail.com";
      $sujet = "Formualaire de contact CV";
      $message = "Nom : $nom \n
        Prenom : $prenom \n
        Email : $email \n
        Message : $message";
      $header = "From : $nom \n Reply-To: $email";
      mail($destinataire, $sujet, $message, $header);
      echo "Merci votre message est envoyé";

    } else {
      echo "Tous les champs ne sont pas complétés";
    }
  }

?>
