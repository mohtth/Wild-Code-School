<?php

$weapons = ['fists', 'whip', 'gun'];

// Cela permet de choisir une arme de manière aléatoire.
$opponentWeapon = $weapons[rand(0,2)]; 

// 
$indyWeapon = '';

// si l'opposant a le pistolet perd contre le fouet
if ($opponentWeapon == 'gun')
{
    $indyWeapon = 'whip';
}

// sino si l'opposant a le poing perd contre le pistolet
elseif ($opponentWeapon == 'whip') 
{
    $indyWeapon = 'gun';
}

// sino si l'opposant a fouet perd contre le poing
elseif ($opponentWeapon == 'gun') 
{
    $indyWeapon = 'fists';
}

    echo "When the opponent takes a $opponentWeapon Indiana Jones will take $indyWeapon" ;



?>



