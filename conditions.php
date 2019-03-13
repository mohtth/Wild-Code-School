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

// sinon si l'opposant a le poing perd contre le pistolet
elseif ($opponentWeapon == 'fists') 
{
    $indyWeapon = 'gun';
}

// sinon si l'opposant a fouet perd contre le poing
elseif ($opponentWeapon == 'whip') 
{
    $indyWeapon = 'fists';
}

    echo "When the opponent takes a $opponentWeapon Indiana Jones will take $indyWeapon" ;



?>



