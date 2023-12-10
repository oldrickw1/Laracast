<?php



$books = [
    [
        "name" => "Do Androids Dream of Electric Sheep",
        "author" => "Philip K. Dick",
        "pages" => 324
    ],
    [
        "name" => "The Langoliers",
        "author" => "Henry the Fifth",
        "pages" => 62
    ],
    [
        "name" => "The Wind Waker",
        "author" => "Henry the Fifth",
        "pages" => 507
    ]
];


$filtered = array_filter($books, function ($book) {
    return $book["pages"] >= 100;
});

require "index.view.php";