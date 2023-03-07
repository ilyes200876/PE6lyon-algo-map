<?php

$restaurant = [
    "nom" => "Minanee",
    // "2 rue des poiriers 69007 Lyon France"
    "adresse" => [
        "numero" => 2,
        "voirie" => "rue des poiriers",
        "code postal" => "69007",
        "ville" => "Lyon",
        "pays" => "France"
    ]
];

var_dump($restaurant);

echo "Le restaurant " . $restaurant["nom"] . " est situé à " . $restaurant["adresse"]["ville"];