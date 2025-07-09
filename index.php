<!-- Formulaire HTML
Les données d'un formulaire PHP sont placées dans le body, à la différence d'un body JSON il est beaucoup plus simple de récupérer ces données. Il suffit de lire le contenu du tableau $_POST. -->

<!-- Soit un formulaire HTML : -->

<form action="/add-user.php" method="post">
  <input type="text" name="name">
  <input type="email" name="email">
  <input type="password" name="password">

  <input type="submit" value="Submit">
</form> 
<!-- Les données du formulaire sont simplement dans le tableau $_POST. -->

<h2> Bonjour <?= $_POST["name"] ?> !</h2>
echo $_POST["email"];
echo $_POST["password"];
Header de redirection
<!-- En cas d'erreur, vous voulez rediriger l'utilisateur vers une autre page. Pour cela, vous pouvez utiliser la fonction header() qui permet d'envoyer au navigateur non pas du texte HTML mais une instruction de redirection appelée "header HTTP". -->

<?php
if (!isset($_POST["name"]) || empty($_POST["name"])) {
    header("Location: /mising-name.php");
    exit();
}
// FormData et fichiers
// Pour envoyer des fichiers via un formulaire HTML, vous devez utiliser l'attribut enctype="multipart/form-data" dans la balise <form>. Cela permet au navigateur de savoir qu'il doit envoyer des données binaires (comme des fichiers) en plus des données textuelles.

// Voici un exemple de formulaire pour uploader un fichier :

<form action="/upload.php" method="post" enctype="multipart/form-data">
  <input type="text" name="author" placeholder="Auteur">
  <input type="file" name="photo" accept="image/*">
  <input type="submit" value="Envoyer">
</form>
// Pour récupérer le fichier uploadé, vous pouvez utiliser le tableau $_FILES :

<?php
if (isset($_FILES['photo'])) {
    $author = $_POST['author'];
    $file = $_FILES['photo'];
    var_dump($file); // Affiche les informations du fichier uploadé
    var_dump($author); // Affiche l'auteur
}
// Enregister le fichier uploadé
// $_FILES est un tableau associatif (clé, valeur) qui contient uniquement les informations du fichier uploadé.

// Une question se pose : où est stocké le fichier uploadé ?

// Le fichier uploadé est stocké dans un fichier temporaire sur le serveur, généralement dans le répertoire /tmp sous Linux.

// On peut le voir via la clé tmp_name du tableau $_FILES.

$tmpFile = $_FILES['photo']['tmp_name'];
echo "L'emplacement du fichier temporaire est : " . $tmpFile;
// Il nous reste donc à déplacer ce fichier temporaire vers un emplacement du serveur avant qu'il soit supprimé par PHP.

// La méthode simple en PHP - move_uploaded_file
// Pour enregistrer le fichier uploadé sur le serveur, vous pouvez utiliser la fonction move_uploaded_file(). Cette fonction copie le fichier vers un chemin que vous lui passez en paramètre sous la forme d'une string.

// exemple d'utilisation de la fonction move_uploaded_file

$chemin_tmp = $_FILES["picture"]["tmp_name"];
move_uploaded_file($chemin_tmp,"photos/".$_FILES["picture"]["name"]);
// Voici un exemple complet d'un script PHP qui enregistre un fichier uploadé :

// Upload un fichier via un formulaire HTML.
// Enregistre le fichier dans un dossier photos/ sur le serveur.
// index.php

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="upload-photo.php" method="post" enctype="multipart/form-data">
        <input type="file" name="picture">
        <button>Envoyer</button>
    </form>
</body>

</html>
upload-photo.php

<?php
$isSuccessful = false;
// Si le forumlaire à bien soumis un input nommé "picture"
if (isset($_FILES["picture"])) {
    var_dump($_FILES); // j'affiche les informations du fichier uploadé pour m'aider au débogage

    // Je récupère le chemin temporaire du fichier uploadé
    $chemin_tmp = $_FILES["picture"]["tmp_name"];

    // A l'aide du chemin temporaire, je déplace le fichier vers le dossier "photos/" avec le nom du fichier uploadé
    $isSuccessful = move_uploaded_file( $chemin_tmp, "photos/".$_FILES["picture"]["name"] );
}

?> 

<?php if($isSuccessful == true) : ?>
    <h1>Upload Success ! </h1>
<?php else :?>
    
    <h1>Upload Failed ! </h1>
<?php endif; ?>


<a href="/">Retour à la page d'accueil</a>