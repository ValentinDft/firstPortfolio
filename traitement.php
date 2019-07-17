<?php
  if (isset($_POST['envoie'])) {

    if (!empty($_POST['prenom']) AND !empty($_POST['nom']) AND !empty($_POST['email']) AND !empty($_POST['message']))
    {
      //$header = "MIME-Version: 1.0\r\n";
      //$header.='Content-Type:text/html; charset="uft-8"'."\n";
      //$header.='Content-Transfer-Encoding: 8bit';
      $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      $tel = $_POST['tel'];
      $email = $_POST['email'];
      $message = $_POST['message'];

      $destinataire = "valentinduffet@orange.fr";
      $sujet = "Formulaire de contact CV";
      $contenu = "Nom : $nom \n
        Prenom : $prenom \n
        Tel : $tel \n
        Email : $email \n
        Message : $message";
      $header = "From : $nom \n Reply-To: $email";
      mail($destinataire, $sujet, $contenu, $header);
      echo "Merci votre message est envoyé";

    } else {
      echo "Tous les champs ne sont pas complétés";
    }
  }

?>
