<?php

// <!-- En PHP, il existe plusieurs types de données :

// Integer, les nombres entiers
// Float, les nombres à virgule
// String, les textes
// Boolean, les valeurs binaires : true ou false
// Array, les tableaux de données
// Object, les instances de classes (un User, Player, Product, etc.)
// NULL, la valeur que l'on donne à une donnée "vide".
// Une variable commence toujours par le symbole $, c'est cet opérateur qui permet de déclarer et d'accéder à une variable en mémoire. -->


// <!-- Le type string
// Une chaîne de caractères string permet de stocker du texte.

// $prenom = "Pierre";
// Pour afficher une variable, on utilise echo :

// echo $prenom; -->


// <!-- La concaténation
// Pour assembler plusieurs chaînes de caractères, on utilise l'opérateur ., qui est également un mot réservé du PHP.

// $prenom = "Pierre";
// echo "Salut ".$prenom."\n"; // Affiche : Salut Pierre
// Je peux aussi directement concaténer une variable dans une string.

// $prenom = "Pierre";
// echo "Salut $prenom \n"; // Affiche : Salut Pierre
// Cet opérateur permet de construire (sérialiser) une donnée textuelle.

// On peut par exemple enregistrer un message d'une application de tchat dans un fichier ou même des messages d'erreur dans un fichier de log.

// sérialisation de données -->

// $prenom = "Pierre";
// $texte = "Salut tout le monde !";

// $fichier = fopen("messages.txt","a+");
// $data = $prenom." : ".$texte."\n";

// fwrite($fichier,$data);
// fclose($fichier);

// Le type number
// Les nombres peuvent être entiers (integer) ou à virgule (double ou float).

// $age = 25;
// $prix = 19.99;
// On peut connaître le type d'une variable avec la fonction native du PHP gettype().

// $age = 25;
// $prix = 19.99;

// echo gettype($age)."\n";    // integer
// echo gettype($prix)."\n";   // double
// On peut effectuer des opérations mathématiques :

// $rayon = 3;
// $surface_cercle = 3.14 *2*$rayon; // pi*2*r = surface
// echo "Rayon : ".$rayon."\n";
// echo "Surface : ".$surface_cercle."\n";


// L'opérateur modulo
// L'opérateur % permet d'obtenir le reste d'une division. Par exemple, pour savoir si un nombre est pair, il suffit de voir si, une fois divisé par deux, il possède un reste.
// $age = 25;
// echo $age % 2; 


// Lire l'entrée utilisateur - STDIN
// Sous Linux, les caractères tapés au clavier sont enregistrés dans un fichier nommé stdin.

// Il est situé dans le dossier : /TODO/

// PHP nous fournit une variable native qui pointe vers ce fichier (pas besoin d'utiliser une fonction comme fopen pour ouvrir le fichier stdin donc).

// Cette variable s'appelle STDIN et je peux lire une ligne tapée au clavier avec la fonction fgets().

// fgets() lit tous les caractères tapés dans un fichier jusqu'au caractère \n, la touche entrée donc. C'est exactement ce qu'il nous faut pour lire des données tapées dans le terminal.


// echo "Bonjour, veuillez taper quelque chose :\n";
// $texte = trim(fgets(STDIN));
// echo $texte."\n";
// fgets() est ce que l'on appelle une fonction bloquante, votre programme sera donc en pause tant que vous n'aurez pas tapé quelque chose.

// Attention la valeur de retour de fgets() contient le caratère \n à la fin de la string.

// Donc si l'utilisateur tape "password" la valeur de retour est enfaite : "password\n". La vérification du mot de passe serait donc impossible. Retirer toujours \n avec la fonction trim() pour sanitariser l'entrée.


// echo "Bonjour, veuillez taper quelque chose :\n";
// $texte = trim(fgets(STDIN));
// echo $texte."\n";
// Lancez le programme et tapez quelque chose pour le voir apparaître à l'écran.


// Exercices variables string, number et fgets()
// Afficher un prénom
// Demandez à l'utilisateur de saisir son prénom, puis affichez un message de bienvenue personnalisé.
// Exemple attendu :

// Quel est ton prénom ?
// > Pierre
// Bonjour Pierre !

// echo "Quel est ton prénom ?\n";
// "\n".$texte = trim(fgets(STDIN));
// echo "Bonjour ".$texte." ! \n";


// Addition de deux nombres
// Demandez à l'utilisateur de saisir deux nombres, additionnez-les et affichez le résultat.
// Exemple attendu :

// Entrez un premier nombre :
// > 5
// Entrez un second nombre :
// > 7
// Le résultat est : 12