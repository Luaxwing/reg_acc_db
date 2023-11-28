<?php
// include_once "../include/connect.php";
include_once "../include/db.php";
// $db=new DB('users');
// $acc = htmlspecialchars(trim($_POST['acc']));
$_POST['acc']=htmlspecialchars(trim($_POST['acc']));

/* $sql="insert into `users`(`acc`,`pw`,`name`,`email`,`address`) 
                   values('{$acc}','{$_POST['pw']}','{$_POST['name']}','{$_POST['email']}','{$_POST['address']}')";

$pdo->exec($sql); */

// insert("users",['acc'=>"{$acc}",
//                  'pw'=>"{$_POST['pw']}",
//                  'name'=>"{$_POST['name']}",
//                  'email'=>"{$_POST['email']}",
//                  'address'=>"{$_POST['address']}"]);

// $User->save([
//     'acc' => "{$acc}",
//     'pw' => "{$_POST['pw']}",
//     'name' => "{$_POST['name']}",
//     'email' => "{$_POST['email']}",
//     'address' => "{$_POST['address']}"
// ]);

$User->save($_POST);


header("Location:../index.php");