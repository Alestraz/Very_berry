<?php 

session_start();

require 'connect.php';
// For tests

function test($value) {
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

// Checking errors

function dbCheckError($query) {
    $errInfo = $query->errorInfo();
    if ($errInfo[0] !== PDO::ERR_NONE) {
        echo $errInfo[2];
        exit();
    }
    return true;
}

// Select all data from a table

function selectAll($table, $params = []) {
    global $pdo;
    $sql = "SELECT * FROM $table";
    if(!empty($params)) {
        $i = 0;
        foreach($params as $key => $value) {
            if (!is_numeric($value)) {
                $value = "'" . $value . "'";
            }
            if($i === 0) {
                $sql .= " WHERE $key = $value";
            } else {
                $sql .= " AND $key = $value";
            }
            $i++;           
        }
    }

    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetchAll();
}

// Select one row from a table

function selectOne($table, $params = []) {
    global $pdo;
    $sql = "SELECT * FROM $table";
    if(!empty($params)) {
        $i = 0;
        foreach($params as $key => $value) {
            if (!is_numeric($value)) {
                $value = "'" . $value . "'";
            }
            if($i === 0) {
                $sql .= " WHERE $key = $value";
            } else {
                $sql .= " AND $key = $value";
            }
            $i++;           
        }
    }

    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetch();
}

// Insering data

function insert($table, $params) {
    global $pdo;    
    $i = 0;
    $col = '';
    $mask = '';

    foreach ($params as $key => $value) {
        if($i === 0) {
            $col = $col . "$key";
            $mask = $mask . "'" . "$value" . "'";
        } else {
            $col = $col . ", $key";
            $mask = $mask . ", '" . "$value" . "'";
        } 
        $i++;
    }
    $sql = "INSERT INTO $table($col) VALUES ($mask)";
    $query = $pdo->prepare($sql);
    $query->execute(); // do not put $params!
    dbCheckError($query);
    return $pdo->lastInsertId(); // for $user in users.php to create a session array
}

// Update a row

function update($table, $id, $params) {
    global $pdo;    
    $i = 0;
    $str = '';

    foreach ($params as $key => $value) {
        if($i === 0) {
            $str = $str . $key . "= '" . $value . "'";
        } else {
            $str = $str . ", " . $key . "= '" . $value . "'";
        } 
        $i++;
    }
    $sql = "UPDATE $table SET $str WHERE id = $id";
    $query = $pdo->prepare($sql);
    $query->execute(); // do not put $params!
    dbCheckError($query);
}

// Delete a row

function delete($table, $id) {
    global $pdo;    

    $sql = "DELETE FROM $table WHERE id = $id";
    $query = $pdo->prepare($sql);
    $query->execute(); // do not put $params!
    dbCheckError($query);
}





