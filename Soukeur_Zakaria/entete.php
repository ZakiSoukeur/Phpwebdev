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
   while(!feof($file)){
      $line=fgets($file);
      @list($auteur,$citation,$titre)=explode(";",$line); 
       $titre=trim($titre);

      if($titre==valider($_POST['entete'])){
        echo ' <h4>le numéro de la colonne de ( ' .valider($_POST['entete']) . ' ) est : 3 </h4>';
        
     }else if($citation==$_POST['entete']){

        echo ' <h4>le numéro de la colonne de ( ' .valider($_POST['entete']) . ' ) est : 2 </h4>';
     }else if ($auteur==$_POST['entete']){
        echo ' <h4>le numéro de la colonne de ( ' .valider($_POST['entete']) . ' ) est : 1 </h4>';
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