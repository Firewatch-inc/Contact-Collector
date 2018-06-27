@extends('layouts.app')

@section('title', 'Создание нового контакта')

@section('content')

	@component('components.breadcrumbs', [
		'parent' => 'Главная', 
		'links' => [
			['link' => 'Добавление контакта', 'href' => route('add')]
		]
	])
	@endcomponent

    <div class="ui green segment">
        <h1>Создание нового контакта</h1>
        <hr>
        <form method="POST" action="{{ route('contacts.store') }}" class="ui form">
            {{ csrf_field('csrf') }}
            
            <div class="field">
                <label for="">Фамилия</label>
                <input type="text" name="second_name" class="text">
            </div>
            <div class="field">
                <label for="">Имя</label>
                <input type="text" name="first_name" class="text">
            </div>
            <div class="field">
                <label for="">Отчество</label>
                <input type="text" name="patronymic" class="text">
            </div>
            <div class="field">
                <input type="submit" value="Добавить" class="ui primary fluid button">
            </div>
        </form>
    </div>

@endsection