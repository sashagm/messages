@extends('layouts.apps')

@section('content')
    <div class="container">
        <h1>Новый диалог</h1>
        <form method="POST" action="{{ route('messages::dialogs.store') }}">
            @csrf
            <div class="form-group">
                <label for="user2_id">Выберите пользователя</label>
                <select class="form-control" id="user2_id" name="user2_id">
                    @foreach($users as $user)
                        @if($user->id !== auth()->id())
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Создать</button>
        </form>
    </div>
@endsection