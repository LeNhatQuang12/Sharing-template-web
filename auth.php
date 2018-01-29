<?php 
require_once 'inc/autoload.php';
switch ($_GET['action']) {
    case 'login':
        User::login($_POST['username'], $_POST['pass']);
        break;
    case 'logout':
        if(User::logout()){
            header('Location: ' . getRootUri());
            exit;
        }
        break;
    case 'register':
        if(empty(User::register($_POST))){
            die('error occured');
        } else { 
            header('Location: ' . getRootUri());
            exit;
        }
        break;
    case 'update-role':
        $user = User::getUserById($_POST['user_id']);
        $user->changePermission($_POST['permission_id']);
        break;
    default:
        # code...
        break;
}
header('Location: ' . $_SERVER['HTTP_REFERER']);