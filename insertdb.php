<?php
require 'myfunc.php';

$hashedpass = password_hash($_POST["pass"], PASSWORD_DEFAULT);

$avatar = uploadImage($_FILES['avatar']);

$data = [
    "login" => $_POST["login"],
    "email" => $_POST["example-email-2"],
    "password" => $hashedpass,
    "role" => $_POST["role"],
    "avatar" => $avatar,
];

create($data);

function edit(){
	$sql = "INSERT INTO diplomusers (login, email, password, role, avatar) VALUES (:login, :email, :password, :role, :avatar)";//подготовка строки//:titlex, :contentx ---это метки из data[]
	$statement = $connection->prepare($sql);//запись в БД
	$result = $statement->execute($data);//в подготовленный запрос вставляем данные по меткам
	var_dump($result);//bool(true)//значит передача состоялась
}

function receive(){

}

function delete(){}

?>
