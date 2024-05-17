<?php
    require_once('model/database.php');
    require_once('model/advertisements_db.php');
    require_once('model/users_db.php');

    $action = filter_input(INPUT_POST,'action', FILTER_SANITIZE_STRING);
    if (empty($action)) {
        $action = filter_input(INPUT_GET,'action', FILTER_SANITIZE_STRING);
        if (empty($action)) {
            $action = 'home';
        }
    }
    switch ($action) {
        case 'home':
            include('view/home.php');
            break;
        case 'users':
            $users = get_all();
            include('view/users.php');
            break;
        case 'advertisements':
            $advertisements = get_all();
            include('view/advertisements.php');
            break;
        }