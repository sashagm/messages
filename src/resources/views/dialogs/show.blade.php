@extends('layouts.apps')

@section('content')
    <div class="container">
        <h1>{{ $dialog->user1->name }} и {{ $dialog->user2->name }}</h1>
        <ul>
            @foreach($messages as $message)
                <li>{{ $message->user->name }} [{{ $message->created_at }}]: {{ $message->body }}</li>
            @endforeach
        </ul>
        <form method="POST" action="{{ route('messages::store') }}">
            @csrf
            <input type="hidden" name="dialog_id" value="{{ $dialog->id }}">
            <div class="form-group">
                <label for="body">Сообщение</label>
                <textarea class="form-control" id="body" name="body" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    </div>
@endsection 