<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
        <?php require 'arrays.php' ?>
        <?php require 'myfunc.php' ?>
        <?php $posts = getPosts() ?>

        <?php //dump($posts); exit; ?>
        
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-8">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <h5 class="frame-heading">
                                Обычная таблица
                            </h5>
                            <div class="frame-wrap">
                            	<div class="form-group">
                            		<a href="create.php" class="btn btn-success">Добавить пользователя</a>
                            	</div>
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Фото</th>
                                            <th>Логин</th>
                                            <th>Роль</th>
                                            <th>Email</th>
                                            <th>Действия</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $numPost=0;?>
                                        <?php foreach ($posts as $post) : ?>
                                        <tr>
                                            <?php //$scope[$post['id']]=$numPost; //exit; ?>
                                            <th scope="row"><?php echo ++$numPost; //$scope[$numPost]; ?></th>
                                            <td>
                                                <?php //echo $post['id'];  ?>
                                                <img src="<?php echo 'img/uploads/'.$post['avatar'];  ?>" width="75">
                                            </td>
                                            <td><?php echo $post['login'] ?></td>
                                            <td><?php echo $post['role'] ?></td>
                                            <td><?php echo $post['email'] ?></td>
                                            <td>
                                                <a href="show.php?scope=<?php echo $numPost ?>&num=<?php echo $post['id']?>" class="btn btn-info">Посмотреть</a>
                                                <a href="edit.php?num=<?php echo $post['id']?>" class="btn btn-warning">Изменить</a>
                                                <a href="deletedb.php?num=<?php echo $post['id']?>" class="btn btn-danger">Удалить</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
