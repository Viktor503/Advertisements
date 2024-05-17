<?php
    function get_all(){
        global $pdo;
        $query = 'SELECT * FROM advertisements
         LEFT JOIN users
         ON advertisements.user_id = users.id
         ORDER BY title
         ';
        $statement = $pdo->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }