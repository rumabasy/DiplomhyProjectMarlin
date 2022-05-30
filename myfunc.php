<?php 

function rint($a){
	echo '<pre>';
	print_r($a);
	echo '</pre>';
}


function dump($a){
	echo '<pre>';
	var_dump($a);
	echo '</pre>';
}

function create($data){
	$connection = new PDO('mysql:host=localhost;dbname=marlin', 'root', '');
	// var_dump($connection);//#1-значит соединение установлено, база есть
	$sql = "INSERT INTO diplomusers (login, email, password, role, avatar) VALUES (:login, :email, :password, :role, :avatar)";//подготовка строки//:titlex, :contentx ---это метки из data[]
	$statement = $connection->prepare($sql);//запись в БД
	$result = $statement->execute($data);//в подготовленный запрос вставляем данные по меткам
	// var_dump($result);//bool(true)//значит передача состоялась
	header("Location: index.php");
}

function uploadImage($image){
	$extension = pathinfo($image['name'], PATHINFO_EXTENSION);
	// dump (uniqid().'.'.$extension);//генерируем уникальное имя, а расширение оставляем
	$filenaem = uniqid().'.'.$extension;//генерируем уникальное имя, а расширение оставляем
	move_uploaded_file($image['tmp_name'], 'img/uploads/'.$filenaem );
	return $filenaem;
}

function getPosts(){
	//создаем объект PDO:
	$pdo = new PDO('mysql:host=localhost;dbname=marlin','root', '');
	//создаем текст запроса: 
	$sql="SELECT * FROM diplomusers ORDER BY id";
	//передаем sql-код в метод prepare $pdo->prepare($sql):
	$statement = $pdo->prepare($sql);
	//выполняем код//запускаем его на выполнение:
	$statement->execute();
	//из полученных данных извлекаем все в виде ассоциативного массива
	$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
	return $posts;
}

function getPost($id){
	//создаем объект PDO:
	$pdo = new PDO('mysql:host=localhost;dbname=marlin','root', '');
	//создаем текст запроса: 
	$sql="SELECT * FROM `diplomusers` WHERE  `id`= $id ";
	//передаем sql-код в метод prepare $pdo->prepare($sql):
	$statement = $pdo->prepare($sql);
	//выполняем код//запускаем его на выполнение:
	$statement->execute();
	//из полученных данных извлекаем все в виде ассоциативного массива
	$ppost = $statement->fetchAll(PDO::FETCH_ASSOC);
//        dump ($ppost); exit;
	return $ppost;
}

function editPost($editdata, $id){
        $connection = new PDO('mysql:host=localhost;dbname=marlin', 'root', '');
        $sql = "UPDATE diplomusers SET login=:login, email=:email, password=:password, role=:role, avatar=:avatar WHERE id=:id";
        $statement = $connection->prepare($sql);//запись в БД
        $statement->bindValue(":id", $id);
        $statement->bindValue(":login", $editdata['login']);
        $statement->bindValue(":email", $editdata['email']);
        $statement->bindValue(":password", $editdata['password']);
        $statement->bindValue(":role", $editdata['role']);
        $statement->bindValue(":avatar", $editdata['avatar']);
        $result = $statement->execute();//в подготовленный запрос вставляем данные по меткам
       
}

function deletePost($id){
    //создаем объект PDO:
	$pdo = new PDO('mysql:host=localhost;dbname=marlin','root', '');
	//создаем текст запроса: 
	$sql="DELETE  FROM `diplomusers` WHERE  `id`= $id ";
	//передаем sql-код в метод prepare $pdo->prepare($sql):
	$statement = $pdo->prepare($sql);
	//выполняем код//запускаем его на выполнение:
	$result = $statement->execute();
//	var_dump($result);//bool(true)//значит передача состоялась       
}


?>