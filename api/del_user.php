<?php

// include_once "../include/connect.php";
include "../include/db.php";
/* $sql="delete from `users` where `id`='{$_GET['id']}'";
$pdo->exec($sql); */
// del("users",$_GET['id']);
$User->del($_GET['id']);

unset($_SESSION['user']);

header("location:../index.php");