<?php
// Mettre en commentaires la ligne 5 pour permettre d'exécuter la suite du fichier appelant.
// Ce fichier est inclus dans tous les fichiers php du site.

//exit ("Access forbidden.");


// Si ce fichier est appelé directement :
if($PHP_SELF == "/exit.php") {
   echo "<!doctype html>\n<html>\n<head>\n<meta charset=\"utf-8\">\n<link href=\"style.css\" rel=\"stylesheet\" media=\"all\" type=\"text/css\">\n<link rel=\"icon\" href=\"Images/favicon.ico\" />\n</head>\n<body>\nPermet d'exécuter la suite ou non du fichier appelant.";
   echo "<p class=src><a href=\"FichiersTexte/exit.txt\">source php de la page</a></p>\n</body>\n</html>";
}
?>

