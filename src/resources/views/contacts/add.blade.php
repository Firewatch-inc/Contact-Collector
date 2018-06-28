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
	
	@if(session()->has('success_msg'))
		<div class="ui positive message">
			<i class="close icon"></i>
			<div class="header">
				Поздравляем!
			</div>
			<div class="content">
				{{ session()->get('success_msg') }}
			</div>
		</div>
	@endif

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
                <label for="">Дата рождения</label>
                <input type="date" name="birthday" class="text">
            </div>
            <div class="field">
                <label for="">Пол</label>
                <select name="id_sex">
                    @foreach ($lsex as $sex)
                        <option value="{{ $sex->id_sex }}">{{ $sex->description }}</option>
                    @endforeach
                </select>
            </div>


            <div class="field">
                <input type="submit" value="Добавить" class="ui primary fluid button">
            </div>
        </form>
    </div>

@endsection