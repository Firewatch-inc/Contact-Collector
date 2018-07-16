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
				<a href="{{ route('index') }}">Contact Collector | @lang('messages.main_menu.slogan')</a>
			</div>
            {{--<div class="right menu">--}}
                {{--<a class="item">--}}
                    {{--@lang('messages.main_menu.export')--}}
                {{--</a>--}}
                {{--<a class="item">--}}
                    {{--@lang('messages.main_menu.import')--}}
                {{--</a>--}}
            {{--</div>--}}
        </div>
        <div class="ui two column stackable celled grid">
            <div class="three wide inverted column">
                <div class="ui vertical menu">
                    {{--<div class="item">--}}
                        {{--<div class="ui input"><input type="text" placeholder="@lang('messages.left_menu.search')..."></div>--}}
                    {{--</div>--}}
                    <div class="item">
						@lang('messages.left_menu.contacts')
                        <div class="menu">
                            <a class="item" href="{{ route('contacts.create') }}">@lang('messages.left_menu.add_contact')</a>
                            <a class="item" href="{{ route('contacts.index') }}">@lang('messages.left_menu.view_contact')</a>
                        </div>
                    </div>
                    <div class="item">
						@lang('messages.left_menu.categories')
                        <div class="menu">
                            <a class="item" href="{{ route('categories.create') }}">
								@lang('messages.left_menu.add_category')
							</a>
                            <a class="item" href="{{ route('categories.index') }}">
								@lang('messages.left_menu.view_category')
							</a>
                        </div>
                    </div>
                    <div class="item">
						@lang('messages.left_menu.settings')
                        <div class="menu">
                            <a class="item" href="{{ route('ltables') }}">@lang('messages.left_menu.code_dictionaries')</a>
							<div class="ui dropdown item">
								@lang('messages.left_menu.lang')
								<i class="dropdown icon"></i>
								<div class="menu">
									<a class="item" href="{{ route('lang.switch', 'ru') }}"><i class="ru flag"></i> Русский </a>
									<a class="item" href="{{ route('lang.switch', 'en') }}"><i class="us flag"></i> English </a>
								</div>
							</div>
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
            $('.ui.accordion').accordion();
			$('.menu .item').tab();
			
			$('.message .close').on('click', function() {
				$(this).closest('.message').transition('fade');
			});

        </script>

    </body>
</html>
