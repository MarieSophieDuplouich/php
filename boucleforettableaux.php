<?php

// Debugger un tableau
// Pour afficher le contenu d'un tableau, on utilise la fonction print_r() ou var_dump() pour un affichage plus détaillé (type,etc,...). Ces fonctions permettent de visualiser la structure et les valeurs d'un tableau.
// var_dump et print_r fonctionne sur toutes les variables, pas seulement les tableaux. Elles sont très utiles pour le débogage. N'hesitez pas à les utiliser pour vérifier le contenu de vos variables. w3s : https://www.w3schools.com/php/func_var_print_r.asp


// $notes = [10, 11, 12, 20, 2];

// echo $notes[0] . "\n";
// echo $notes[1] . "\n";
// echo $notes[2] . "\n";
// echo $notes[3] . "\n";
// echo $notes[4] . "\n";

// print_r($notes); // Affiche le contenu du tableau
// var_dump($notes); // Affiche le contenu du tableau avec les types de données


// Connaitre la taille d'un tableau
// Pour connaître le nombre d'éléments dans un tableau, on utilise la fonction count()


// $notes = [10,11,12,20,2];
// echo count($notes); // Affiche 5
// // w3s : https://www.w3schools.com/PHP/func_array_count.asp

// Boucle for
// La boucle for est utilisée pour répéter un bloc de code un nombre précis de fois. Elle est souvent utilisée pour parcourir les éléments d'un tableau.


// $notes = [10, 11, 12, 20, 2];
// for ($i = 0; $i < count($notes); $i++) {
//     echo $notes[$i] . "\n";
// }
// Une boucle for est enfaite une simple boucle while avec une initialisation, une condition et une incrémentation.


// $i = 0; // Initialisation
// while ($i < count($notes)) { // Condition
//     echo $notes[$i] . "\n"; // Bloc de code à répéter
//     $i++; // Incrémentation
// }
// En programmation, il est souvent préférable d'utiliser une boucle for pour parcourir les tableaux, car elle est plus concise et plus facile à lire.

// foreach
// La boucle foreach est une autre façon de parcourir les éléments d'un tableau. Elle est plus simple et plus lisible que la boucle for pour ce type de tâche.

// $notes = [10,11,12,20,2];
// foreach ($notes as $note) {
//     echo $note."\n";
// }

// Ajouter,Supprimer ou modifier les éléments d'un tableau

// Ajouter un élément
// Pour ajouter un élément à la fin d'un tableau, on utilise la fonction array_push() ou l'opérateur [].


$notes = [10, 11, 12, 20, 2];
array_push($notes, 15); // Ajoute 15 à la fin du tableau
// ou
$notes[] = 15; // Ajoute 15 à la fin du tableau


// Supprimer un élément
// Pour supprimer un élément d'un tableau, on utilise la fonction unset().


// $notes = [10,11,12,20,2];
// print_r($notes); // Affiche : 10,11,12,20,2
// unset($notes[2]); // Supprime l'élément à l'index 2
// print_r($notes); // Affiche : 10,11,20,2


// Supprimer tous les éléments à partir d'un index
// array_splice permet de supprimer des éléments dans un intervalle donné.

// array_splice(array $table,int startDeletingAt,int nbElementToDelete);


// Paramètres :

// array le tableau à modifier
// int l'index à partir d'où commence la suppression des éléments
// int le nombre d'éléments à supprimer


// Modifier un élément
// Pour modifier l'élément il suffit de lui affecter une nouvelle valeur à l'index voulu.

// $notes = [10,11,12,20,2];
// print_r($notes); // Affiche : 10,11,12,20,2
// $notes[2] = 18; // Modifie l'élément à l'index 2
// print_r($notes); // Affiche : 10,11,18,20,2


// Les objets - Les Tableaux à clé textuels - Map
// Les tableaux map aussi appelée objet ou tableaux associatifs possèdent des clés textuelles et sont très utilisées pour récupérer les lignes d'une base de données SQL par exemple.

// // Tableau à key textuelle
// $eleve = [
//     "name" => "Thomas",
//     "lastname" => "Canal",
//     "age" => 27,
// ];
// echo $eleve["name"];       // => Thomas , la key "name" est une string.

// Ajouter une nouvelle clé
// Pour ajouter une nouvelle caratéristique (clé) à un tableau, on utilise la syntaxe suivante :
// $eleve["job"] = "web dev";   // Ajoute à la clé job l'élément "web dev"

// var_dump($eleve); // $eleve possède maintenant 4 clés : name, lastname, age ET job

// Modifier la valeur d'une clé
// Pour modifier ou ajouter une clé c'est la même syntaxe.

// $eleve["name"] = "Mathieu";

// Supprimer une clé
// La fonction unset() permet de supprimer une clé d'un Map, elle permet également de supprimer n'importe quelle variable.

// unset($eleve["lastname"]);
// la fonction var_dump() permet d'afficher le détail d'une variable comme les éléments d'un tableau par exemple.

// var_dump($eleve);     // Écrit le contenu du tableau dans le HTML


// Cas d'utilisation des tableaux
// La moyenne des notes d'élève



// // notes actuelles de l'élève
// $notes = [10, 12, 15, 8, 20];

// //  $nombreDeNotes ça compte les notes là il y a 5 notes;
// $nombreDeNotes = count($notes);

// // on commence à partir de 0
// $somme = 0;


// for ($i = 0; $i < $nombreDeNotes; $i++) {
//     //  ci-dessus i = mémoire à 0; $nombreDeNotes ça compte les notes là il y a 5 notes; le $i++ sert que la boucle n'aille pas à l'infini c'est aussi +1

//     $somme += $notes[$i];
//     //  ci-dessus  la somme est égale à 0 au départ; plus la somme des    notes actuelles de l'élève présenté sous forme de tableau
// }

// // ci-dessous calcul de la moyenne des notes
// $moyenne = $somme / $nombreDeNotes;

// //ci-dessous ça te montre le résultat de la moyenne sous format texte
// echo "La moyenne des notes est : $moyenne\n";


// La moyenne coefficiée des notes d'élèves
// Nous avons deux tableaux : notes et coef. Nous allons calculer la moyenne coefficiée des notes d'élèves en utilisant une boucle for. Les coefficiant et les notes sont enregistrer dans l'ordre donc a chaque note[$i] correspond un coef[$i].

// <?php
// $notes =    [10, 12, 15, 8, 20];
// $coef =     [2 , 1 ,  3, 1,  4];
// $somme = 0;
// for ($i = 0; $i < $count($notes); $i++) {
//     $somme += $notes[$i] * $coef[$i]; // On multiplie la note par son coefficient
// }
// $moyenne = $somme/ array_sum($coef); // On divise la somme par la somme des coefficients
// echo "La moyenne coefficiée des notes est : $moyenne\n";
// Notez l'utilisation de la fonction array_sum() qui permet de calculer la somme des éléments d'un tableau. On peut obtenir le même résultat en utilisant une boucle for pour additionner les coefficients, mais array_sum() est plus concise et lisible.

// w3s : https://www.w3schools.com/php/func_array_sum.asp


// Exercices boucle for et tableaux
// Affichage des notes
// Créez un tableau contenant les notes de 5 élèves, puis utilisez une boucle for pour afficher chaque note.
// Exemple attendu :
// Notes des élèves :
// 10
// 12
// 15
// 8
// 20

// $notes = [10,12,15,8,20];
// print_r($notes);

// for ($i = 0; $i < count($notes); $i++) {
//     echo $notes[$i]."\n";
// }

// Calcul de la moyenne des notes
// Utilisez le tableau de notes créé précédemment pour calculer et afficher la moyenne des notes.
// Exemple attendu :
// La moyenne des notes est : 13

// $notes = [10,12,15,8,20];

// $nombreDeNotes = count($notes);

// // on commence à partir de 0
// $somme = 0;


// for ($i = 0; $i < $nombreDeNotes; $i++) {
//     //  ci-dessus i = mémoire à 0; $nombreDeNotes ça compte les notes là il y a 5 notes; le $i++ sert que la boucle n'aille pas à l'infini c'est aussi +1

//     $somme += $notes[$i];
//     //  ci-dessus  la somme est égale à 0 au départ; plus la somme des    notes actuelles de l'élève présenté sous forme de tableau
// }

// // ci-dessous calcul de la moyenne des notes
// $moyenne = $somme / $nombreDeNotes;

// //ci-dessous ça te montre le résultat de la moyenne sous format texte
// echo "La moyenne des notes est : $moyenne\n";



// Modification d'une note
// Demandez à l'utilisateur de saisir un nouvel index et une nouvelle note, puis modifiez la note correspondante dans le tableau.
// Exemple attendu :
//    Voici le tableau des notes :
//    0 : 10
//    1 : 12
//    2 : 15
//    3 : 8
//    4 : 20
//    Entrez l'index de la note :
//    > 2
//    Entrez la nouvelle note :
//    20
//    Voici le tableau des notes :
//    0 : 10
//    1 : 12
//    2 : 20
//    3 : 8
//    4 : 20

// $notes = [10,12,15,8,20];

// print_r($notes); 
// $notes[2] = 20;
// print_r($notes);

// Affichage des prénoms
// Créez un tableau contenant les prénoms de 6 personnes et affichez-les un par un à l'aide d'une boucle for.
// Exemple attendu :

// Prénoms :
// Alice
// Bob
// Clara
// David
// Emma
// Hugo

// $firstnames = ['Alice','Bob','Clara','David', 'Emma',' Hugo'];

// for ($i = 0; $i < count($firstnames); $i++) {
//     echo $firstnames[$i]."\n";
// }


// Somme des âges
// Créez un tableau d'âges, puis calculez et affichez la somme totale des âges.
// Exemple attendu :

// La somme des âges est : 98