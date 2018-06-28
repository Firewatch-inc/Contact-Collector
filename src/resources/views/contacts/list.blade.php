@extends('layouts.app')

@section('title', 'Список контактов')

@section('content')

	@component('components.breadcrumbs', [
		'parent' => 'Главная', 
		'links' => [
			['link' => 'Список контактов', 'href' => route('contacts.index')]
		]
	])
	@endcomponent

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
                    <th>Дата рождения</th>
                    <th>Пол</th>
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
                        <td>{{ date_format(new DateTime($contact->birthday), 'd.m.Y') }}</td>
                        <td>{{ $contact->sex() }}</td>
                        <td class="right aligned">
                            <form action="{{ route('contacts.destroy', $contact) }}" method="POST">
                                {{ method_field('DELETE') }}
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