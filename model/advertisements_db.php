<?php
    function get_all_advertisements(){
        global $pdo;
        $query = 'SELECT advertisements.id,name as username,title FROM advertisements
        LEFT JOIN users
        ON advertisements.userid = users.id
        ORDER BY title;
         ';
        $statement = $pdo->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }