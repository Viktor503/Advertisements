<?php
function get_all(){
    global $pdo;
    $query = 'SELECT * FROM advertisements';
    $statement = $pdo->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    return $result;
}