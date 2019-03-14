<?php


$animal = ['Lion', 'Rat'];               //l'animal
$chose = [' la lune', 'au feux'];       //la chose

function writeSecretSentence ($PARAMETRE_1, $PARAMETRE_2){
    return $PARAMETRE_1." s'incline face ".$PARAMETRE_2;
}

echo writeSecretSentence ($animal[0], $chose[1]);


?>