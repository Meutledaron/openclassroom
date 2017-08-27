<?php
//Création de l'array
$alpha = array();
//Première lettre de l'alphabet
$start = "a";
//Création de la boucle for pour ajouter toutes les lettres de l'alphabet dans l'array $alpha
for($i=0; $i<26; $i++)
{
	$alpha[] = $start;
	$start++;
}
//Affichage du message secret
echo ucfirst($alpha[18].$alpha[0].$alpha[11].$alpha[20].$alpha[19]);
?>