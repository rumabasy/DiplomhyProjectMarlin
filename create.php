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
                                Добавление пользователя
                            </h5>
                            <div class="frame-wrap">
                                <form method="post" action="insertdb.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="form-label" for="simpleinput">Логин</label>
                                        <input type="text" id="simpleinput" class="form-control" name="login">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="example-email-2">Email</label>
                                        <input type="email" id="example-email-2" name="example-email-2" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="example-password">Password</label>
                                        <input type="password" id="example-password" class="form-control" value="" name="pass">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="example-select">Роль</label>
                                        <select class="form-control" id="example-select" name="role">
                                            <option>Обычный пользователь</option>
                                            <option>Контент-менеджер</option>
                                            <option>Администратор</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="example-fileinput">Аватар</label>
                                        <input type="file" id="example-fileinput" class="form-control-file" name="avatar">
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-info">Добавить</button>
                                    </div>
                                </form>
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
