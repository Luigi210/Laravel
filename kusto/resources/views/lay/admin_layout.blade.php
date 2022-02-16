<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Админ-панель - @yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/admin/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/admin/plugins/daterangepicker/daterangepicker.css">
    <link href="/admin/dist/css/colorbox.css" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">


        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Админ-панель</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Главная
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-newspaper"></i>
                                <p>
                                    Новости
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('news.index') }}" class="nav-link">
                                        <p>Все новости</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('news.create') }}" class="nav-link">
                                        <p>Добавить новости</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-align-left"></i>
                                <p>
                                    Проекты
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('projects.index')}}" class="nav-link">
                                        <p>Все проекты</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('projects.create')}}" class="nav-link">
                                        <p>Добавить проект</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-newspaper"></i>
                                <p>
                                    Пользователи
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('custom_users.index') }}" class="nav-link">
                                        <p>Все пользователи</p>
                                    </a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a href="{{ route('news.create') }}" class="nav-link">
                                        <p>Добавить новости</p>
                                    </a>
                                </li> --}}
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-newspaper"></i>
                                <p>
                                    Страницы
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('newspage.index') }}" class="nav-link">
                                        <p>Страница Новости</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('newspage.create')}}" class="nav-link">
                                        <p>Добавить Новости</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('projectspage.index') }}" class="nav-link">
                                        <p>Страница Проекты</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('projectspage.create')}}" class="nav-link">
                                        <p>Добавить Проект</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-newspaper"></i>
                                <p>
                                    О фонде
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('found.index') }}" class="nav-link">
                                        <p>Страница Фонда</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('found.create')}}" class="nav-link">
                                        <p>Добавить Фонд</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('icon.index') }}" class="nav-link">
                                        <p>Страница Иконки</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('icon.create')}}" class="nav-link">
                                        <p>Добавить Иконки</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-newspaper"></i>
                                <p>
                                    О Нашем фонде
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('about_found.index') }}" class="nav-link">
                                        <p>Наш Фонд</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('about_found.create')}}" class="nav-link">
                                        <p>Добавить Фонд</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('about_found_content.index') }}" class="nav-link">
                                        <p>Контент</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('about_found_content.create')}}" class="nav-link">
                                        <p>Добавить Контент</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-newspaper"></i>
                                <p>
                                    Отчеты
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('report.index') }}" class="nav-link">
                                        <p>Все отчеты</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('report.create')}}" class="nav-link">
                                        <p>Добавить отчет</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-newspaper"></i>
                                <p>
                                    Футер
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{ route('report.index') }}" class="nav-link">
                                        <p>Написать нам</p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('report.index') }}" class="nav-link">
                                                <p> Все </p>
                                            </a>
                                            <a href="{{ route('report.index') }}" class="nav-link">
                                                <p>Добавить</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('report.index') }}" class="nav-link">
                                        <p>О нас</p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('report.index') }}" class="nav-link">
                                                <p> Все </p>
                                            </a>
                                            <a href="{{ route('report.index') }}" class="nav-link">
                                                <p>Добавить</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('report.create')}}" class="nav-link">
                                        <p>Партнерам</p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('report.index') }}" class="nav-link">
                                                <p> Все </p>
                                            </a>
                                            <a href="{{ route('report.index') }}" class="nav-link">
                                                <p>Добавить</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('report.create')}}" class="nav-link">
                                        <p>Контакты</p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('report.index') }}" class="nav-link">
                                                <p> Все </p>
                                            </a>
                                            <a href="{{ route('report.index') }}" class="nav-link">
                                                <p>Добавить</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-newspaper"></i>
                                <p>
                                    Команда
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('member.index') }}" class="nav-link">
                                        <p>Все команды</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('member.create')}}" class="nav-link">
                                        <p>Добавить Команду</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('employee.index') }}" class="nav-link">
                                        <p>Все Члены команды</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('employee.create')}}" class="nav-link">
                                        <p>Добавить работника</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('abouticon.index') }}" class="nav-link">
                                        <p>Все Иконки Члена Команды</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('abouticon.create')}}" class="nav-link">
                                        <p>Добавить Иконку</p>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="/admin/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="/admin/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="/admin/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="/admin/plugins/moment/moment.min.js"></script>
    <script src="/admin/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="/admin/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/admin/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/admin/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="/admin/dist/js/pages/dashboard.js"></script>
    <script type="text/javascript" src="/admin/dist/js/jquery.colorbox-min.js"></script>
    <script src="https://cdn.tiny.cloud/1/dlc89f1n1wmmi7lmht1l54dn7xzptfnf8i2h55gyjd7f9p0r/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript" src="/packages/barryvdh/elfinder/js/standalonepopup.js"></script>
    <script src="/admin/admin.js"></script>
    <script>
        tinymce.init({
            selector: '.editor',
            plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
            toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
            toolbar_mode: 'floating',
            file_picker_callback : elFinderBrowser,
        });
        function elFinderBrowser (callback, value, meta) {
            tinymce.activeEditor.windowManager.openUrl({
            title: 'File Manager',
            url: '/elfinder/tinymce5',
            /**
             * On message will be triggered by the child window
             * 
             * @param dialogApi
             * @param details
             * @see https://www.tiny.cloud/docs/ui-components/urldialog/#configurationoptions
             */
            onMessage: function (dialogApi, details) {
                    if (details.mceAction === 'fileSelected') {
                        const file = details.data.file;
                        
                        // Make file info
                        const info = file.name;
                        
                        // Provide file and text for the link dialog
                        if (meta.filetype === 'file') {
                            callback(file.url, {text: info, title: info});
                        }
                        
                        // Provide image and alt text for the image dialog
                        if (meta.filetype === 'image') {
                            callback(file.url, {alt: info});
                        }
                        
                        // Provide alternative source and posted for the media dialog
                        if (meta.filetype === 'media') {
                            callback(file.url);
                        }
                        
                        dialogApi.close();
                    }
                }
            });
        }
    </script>
</body>

</html>