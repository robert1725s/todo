@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')
    <div class="create-message">
        @if (session('message'))
            <div class="create-message--success">
                {{ session('message') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="create-message--fail">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="index-content">
        <div class="index-content__inner">
            <form class="todo-create" method="post" action="/todos">
                @csrf
                <input type="text" class="todo-create__txt" name="content">
                <button class="todo-create__button" type="submit">作成
                </button>
            </form>
            <div class="todo-board">
                <h3 class="todo-board__title">Todo</h3>
                @foreach ($todos as $todo)
                    <div class="todo-item">
                        <form class="todo-item__update-form" method="post" action="todos/update">
                            @method('PATCH')
                            @csrf
                            <input class="todo-item__name" type="text" name="content" value="{{ $todo['content'] }}">
                            <input type="hidden" name="id" value="{{ $todo['id'] }}">
                            <button type="submit" class="todo__item-button-update">
                                更新
                            </button>
                        </form>
                        <form class="todo-item__delete-form" method="post" action="todos/delete">
                            @method('DELETE')
                            @csrf
                            <input type="hidden" name="id" value="{{ $todo['id'] }}">
                            <button class="todo__item-button-delete" type="submit">削除
                            </button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
