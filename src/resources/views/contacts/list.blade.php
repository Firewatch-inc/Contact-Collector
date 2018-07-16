@extends('layouts.app')

@section('title', 'Список контактов')

@section('content')

    <div class="ui blue segment">
        <h1>@lang('messages.pages.contact_list.title')</h1>
        <hr>

        <table class="ui table">
            <col width="5%">
            <thead>
                <tr>
                    <th>№</th>
                    <th>@lang('messages.contact_fields.sn')</th>
                    <th>@lang('messages.contact_fields.fn')</th>
                    <th>@lang('messages.contact_fields.pt')</th>
                    <th>@lang('messages.contact_fields.db')</th>
                    <th>@lang('messages.contact_fields.sex')</th>
                    <th class="right aligned">@lang('messages.action')</th>
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
                            <form action="{{ route('contacts.destroy', $contact) }}" onsubmit="return confirm('@lang('messages.pages.contact_list.remove_confirm')');" method="POST">
                                {{ method_field('DELETE') }}
                                {{ csrf_field('csrf') }}
                                
                                <input type="submit" value="@lang('messages.pages.contact_list.remove')" class="ui red button">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

@endsection