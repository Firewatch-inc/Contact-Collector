@extends('layouts.app')

@section('title', 'Создание нового контакта')

@section('content')

	@component('components.breadcrumbs', [
		'parent' => 'Главная', 
		'links' => [
			['link' => 'Список категорий', 'href' => route('categories.index')]
		]
	])
	@endcomponent

    <div class="ui blue segment">
        <h1>Список категорий</h1>
        <hr>

		<table class="ui table">
			<thead>
				<tr>
					<th>№</th>
					<th>Наименование</th>
				</tr>
			</thead>
			<tbody>
				@php ($i = 1)
				@forelse ($lcategory as $category)
					<tr>
						<td>{{ $i++ }}</td>
						<td>{{ $category['description'] }}</td>
					</tr>
				@empty
					<tr>
						<td colspan="2"><h4 align="center">Кодовый словарь пуст</h4></td>
					</tr>
				@endforelse
			</tbody>
		</table>

    </div>

@endsection