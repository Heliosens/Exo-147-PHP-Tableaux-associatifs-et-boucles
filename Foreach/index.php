<?php

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
$videotheque = array(
    array(
        'nom' => 'Independance day',
        'date' => 1996,
        'realisateur' => 'Roland Emmerich',
        'acteurs' => array(
            'Will Smith', 'Bill Pullman', 'Jeff Goldblum', 'Mary McDonnell',
        ),
    ),
    array(
        'nom' => 'Bienvenue a Gattaca',
        'date' => 1998,
        'realisateur' => 'Andrew Niccol',
        'acteurs' => array(
            'Ethan Hawke', 'Uma Thurman', 'Jude Law',
        ),
    ),
    array(
        'nom' => 'Forrest Gump',
        'date' => 1994,
        'realisateur' => 'Robert Zemeckis',
        'acteurs' => array(
            'Tom Hanks', 'Gary Sinise',
        ),
    ),
    array(
        'nom' => '12 hommes en colere',
        'date' => 1957,
        'realisateur' => 'Sidney Lumet',
        'acteurs' => array(
            'Henry Fonda','Martin Balsam','John Fiedler','Lee J. Cobb','E.G. Marshall',
        ),
    ),
);

echo '12.Mes films : <br>';
//ajoutez votre code ici
//echo "<pre>";
//var_dump($videotheque);
//echo "</pre>";
//foreach ($videotheque as $film){
//    echo '<strong>' . $film['nom'] . '</strong> est sortie en ' . $film['date'] . '<br> réalisé par ' . $film['realisateur'] . ' avec <br>';
//    foreach ($film['acteurs'] as $acteur){
//        echo $acteur . " ";
//    }
//    echo '<br><br>';
//}

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
//reprenez le tableau ci-dessus, ajoutez-y 3 de vos films préférés avec les mêmes
//informations (nom, date, realisateur, acteurs) et en plus de ces informations
//rajoutez un synopsis

echo '13.Mes films : <br>';
//ajoutez votre code ici

$videotheque[] = [
    'nom' => 'Le cinquiéme élément',
    'date' => 1997,
    'realisateur' => 'Luc Besson',
    'acteurs' => [
        'Bruce Willis',
        'Mila Jovovitch',
        'Gary Oldman',
    ],
    'synopsis' => 'Egypte, 1914. Des extraterrestres récupèrent quatre pierres magiques. Avant de partir, 
    les extraterrestres promettent que dans 300 ans, ils rapporteront les pierres.',
];

$videotheque[] = [
    'nom' => 'Matrix',
    'date' => 1999,
    'realisateur' => 'Les Wachowski',
    'acteurs' => [
        '',
        '',
        '',
    ],
    'synopsis' => '',
];

$videotheque[] = [
    'nom' => 'xxx',
    'date' => 0,
    'realisateur' => 'xxx',
    'acteurs' => [
        'x',
        'x',
        'x',
    ],
    'synopsis' => '',
];

//echo '<pre>';
//print_r($videotheque);
//echo '</pre>';

foreach ($videotheque as $film){
    echo '<strong>' . $film['nom'] . '</strong> est sortie en ' . $film['date'] . '<br> réalisé par ' . $film['realisateur'] . ' avec <br>';
    foreach ($film['acteurs'] as $acteur){
        echo $acteur . " ";
    }
    echo '<br><br>';
}

