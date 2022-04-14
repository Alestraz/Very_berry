<?php 

include "app/include/baseurl.php";

session_start();

unset($_SESSION['id']);
unset($_SESSION['admin']);
unset($_SESSION['user_name']);

header('Location: ' . BASE_URL);






