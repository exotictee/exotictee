<?php
/*
$host = 'localhost';
$user = 'root';
$password = '160571017Exo@';
$dbname = 'exoticable';

// Set DSN
$dsn = 'mysql:host=' . $host .';dbname='. $dbname;

// Create a PDO instance
$pdo = new PDO($dsn, $user, $password);

#PRDO QUERY

$stmt = $pdo->query('SELECT * FROM etable');

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo $row['Task'] . '<br>';
}
*/



require 'index_view.php';


//try {
$pdo = new PDO('mysql:host=localhost;dbname=MyTodo', 'root', '160571017Exo@');
//} catch(PDOException $e) {
 // die($e->getMessage());
//}

$statement = $pdo->prepare('select * from todos');

$statement->execute();

$task = $statement->fetchAll(PDO::FETCH_OBJ);

var_dump($task);

require 'function.php';
