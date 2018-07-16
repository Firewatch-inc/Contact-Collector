@extends('layouts.app')


@section('title', 'Добавление нового контакта')

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
        <h1>@lang('messages.pages.contact_add.title')</h1>
        <hr>
        <form method="POST" action="{{ route('contacts.store') }}" class="ui form">
            {{ csrf_field('csrf') }}
            
			<div class="three fields">
				<div class="field">
					<label for="">@lang('messages.contact_fields.sn')</label>
					<input type="text" name="second_name" class="text">
				</div>
				<div class="field">
					<label for="">@lang('messages.contact_fields.fn')</label>
					<input type="text" name="first_name" class="text">
				</div>
				<div class="field">
					<label for="">@lang('messages.contact_fields.pt')</label>
					<input type="text" name="patronymic" class="text">
				</div>
			</div>
			
            <div class="field">
				<label for="">@lang('messages.contact_fields.db')</label>
                <input type="date" name="birthday" class="text">
            </div>
			
            <div class="field">
				<label for="">@lang('messages.contact_fields.sex')</label>
                <select name="id_sex">
                    @foreach ($lsex as $sex)
                        <option value="{{ $sex->id_sex }}">{{ $sex->description }}</option>
                    @endforeach
                </select>
            </div>

            <div class="field">
                <input type="submit" value="@lang('messages.actions.add_contact')" class="ui primary fluid button">
            </div>
        </form>
    </div>

@endsection