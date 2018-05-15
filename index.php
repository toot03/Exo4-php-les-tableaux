<<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exo 4</title>
</head>
<body>

<?php
//Exercice 1
echo"exo 1<br>";
$mois = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre");

//Exercice 2
echo"<br>exo 2<br>";
echo $mois[2];

//Exercice3
echo"<br>exo 3<br>";
echo $mois[5];
//Exercice 4
echo"<br>exo 4<br>";
echo $mois[7]="août";
//Exercice 5
echo"<br>exo 5<br>";
$departement=array(
    "9"=>"Ariège" ,
    "12"=>"Aveyron",
    "30"=>"Gard",
    "31"=>"Haute-Garonne" ,
    "32"=>"Gers",
    "46"=>"Lot",
    "32"=>"Gers" ,
    "34"=>"Hérault",
    "46"=>"Lot",
    "48"=>"Lozère" ,
    "65"=>"Haute-Pyrénées" ,
    "66"=>"Pyrénées-orientales" ,
    "81"=>"Tarn",
    "82"=>"Tarn-et-garonne" );
//Exercice 6
echo"<br>exo 6<br>";
echo $departement[30];
//Exercice 7
echo"<br>exo 7<br>";
$departement+=["11"=>"Aude"];
//Exercice 8
echo"<br>Exo 8<br>";
foreach($mois as $numero){
    echo "$numero <br>";
}
//Exercice 9
echo"<br>Exo 9<br>";
foreach($departement as $element){
    echo "$element <br>";
}
//Exercice 10
echo"<br>Exo 10<br>";
foreach($departement as $cle=>$element){
    echo "Le département ". $element ." a le numéro " .$cle ."<br>";
}
?>
</body>
</html>