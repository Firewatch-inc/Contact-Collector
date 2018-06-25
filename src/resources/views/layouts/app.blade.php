<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>@yield('title')</title>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/semantic.css') }}">
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/semantic.js') }}"></script>
    </head>
    <body>
        <div id="top-menu" class="ui inverted menu">
            <div class="right menu">
                <a class="item">
                    Экспорт
                </a>
                <a class="item">
                    Импорт
                </a>
            </div>
        </div>
        <div class="ui two column celled grid">
            <div class="three wide inverted column">
                <h2 align="center">Contact Collector</h2>
                <div class="ui vertical menu">
                    <div class="item">
                        <div class="ui input"><input type="text" placeholder="Поиск..."></div>
                    </div>
                    <div class="item">
                        Контакты
                        <div class="menu">
                            <a class="item">Добавить</a>
                        </div>
                    </div>
                    <a class="item">
                        <i class="grid layout icon"></i> Browse
                    </a>
                    <a class="item">
                        Messages
                    </a>
                    <div class="ui dropdown item">
                        More
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            <a class="item"><i class="edit icon"></i> Edit Profile</a>
                            <a class="item"><i class="globe icon"></i> Choose Language</a>
                            <a class="item"><i class="settings icon"></i> Account Settings</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                
            </div>
        </div>

        <script>

            $('.ui.dropdown').dropdown();

        </script>

    </body>
</html>
