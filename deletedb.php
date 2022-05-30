<?php

require 'myfunc.php';

$getpost = getPost($_GET['num']);

unlink('img/uploads/'.$getpost[0]['avatar']);

deletePost($_GET['num']);

header("Location: index.php");
