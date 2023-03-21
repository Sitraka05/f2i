<?php
require('../class/verification.php');
$verif = new Verification ();
// verifier le nom
$verif->Texte($_POST['nom'], 'nom');
echo $verif->getIndexError(0);
// verifier le prenom
$verif->Texte($_POST['prenom'], 'prenom');
// verifier l'email et verifier en base de donnée si il existe
$verif->Email($_POST['email']);
// verifier le telephone
$verif->Phone($_POST['telephone']);
echo $verif->getIndexError(0);
// verifier le mot de passe
$verif->Password($_POST['password'],$_POST['password2']);
echo $verif->getIndexError(0);
// verifier le mot de passe etque le confirme mot de passe soit identique




