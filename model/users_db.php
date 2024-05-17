<?php
function get_all_users(){
    global $pdo;
    $query = 'SELECT * FROM users';
    $statement = $pdo->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    return $result;
}