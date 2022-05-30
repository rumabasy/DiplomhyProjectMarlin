<?php
require 'myfunc.php';

//dump($_POST);
//dump($_FILES);
//dump($_GET);
//exit();

$avatar = $_FILES['editavatar']["name"]=='' ? $_GET['img'] : uploadImage($_FILES['editavatar']);

$hashedpass = password_hash($_POST["pass"], PASSWORD_DEFAULT);

$editdata=[
    'login' => $_POST['editlogin'] ,
    'email' => $_POST['example-email-2'], 
    'password' =>$hashedpass,
    'role' => $_POST['editrole'],
    'avatar'=> $avatar,
];

//    dump($editdata);
//    exit();

$id=$_GET['num'];

editPost($editdata, $id);

header("Location: index.php");
