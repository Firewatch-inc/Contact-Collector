@extends('layouts.app')

@section('title', 'Создание нового контакта')

@section('content')

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
        <h1>Создание новой категории</h1>
        <hr>
        <form method="POST" action="{{ route('categories.store') }}" class="ui form">
            {{ csrf_field('csrf') }}
            
            <div class="field">
                <label for="">Наименование</label>
                <input type="text" name="description" class="text">
            </div>

            <div class="field">
                <input type="submit" value="Создать категорию" class="ui primary fluid button">
            </div>
        </form>
    </div>

@endsection