<?php

$host = 'localhost';
$user = 'root';
$password = '160571017Exo@';
$dbname = 'pdo post';

// Set DSN
$dsn = 'mysql:host=' . $host .';dbname='. $dbname;

// Create a PDO instance
$pdo = new PDO($dsn, $user, $password);

#PRDO QUERY

$stmt = $pdo->query('SELECT * FROM post');

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo $row['title'] . '<br>';
}






/*
try {
$pdo = new PDO("mysql:host=127.0.0.1 b ;dbname=mytodo", 'root', '160571017Exo@');
} catch(PDOException $e) {
    die($e->getMessage());
}

$statement = $pdo->prepare('select * from todos');

$statement->execute();

// $results = $statement->fetchAll(PDO::FETCH_OBJ);

var_dump($statement->fetchAll());


require 'new.html.php';
*/
