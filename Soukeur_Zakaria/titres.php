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
$file=fopen('livres.txt','r+');



if(isset($_POST['submit'])){
   echo '<h1> Les titres des livres écrits par '. $_POST ['text'].' : </h1>';
   while(!feof($file)){
      $line=fgets($file);
      @list($auteur,$citation,$titre)=explode(";",$line);
      if($auteur==valider($_POST ['text'])){
         echo '<h4>'. $titre . ' </h4>';
      }
     
   }
}

fclose($file);

function valider($d){
   $d=htmlspecialchars($d);
   $d=strip_tags($d);
   return $d;
}


?>
<div><a class="btn" href="home.html">Retourner</a></div>
</body>
</html>