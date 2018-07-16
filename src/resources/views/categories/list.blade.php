@extends('layouts.app')

@section('title', 'Список категорий')

@section('content')

    <div class="ui blue segment">
        <h1>Список категорий</h1>
        <hr>

		<table class="ui table">
			<thead>
				<tr>
					<th>№</th>
					<th>Наименование</th>
					<th class="right aligned">Действие</th>
				</tr>
			</thead>
			<tbody>
				@php ($i = 1)
				@forelse ($lcategory as $category)
					<tr>
						<td>{{ $i++ }}</td>
						<td>{{ $category['description'] }}</td>
						<td class="right aligned">
                            <form onsubmit="return confirm('Удалить?')" action="{{ route('categories.destroy', $category) }}" method="POST">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                
                                <input type="submit" value="Удалить" class="ui red button">
                            </form>
						</td>
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