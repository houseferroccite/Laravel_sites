@extends('layouts.master')
@section('title','Сообщения')
@section('content')
    <form action="{{route('messages-to-chats.search-phone')}}" method="GET" novalidate="novalidate">
        <input
            class="form-control mr-sm-2"
            id="phone"
            name="phone"
            @if(Route::is('messages-to-chats.search-phone'))
            value="{{request()->phone}}"
            @endif
            style="width: 100% !important;"
            type="Search"
            autofocus
            placeholder="Поиск по номеру телефона"
            aria-label="Search">
        <br>
        <button class="btn btn-primary" style="width: 100%">Найти</button>
        <a class="btn btn-warning" style="width: 100%" href="{{route('list-messages')}}">Сбросить фильтр</a>
    </form>
    @if(Route::is('messages-to-chats.search-phone'))
        <div class="chat">
            @foreach($messages as $message)
                <div data-time="{{date('H:i d-m', strtotime($message->send_time))}}" class="msg {{ $message->is_from_me == '0' ? 'sent' : 'rcvd' }}">
                    {{$message->content['text']}}
                </div>
            @endforeach
        </div>
    @endif
@endsection
