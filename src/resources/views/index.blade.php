@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')
    <div class="create-message">
        <div class="create-message__inner">
            Todoを作成しました
        </div>
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
                <form class="todo-form">
                    @foreach ($todos as $todo)
                    <div class="todo-item">
                        <p class="todo-item__name">{{ $todo->content }}</p>
                        <div class="todo-item__button">
                            <button type="submit" class="todo-list__item-button-update">
                            更新
                            </button>
                            <button class="todo-list__item-button-delete" type="submit">削除
                            </button>
                        </div>
                    </div>
                    @endforeach
                </form>
            </div>
        </div>
    </div>
@endsection
