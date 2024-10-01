<?php

require 'functions.php';

// Connect to the MySQL database.
$dsn = "mysql:host=localhost;port=3306;dbname=php4beginnersdb;user=root;charset=utf8mb4";

$pdo = new PDO($dsn);

$statement = $pdo->prepare("select * from posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}