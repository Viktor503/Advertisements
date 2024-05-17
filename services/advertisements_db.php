<?php
    //include the advertisement model
    include_once('models/advertisementModel.php');
    //function to get all advertisements
    function get_all_advertisements(): array{
        //get the database connection
        global $pdo;
        //Query that gets the advertisement data and the username of the user that created the advertisement
        $query = 'SELECT advertisements.id,name as username,title FROM advertisements
        LEFT JOIN users
        ON advertisements.userid = users.id
        ORDER BY title;
         ';
        //preparing executing and fetching the result
        $statement = $pdo->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();

        //create an array of type advertisementModel based on the query result
        $advertisements = array();
        foreach ($result as $res) {
            $advertisement = new advertisementModel($res);
            $advertisements[] = $advertisement;
        }

        return $advertisements;
    }