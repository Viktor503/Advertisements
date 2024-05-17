<?php
//include the user model
include_once('models/userModel.php');
//function to get all users
function get_all_users(){
    //get the database connection
    global $pdo;
    //Query that gets all users
    $query = 'SELECT * FROM users';
    //preparing executing and fetching the result
    $statement = $pdo->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();

    //create an array of type UserModel based on the query result
    $users = array();
    foreach($result as $row){
        $user = new UserModel($row);
        $users[] = $user;
    }
    return $users;
}