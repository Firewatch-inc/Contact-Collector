@extends('layouts.app')

@section('title', 'Главная страница')

@section('content')
	
    <div class="ui segment">
		<h1>Добро пожаловать</h1>
        <hr>
		
		<div class="ui accordion">
			<div class="title">
				<i class="dropdown icon"></i>
				Что это?
			</div>
			<div class="content">
				<p>				
					Веб-приложение, которое позволит Вам:
				</p>
				<ol class="ui list">
				  <li>Управлять контактами</li>
				  <li>Работать с категориями, к которым относятся контакты</li>
				</ol>
			</div>
		</div>
    </div>

@endsection