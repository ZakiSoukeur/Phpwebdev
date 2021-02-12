
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php 

$file=fopen('livres.txt','a+');

if(isset($_POST['submit'])){
    $data=valider($_POST['auteur']) .';'.valider($_POST['citation']).';'.valider($_POST['titre'])."\n";
    fwrite($file,$data);
    echo '<h1> Votre formulaire a été bien effectuée </h1>';
    echo "<h4> L'auteur : " .valider($_POST['auteur']) . " <br>" . " La citation : " . valider($_POST['citation']) ."<br>". "Le titre : " .valider($_POST['titre']). "</h4>";

}
function valider($d){
    $d=htmlspecialchars($d);
    $d=strip_tags($d);
    return $d;
}

fclose($file);



?>

<div><a class="btn" href="home.html">Retourner</a></div>
</body>
</html>