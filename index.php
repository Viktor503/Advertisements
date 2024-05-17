<?php
    //include the database services
    require_once('services/database.php');
    require_once('services/advertisements_db.php');
    require_once('services/users_db.php');

    //get the action from the request
    $action = filter_input(INPUT_POST,'action', FILTER_SANITIZE_STRING);
    if (empty($action)) {
        //if the action is not in the post request, check the get request
        $action = filter_input(INPUT_GET,'action', FILTER_SANITIZE_STRING);
        if (empty($action)) {
            //if the action is not in the get request, set the action to home
            $action = 'home';
        }
    }
    //show the correct page based on the action
    switch ($action) {
        case 'home':
            include('view/home.php');
            break;
        case 'users':
            //get all users
            $users = get_all_users();
            include('view/users.php');
            break;
        case 'advertisements':
            //get all advertisements
            $advertisements = get_all_advertisements();
            include('view/advertisements.php');
            break;
        }