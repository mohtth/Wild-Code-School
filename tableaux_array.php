<?php
// tableau avec 3 films et 3 acteurs
$movieTitles = [
    'Indiana Jones and the Kingdom of the Crystal Skull' => [' Harrison Ford' ,'Cate Blanchett' ,'Karen Allen'],
    'Indiana Jones and the Last Crusade' => [' Harrison Ford', 'Sean Connery', 'Denholm Elliott'],
    'Indiana Jones and the Temple of Doom' => [' Harrison Ford', 'Kate Capshaw', 'Jonathan Ke Quan']
];

    foreach ($movieTitles as $movie_title => $movieActors) {
        echo 'Dans le film '.$movie_title.' les principaux acteurs sont : <br>' ;
        foreach ($movieActors as $singleActor) {
            echo $singleActor.', <br>';
        }
        echo '<br>';
    }
?>