<?php

$carterestaurant = [
    "Entrées" => [
        [
            "nom" => "Salade",
            "description" => "tomate,poulet, crouton,oeuf,vénigrette",
            "prix" => "12 £"
        ],
        [
            "nom" => "Carpaccio",
            "description" => "carpaccio de boeuf",
            "prix" => "17 £"
        ],
        [
            "nom" => "Soupe",
            "description" => "tomate,poulet, crouton,oeuf,eau",
            "prix" => "11.49 £"
        ],
        [
            "nom" => "Taboulé",
            "description" => "semoule, tomates, menthe, citron, olives",
            "prix" => "14.49 £"
        ],
    ],
    // "2 rue des poiriers 69007 Lyon France"
    "Plats" => [ 
        [
            "nom" => "Couscous",
            "description" => "couscous, carottes, citrouille,pomme de terre....",
            "prix" => "25 £"
        ]
    ],
    "Desserts" => [
        [
            "nom" => "Fondant au chocolat",
            "description" => "Chocolat, farine, sucre,oeufs...",
            "prix" => "8 £"
        ]
    ]
];

var_dump($carterestaurant);

// Afficher le prix de la salade : 
echo $carterestaurant["Entrées"][0]["nom"] . " coûte " . $carterestaurant["Entrées"][0]["prix"] . PHP_EOL;

// Afficher toutes les entrées : 
echo "Liste des entrées : " . PHP_EOL;
$i = 0;
while ($i < count($carterestaurant["Entrées"])) {
    echo $carterestaurant["Entrées"][$i]["nom"] . " coûte " . $carterestaurant["Entrées"][$i]["prix"] . PHP_EOL;
    $i = $i+1;
}

// Afficher les catégories de plats :
/*
Carte :
   Entrées :
   Plats : 
   Desserts :
*/
echo "Carte : " . PHP_EOL;
foreach ($carterestaurant as $categorie => $liste_elements) {
    echo "    " . $categorie . " :" . PHP_EOL;
}
echo PHP_EOL;
echo "-----------------------------------" . PHP_EOL;
echo PHP_EOL;
// Afficher toute la carte :
/*
Carte :
   Entrées :
       Salade coûte 12 £
       Carpaccio coûte 17£
   Plats : 
   Desserts :
*/
function afficherPlatsDeLaCategorie($carterestaurant, $categorie) {
    $i = 0;
    while ($i < count($carterestaurant[$categorie])) {
        echo $carterestaurant[$categorie][$i]["nom"] . " coûte " . $carterestaurant[$categorie][$i]["prix"] . PHP_EOL;
        $i = $i+1;
    }
}
echo "Carte : " . PHP_EOL;
foreach ($carterestaurant as $categorie => $liste_elements) {
    echo "    " . $categorie . " :" . PHP_EOL;
    afficherPlatsDeLaCategorie($carterestaurant, $categorie);
}

// Rajouter un plat : 
$carterestaurant["plats"][] = [
    "nom" => "Rôti de Boeuf",
    "description" => "Rôti braisé servi avec des frites",
    "prix" => "34,99 £"
];
// Rajouter une catégorie : 
$carterestaurant["boissons chaudes"] = [
    [
        "nom" => "Expresso",
        "description" => "café court",
        "prix" => "2,99 £"
    ],
    [
        "nom" => "Latte",
        "description" => "café long au lait",
        "prix" => "7,99 £"
    ]
];

var_dump($carterestaurant);