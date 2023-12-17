<?php

require "functions.php";
//require "router.php";

$dsn = "mysql:host=localhost;port=3306;user=root;password=password;charset=utf8mb4;dbname=demo";

$pdo = new PDO($dsn);

$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

dd($posts);


echo "<ul>";
foreach ($posts as $post) {
    echo "<li>$post[title]</li>";
}
echo "</ul>";