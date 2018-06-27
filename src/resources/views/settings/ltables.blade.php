@extends('layouts.app')

@section('title', 'Кодовые словари')

@section('content')

	@component('components.breadcrumbs', [
		'parent' => 'Главная', 
		'links' => [
			['link' => 'Кодовые словари', 'href' => route('ltables')]
		]
	])
	@endcomponent
	
    <div class="ui blue segment">
		<div class="ui top attached tabular menu">
			<a class="active item" data-tab="lsex">Список полов</a>
			<a class="item" data-tab="lcategory">Список категорий</a>
		</div>
		<div class="ui bottom attached active tab segment" data-tab="lsex">
			<table class="ui table">
				<thead>
					<tr>
						<th>№</th>
						<th>Наименование</th>
					</tr>
				</thead>
				<tbody>
					@php ($i = 1)
					@forelse ($lsex as $sex)
						<tr>
							<td>{{ $i++ }}</td>
							<td>{{ $sex['description'] }}</td>
						</tr>
					@empty
						<tr>
							<td colspan="2"><h4 align="center">Кодовый словарь пуст</h4></td>
						</tr>
					@endforelse
				</tbody>
			</table>
		</div>
		<div class="ui bottom attached tab segment" data-tab="lcategory">
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
    </div>

@endsection