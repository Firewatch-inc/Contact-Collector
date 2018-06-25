@extends('layouts.app')

@section('title', 'Создание нового контакта')

@section('content')

    <div class="ui green segment">
        <h1>Создание нового контакта</h1>
        <hr>
        <form method="POST" class="ui form">
            {{ method_field('csrf') }}
            
            <div>

            </div>
        </form>
    </div>

@endsection