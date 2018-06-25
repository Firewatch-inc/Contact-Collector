@extends('layouts.app')

@section('title', 'Создание нового контакта')

@section('content')

    <div class="ui blue segment">
        <h1>Список контактов</h1>
        <hr>

        <table class="ui table">
            <col width="5%">
            <thead>
                <tr>
                    <th>№</th>
                    <th>Фамилия</th>
                    <th>Имя</th>
                    <th>Отчество</th>
                    <th class="right aligned">Действие</th>
                </tr>
            </thead>
            <tbody>
                @php ($i = 1)
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $contact->second_name }}</td>
                        <td>{{ $contact->first_name }}</td>
                        <td>{{ $contact->patronymic }}</td>
                        <td class="right aligned">
                            <form action="{{ route('contact.destroy', $contact) }}" method="POST"> 
                                <input type="hidden" name="_method" value="DELETE">
                                {{ csrf_field('csrf') }}
                                
                                <input type="submit" value="Удалить" class="ui red button">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

@endsection