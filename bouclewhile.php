<?php

// $i = 1;
// while ($i < 6) {
//   if ($i == 3) break;
//   echo $i;
//   $i++;
// }

// $i = 5;

// while ($i < 6):
//   echo $i;
//   $i++;
// endwhile;

// $i = 1;

// do {
//   echo $i;
//   $i++;
// } while ($i < 6);
// 

// $i = 8;

// do {
//   echo $i;
//   $i++;
// } while ($i < 6);
// $i = 1;

// do {
//   if ($i == 3) break;
//   echo $i;
//   $i++;
// } while ($i < 6);
// for ($x = 0; $x <= 10; $x++) {
//   echo "The number is: $x <br>";
// }

// for ($x = 0; $x <= 10; $x++) {
//   if ($x == 3) break;
//   echo "The number is: $x <br>";
// }
// for ($x = 0; $x <= 10; $x++) {
//   if ($x == 3) continue;
//   echo "The number is: $x <br>";
// }

// for ($x = 0; $x <= 100; $x+=10) {
//   echo "The number is: $x <br>";
// }

// $colors = array("red", "green", "blue", "yellow"); 

// foreach ($colors as $x) {
//   echo "$x <br>";
// }

// $members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

// foreach ($members as $x => $y) {
//   echo "$x : $y <br>";
// }


// class Car {
//   public $color;
//   public $model;
//   public function __construct($color, $model) {
//     $this->color = $color;
//     $this->model = $model;
//   }
// }

// $myCar = new Car("red", "Volvo");

// foreach ($myCar as $x => $y) {
//   echo "$x: $y <br>";
// }


// $colors = array("red", "green", "blue", "yellow");

// foreach ($colors as $x) {
//   if ($x == "green") break;
//   echo "$x <br>";
// }
// $colors = array("red", "green", "blue", "yellow");

// foreach ($colors as $x) {
//   if ($x == "blue") $x = "pink";
// }

// var_dump($colors);

// foreach ($colors as &$x) {
//   if ($x == "blue") $x = "pink";
// }

// var_dump($colors);

// $colors = array("red", "green", "blue", "yellow");

// foreach ($colors as $x) :
//   echo "$x <br>";
// endforeach;

// for ($x = 0; $x < 10; $x++) {
//   if ($x == 4) {
//     break;
//   }
//   echo "The number is: $x <br>";
// }

// $colors = array("red", "green", "blue", "yellow");

// foreach ($colors as $x) {
//   if ($x == "blue") break;
//   echo "$x <br>";
// }

// for ($x = 0; $x < 10; $x++) {
//   if ($x == 4) {
//     continue;
//   }
//   echo "The number is: $x <br>";
// }
// $x = 0;

// while($x < 10) {
//   if ($x == 4) {
//     continue;
//   }
//   echo "The number is: $x <br>";
//   $x++;
// }

// while (1 == 1) {
//     echo "Je suis toujours vrai !!!!\n";
// }


// afficher les nombres de 1 à 5

// $i = 1;
// while ($i <= 5) {
//     echo "Compteur : $i\n";
//     $i = $i + 1;
// }

// Demander l'âge jusqu'à ce qu'il soit correct

// $age = 0; // J'initialise une variable $age
// while ($age <= 0) {
//     echo "Quel âge as-tu ?\n";
//     $age = trim(fgets(STDIN));
// }
// echo "Tu as $age !\n"; le \n prend de la mémoire et situé toujours à droite !

// do{
//     echo "Quel âge as-tu ?\n";
//     $age = trim(fgets(STDIN));
// }while($age <= 0);
// echo "Tu as $age ans!\n";

// $i = 0;
// while ($i < 10) {
//     $i++;
//     if ($i == 5) continue; // saute l'affichage pour 5
//     if ($i == 8) break;    // arrête la boucle à 8
//     echo "$i\n";
// }
// Le 5 n'est pas affiché car 
// 
// La boucle while est très utilisée pour créer des applications qui interagissent avec des actions utilisateur comme les jeux vidéo ou des

// Un programme qui permet de créer des fichiers nommé en fonction de l'heure

// while (true) {
//     echo "Tapez une commande (create, aide, quitter) :\n";
//     $commande = trim(fgets(STDIN)); // trim enlève le retour à la ligne

//     switch ($commande) {
//         case "create":
//             echo "Creation du fichier\n";
//             $fichier = fopen(date("h:m:s"),"w+");
//             break;
//         case "aide":
//             echo "Commandesshdcudhucfhd disponibles : create, aide, quitter\n";
//             break;
//         case "quitter":
//             echo "Au revoir !\n";
//             exit; // arrête l'execution du programme
//         default:
//             echo "Commande inconnue.\n";
//     }
// }
// 


// Compteur de 1 à 10
// Créez un programme qui affiche les nombres de 1 à 10 en utilisant une boucle while.


//  $i = 1;
// while ($i <= 10) {
//     echo "Compteur : $i\n";
//     $i = $i + 1;
// }




// Saisie utilisateur Demandez à l'utilisateur de saisir un nombre positif. Tant que le nombre est négatif, continuez à demander une saisie. Affichez le nombre quand il est conforme.


// ton nombre est positif super !

// Je veux un nombre positif, tu as tapé un nombre négatif



// while (true) {
//     echo "Tape un nombre positif :\n";
//     $commande = trim(fgets(STDIN)); // trim enlève le retour à la ligne
//     $number = (int)$commande;
//     switch ($commande) {
//         case ($number < 0):
//             echo "ton nombre est négatif, continue !\n";
//             break;
//         case ($number > 0):
//             echo "ton nombre est positif. Au revoir !\n";
//             exit; // arrête l'execution du programme    

//             default:
//             echo "tape un vrai nombre nom de D.ieu!";
//             break;
// }
// }



// Table de multiplication

// Demandez à l'utilisateur de saisir un nombre, puis affichez la table de multiplication de ce nombre de 1 à 10.

// $i = 0;   espace mémoire
// // echo "Tape un nombre :$i\n"; ça me mets 0
// echo "Tape un nombre :\n";
// $number = trim(fgets(STDIN)); // trim enlève le retour à la ligne là tu choisis ton nombre
// // echo $result = $number * $i; ça me mets 0

// $i = 1;
// while ($i <= 10) {
//     $result = $number * $i;
//     echo "$number* $i = $result\n";
//     $i++;
// }


// Somme des nombres
// Demandez à l'utilisateur de saisir des nombres jusqu'à ce qu'il saisisse 0. Affichez la somme de tous les nombres saisis.

// echo "Tape un nombre :\n";
// $number = trim(fgets(STDIN)); // trim enlève le retour à la ligne là tu choisis ton nombre
// // echo $result = $number * $i; ça me mets 0

// $i = 1;
// while ($i <= 10) {
//     $result = $number * $i;
//     echo "$number* $i = $result\n";
//     $i++;
// }


// Somme des nombres et string

// Tant que i n'est pas égal à 0, il doit continuer à taper un nombre
// echo "Tape un nombre :\n";
// $number = trim(fgets(STDIN));

// $i = 1;
// while ($i <= 3) {
//     if ($number == 3) 
//     echo "Tu as deviné \n";

//     else {
//         echo "Tu dois continuer à taper un nombre \n";
//     }

//     $i++;
// }



// $i = 0;
// echo "Tape un nombre :\n";
// $number = trim(fgets(STDIN));

// while ($i <= 3) {
//     switch ($number == 0) {
//         case " Tu dois continuer à taper un nombre \n":
//             echo "Creation du fichier\n";
//             break;
//         case "Tu as deviné \n":
//             echo "Au revoir !\n";
//             exit; // arrête l'execution du programme
//         default:
//             echo "Commande inconnue.\n";
//              $i++;
//     }
// }


// $i = 0;

// while ($i <= 3) {
//     echo "Devine un nombre :\n";
//     $commande = trim(fgets(STDIN)); // trim enlève le retour à la ligne
//     $number = (int)$commande;
//     switch ($commande) {
//         case ($number !== 0):
//             echo "Perdu, continue !\n";
//             break;
//         case ($number == 0):
//             echo "Tu as deviné! Bravo !\n";
//             exit; // arrête l'execution du programme    

//         default:
//             echo "tape un vrai nombre nom de D.ieu!";
//             break;
//     }
//     $i++;
// }






// <?php  
// $i = 1;

// while ($i < 6) {
//   if ($i == 3) break;  
//   echo $i;
//   $i++;
// } 
// 


// Demandez à l'utilisateur de saisir des nombres jusqu'à ce qu'il saisisse "exit". Affichez la somme de tous les nombres saisis.



// Attention au \n de fgets(), utilisez trim() pour enlever le retour à la ligne.



// Jeu de devinette
// Créez un jeu où l'utilisateur doit deviner un nombre entre 1 et 100. Le programme lui indique si le nombre est plus grand ou plus petit que le nombre à deviner. Continuez jusqu'à ce qu'il trouve le bon nombre.
// Devine un nombre entre 1 et 100
// Nombre deviné
// exit 
// Nombre non deviné continue à chercher il est plus petit ou plus grand !
// Utilisez la fonction rand pour générer un nombre aléatoire entre 1 et 100.


// $nombre = rand(1,100);

// do{
//     echo "Devine un nombre ?\n";
//     $utilisateur = (int) trim(fgets(STDIN));
// if ($nombre>=$utilisateur){
//     echo "nombre plus grand\n";
// }
// else
// {
//  echo "plus petit\n";

// }

// } while($utilisateur != $nombre);
// echo "Bien joué!\n";



// Compteur de voyelles
// Demandez à l'utilisateur de saisir une phrase. Comptez et affichez le nombre de voyelles dans la phrase.
// Utilisez strtolower() pour convertir la phrase en minuscules.


// $i = 0;
// $vowels = array("a","e","i","o","u");

// while($i<3) {
//      echo "écris une phrase et je te dirai le nombre de voyelles : \n";
//      $commande = trim(fgets(STDIN));
//      $str = strtolower($commande);
//      $count = 0;
//      $count = 0;


//   for ($i = 0; $i < strlen($str); $i++) {
//   if (in_array(strtolower($str[$i]), $vowels)) {
//     $count++;
//   }
// }
// echo "Nombre de voyelles dans cette phrase  $str  est de : $count";

// }



// Mot de passe
// Demandez à l'utilisateur de saisir un mot de passe. 
// Tant que le mot de passe n'est pas "password123", 
// continuez à demander une saisie. Affichez un message de bienvenue quand le mot de passe est correct.


$i = 0;
$mauvaismdp = "password123";
$bonmdp="oiseaulyre12345";

while ($i <= 20) {
    echo "le mot de passe :\n";
    $commande = trim(fgets(STDIN)); // trim enlève le retour à la ligne
    switch ($commande) {

            case $bonmdp:
            echo "Tu as deviné! Bravo !\n";
            exit; // arrête l'execution du programme  

            case $mauvaismdp:
            echo "Ne pas taper ce genre de mot de passe ! Perdu, continue !\n";
            break;
            
            default:
            echo "Mauvais mot de passe";
            break;
    }

    
    $i++;
}

echo "trop de tentatives fin du jeu !";






// Mot de passe avec limite

// while ($i<= 10){
//      if ($password === "oiseaulyre12345") {

//         echo "tu as trouvé bienvenue\n";

//      } else {

//         echo "tu as perdu continue à chercher\n";

//     }

//     $i++;
// }


// $t = date("H");

// if ($t < "20") {
//   echo "Have a good day!";
// } else {
//   echo "Have a good night!";
// }

// Demandez à l'utilisateur de saisir un mot de passe. Limitez le nombre de tentatives à 3. Si le mot de passe est incorrect après 3 tentatives, affichez un message d'erreur et terminez le programme.



// Compteur de caractères


// Demandez à l'utilisateur de saisir une phrase. Affichez le nombre total de caractères dans la phrase, y compris les espaces.



// Voir la fonction strlen() pour compter les caractères d'une chaîne de caractères.
