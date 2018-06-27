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
			<div class="header item">
				<h2 align="center">
					<a href="{{ route('index') }}">Contact Collector</a>
				</h2>
			</div>
            <div class="right menu">
                <a class="item">
                    Экспорт
                </a>
                <a class="item">
                    Импорт
                </a>
            </div>
        </div>
        <div class="ui two column stackable celled grid">
            <div class="three wide inverted column">
                <div class="ui vertical menu">
                    <div class="item">
                        <div class="ui input"><input type="text" placeholder="Поиск..."></div>
                    </div>
                    <div class="item">
                        Контакты
                        <div class="menu">
                            <a class="item" href="{{ route('add') }}">Добавить</a>
                            <a class="item" href="{{ route('contacts.index') }}">Просмотр</a>
                        </div>
                    </div>
                    <div class="item">
                        Категории
                        <div class="menu">
                            <a class="item" href="#">Добавить</a>
                            <a class="item" href="#">Просмотр</a>
                        </div>
                    </div>
                    <div class="item">
                        Настройки
                        <div class="menu">
                            <a class="item" href="#">Кодовые словари</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="thirteen wide column">
                @yield('content')
            </div>
        </div>

        <script>

            $('.ui.dropdown').dropdown();

        </script>

    </body>
</html>
