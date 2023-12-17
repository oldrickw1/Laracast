<?php

require "functions.php";
require "Database.php";
//require "router.php";


$db = new Database();

$post = $db->query("SELECT * FROM posts WHERE id > 1");
dd($post->fetchAll(PDO::FETCH_ASSOC));