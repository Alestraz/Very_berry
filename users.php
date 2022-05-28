<?php
include "app/database/db.php";
require_once("app/include/baseurl.php");

$errMsg = '';

// For registration

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])) {
    $admin = 0;
    $name = trim($_POST['user_name']);
    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);

    if($name === '' || $email === '' || $pass === '') {
        $errMsg = "Не все поля заполнены!";
    } elseif(mb_strlen($name, 'UTF8') < 2) {
        $errMsg = "Имя должно быть длиннее 2 символов!";
    } elseif(mb_strlen($pass) < 5) {
        $errMsg = "Пароль должен быть длиннее 5 символов!";
    } else {
        $existence = selectOne('users', ['email' => $email]);
        if (!empty($existence['email']) && $existence['email'] === $email) { // not to have 'trying to acceess boolean/array type mistake'
            $errMsg = "Такой пользователь уже существует!";
        } else {
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $post = [
            'admin' => $admin,
            'user_name' => $name,
            'email' => $email,
            'password' => $pass
        ];
        $id = insert('users', $post);
        $user = selectOne('users', ['id' => $id]);
        $_SESSION['id'] = $user['id'];
        $_SESSION['admin'] = $user['admin'];
        $_SESSION['user_name'] = $user['user_name'];

        if($_SESSION['admin']) {
            header('Location: ' . BASE_URL . 'admin/admin.php');
        } else {
        header('Location: ' . BASE_URL);
            }
        }

    }
} else { 
    $name = '';
    $email = '';
}

// For authorisation

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])) {
    
    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);

    if($email === '' || $pass === '') {
        $errMsg = "Не все поля заполнены!";       
    }else{
        $existence = selectOne('users', ['email' => $email]);
        if (!empty($existence['email']) && $existence['email'] === $email) { 
            if($existence && password_verify("$pass", $existence["password"])) {
                $_SESSION['id'] = $existence['id'];
                $_SESSION['admin'] = $existence['admin'];
                $_SESSION['user_name'] = $existence['user_name'];

                if($_SESSION['admin']) {
                    header('Location: ' . BASE_URL . 'admin/admin.php');
                } else {
                    header('Location: ' . BASE_URL);
                }
            }else{
                $errMsg = "Почта либо пароль введены не верно!";
            }
        }
    }
}else{
    $email = '';
}



