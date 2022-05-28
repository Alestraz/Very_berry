<?php 










/*
include "app/database/db.php";
include "app/include/baseurl.php";
$errMsg = '';
$regStatus = ''; 

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){
    $admin = 0;
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);

    if($name === '' || $email === '' || $pass === ''){
        $errMsg = "Не все поля заполнены!";
    }elseif (mb_strlen($name, 'UTF8') < 2) {
        $errMsg = "Имя должно быть длиннее 2 символов";
    }elseif (mb_strlen($pass, 'UTF8') < 2) {
        $errMsg = "Пароль должен быть длиннее 2 символов";
    }else {
           $existence = selectOne('users', ['email' => $email]);
            if($existence['email'] === $email) {
                $errMsg = "Пользователь с такой почтой уже существует";
            }else{ 
                $pass = password_hash($pass, PASSWORD_DEFAULT);
                $post = [
                    'admin' => $admin,
                    'user_name' => $name,
                    'email' => $email,
                    'password' => $pass
                ];
        $id = insert('users', $post);
        $user = selectOne('users', ['id' => $id]);
        test($id);
        test($user);
        $_SESSION['id'] = $user['id'];
        $_SESSION['login'] = $user['user_name'];
        $_SESSION['admin'] = $user['admin'];
        test($_SESSION);
        exit();
        header('location: ' . BASE_URL); 
        
        }
    }
}
else{
    $name = '';
    $email = '';
} 

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($POST['button-log']) ){
    echo 'Форма Авторизации';
}

    //password_hash($_POST['password'], PASSWORD_DEFAULT);
   // $last_row = selectOne('users', ['id' => $id]);

   <?php

include "app/database/db.php";
include "app/include/baseurl.php";
$errMsg = '';
$regStatus = ''; 

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){
    $admin = 0;
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);

    if($name === '' || $email === '' || $pass === ''){
        $errMsg = "Не все поля заполнены!";
    }elseif (mb_strlen($name, 'UTF8') < 2) {
        $errMsg = "Имя должно быть длиннее 2 символов";
    }elseif (mb_strlen($pass, 'UTF8') < 2) {
        $errMsg = "Пароль должен быть длиннее 2 символов";
    }else {
           $existence = selectOne('users', ['email' => $email]);
            if($existence['email'] === $email) {
                $errMsg = "Пользователь с такой почтой уже существует";
            }else{ 
                $pass = password_hash($pass, PASSWORD_DEFAULT);
                $post = [
                    'admin' => $admin,
                    'user_name' => $name,
                    'email' => $email,
                    'password' => $pass
                ];
        $id = insert('users', $post);
        $_SESSION['id'] = $user['id'];
        $_SESSION['login'] = $user['user_name'];
        $_SESSION['admin'] = $user['admin'];
        test($_SESSION);
        exit();
        header('location: ' . BASE_URL); 
        
        }
    }
}
else{
    $name = '';
    $email = '';
} 

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($POST['button-log']) ){
    echo 'Форма Авторизации';
}

    //password_hash($_POST['password'], PASSWORD_DEFAULT);
   // $last_row = selectOne('users', ['id' => $id]);

   $host='localhost';
   $dbname='very_berry';
   $username='root';
   $password='mysql';
   $charset = 'utf8mb4';
   
   $dsn="mysql:host=$host;dbname=$dbname;charset=$charset";
   $options = [
       PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
       PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
       PDO::ATTR_EMULATE_PREPARES   => false,
   ];
   
   try {
       $pdo = new PDO($dsn, $username, $password, $options);
   } catch (PDOException $e){
       throw new PDOException($e->getMessage(), (int)$e->getCode());
   }
   
   session_start();
   include("connect.php");
   
   
   
   //Basic Configurations 
   // !!When everything is finished!!
   //ini_set('display_errors', 0);
   //ini_set('log_errors', 1);
   
   ini_set('display_errors', 1);
   
   // For testing functions
   function test($value){
       echo '<pre>';
       print_r($value);
       echo '</pre>';
   }
   
   //Check for errors when connect to a DB
   function dbCheckError($query) {
       $errInfo = $query->errorInfo();
       if ($errInfo[0] !== PDO::ERR_NONE) {
           echo $errInfo[2];
           exit();
       }
       return true;
   }
   
   // Запрос на получение данных одной таблицы
   function selectAll($table, $params=[]) {
       global $pdo;
       $sql = "SELECT * FROM $table";
   
       if(!empty($params)){
           $i=0;
           foreach ($params as $key => $value){
               if (!is_numeric($value)){
                   $value = "'" . $value . "'";
               }
               if ($i===0){
                   $sql = $sql . " WHERE $key=$value";
               } else {
                   $sql = $sql . " AND $key=$value";
               }
               $i++;
           }
       }   
       $query = $pdo->prepare($sql);
       $query->execute();
       dbCheckError($query);    
       return $query->fetchAll();
   }
   
   
   $x = (selectOne('users', ['email'=>'fhfhf@m.com']));
   echo $x['email'];
   
   // Запрос на получение одной строки c таблицы
   function selectOne($table, $params=[]) {
       global $pdo;
       $sql = "SELECT * FROM $table";
   
       if(!empty($params)){
           $i=0;
           foreach ($params as $key => $value){
               if (!is_numeric($value)){
                   $value = "'" . $value . "'";
               }
               if ($i===0){
                   $sql = $sql . " WHERE $key=$value";
               } else {
                   $sql = $sql . " AND $key=$value";
               }
               $i++;
           }
       }
   
       $query = $pdo->prepare($sql);
       $query->execute();
       dbCheckError($query);    
       return $query->fetch();
   }
   
   
   // Запись в таблицу БД
   
    function insert($table, $params) {
       global $pdo;
       $i = 0; // чтобы не было первой запятой в sql запросе
       $col = '';
       $row = '';
       //Берем ассоциативный массив и перебираем его foreach, чтобы вставить в $sql.
       foreach($params as $key=>$value) {
           if($i === 0) { // убираем первую запятую
               $col .= $key;
               $row .= "'" . $value . "'";
           }else {
           $col .= ", " . $key;
           $row .= ", '" . $value . "'";
           }
           $i++;
       }
   
       $sql = "INSERT INTO $table($col) VALUES($row)";
       $query = $pdo->prepare($sql);
       $query->execute();
       dbCheckError($query);
   
   }
   
   
   // Обновление строки в таблице БД
   function update($table, $id, $params) {
       global $pdo;
       $i = 0;
       $str = '';
       foreach ($params as $key => $value) {
           if ($i === 0){
               $str = $str . $key . " = '" . $value . "'";
           } else {
               $str = $str .", " . $key . "= '" . $value . "'";
           }
           $i++;
       }
   
       $sql = "UPDATE $table SET $str WHERE id = $id";
       $query = $pdo->prepare($sql);
       $query->execute();
       dbCheckError($query); 
   }
   
   // Удаление строки в таблице БД
   function delete($table, $id) {
       global $pdo;   
       $sql = "DELETE FROM $table WHERE id = $id"; 
       $query = $pdo->prepare($sql);
       $query->execute();
       dbCheckError($query); 
   }
   
   // check email
   
   function checkEmail($table, $em) {
       global $pdo;   
       $sql = "SELECT email FROM $table WHERE email = '$em'";
       $query = $pdo->prepare($sql);
       $query->execute();
       dbCheckError($query);
       return $query->fetch();
   }
   
   
   
   */
   
   
      
