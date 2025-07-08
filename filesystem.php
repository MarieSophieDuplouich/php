<?php

// File System en PHP
// Le système de fichier c'est l'ensemble des fichier et dossiers de votre ordinateurs. C'est grâce à des fichiers que les programmes effectue la percistance de vos données.

// Un fichier est une suite d'octet enregistré sur le disque dur.

// Dans un système Linux tout est fichier. Alors évidement il est possible de créer, lire et écrire sur des fichiers en PHP, mais vous allez voir que même le clavier est considéré comme un fichier ou appel ça un buffer ou stream (flux de donnée en français).

// Résumé
// Si vous souhaiez enregsitrer une donnée dans un fichier vous pouvez facilement créer un fichier si il n'existe pas et enregistrer sa valeur dans une variable.

// Par exemple le score d'un joueur.

// enregistrer un score

// // Read score
// $fichier = fopen("save.txt","r+");

// $score = 10;
// // fopen renvoi false si le fichier n'existe pas
// if($fichier == false){
//     $fichier = fopen("save.txt","w+");
// }
// fwrite($fichier,$score);
// lire un score

// // Read score
// file_get_contents("save.txt");



// Exercices pratiques sur le File System en PHP
// Créer un fichier et y écrire du texte
// Demandez à l'utilisateur son nom et enregistrez-le dans un fichier utilisateur.txt.
// Astuce : faite attention au droit d'accès du fichier, si vous n'avez pas les bons droits, le fichier ne sera pas créé.



$fichier = fopen("utilisateur.txt", "w+");


$score = trim(fgets(STDIN));


while (true){

   $score = trim(fgets(STDIN));
   fwrite($fichier,$score);
}




// Lire et afficher le contenu d’un fichier

// Lisez le fichier utilisateur.txt et affichez son contenu à l'écran au démarrage du programme.
// Ajouter une ligne à un fichier existant

// Demandez à l'utilisateur d’entrer son age et son nom et ajoutez-les à la fin d'un fichier. La ligne doit être formatée comme suit : Nom: Age.
// Par exemple, si l'utilisateur entre "Alice" et "30", la ligne ajoutée sera Alice: 30.
// Compter le nombre de lignes dans un fichier

// Écrivez un script qui lit un fichier texte et affiche le nombre total de lignes qu'il contient.
// Afficher une ligne spécifique d’un fichier

// Demandez à l'utilisateur de saisir un numéro de ligne, puis affichez le contenu de cette ligne à partir du fichier utilisateur.txt.
// Rechercher un mot dans un fichier

// Demandez à l'utilisateur de saisir un mot, puis affichez toutes les lignes du fichier qui contiennent ce mot.
// Afficher les 5 premières lignes d’un fichier

// Lisez et affichez uniquement les cinq premières lignes d’un fichier texte.
// Extraire et afficher des valeurs séparées

// Si chaque ligne d’un fichier est au format clé: valeur, lisez le fichier et affichez chaque clé et valeur sur une ligne distincte.



// Documentations
// Le manuel du langage PHP est disponible sur le site officel du langage : https://www.php.net/manual/fr/index.php

// La réference des fonctions et objets du langage sont disponible via la barre de recherche du site officel : https://www.php.net/docs.php

// La réference de la syntaxe du langage est dispoible ici : https://www.php.net/manual/fr/langref.php

// Comme d'habitude W3schools est également là : https://www.w3schools.com/php/php_syntax.asp