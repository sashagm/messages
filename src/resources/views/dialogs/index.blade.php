@extends('layouts.apps')

@section('content')
    <div class="container">
        <h1>Диалоги</h1>
        <p><a href="{{ route('messages::dialogs.create') }}">Новый диалог</a></p>



        <ul>
            @foreach($dialogs as $dialog)
                <li><a href="{{ route('messages::dialogs.show', $dialog->id) }}">{{ $dialog->user1->name }} и {{ $dialog->user2->name }}</a>
            
                
                </li>
            @endforeach
        </ul>
    </div>
@endsection