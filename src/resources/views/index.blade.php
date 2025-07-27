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
            <div class="todo-create">
                <input type="text" class="todo-create__txt">
                <input type="button" class="todo-create__button" value="作成">
            </div>
            <div class="todo-board">
                <h3 class="todo-board__title">Todo</h3>
                <div class="todo-list">
                    <div class="todo-item">
                        <p class="todo-item__name">test</p>
                        <div class="todo-item__button">
                            <input type="button" value="更新" class="todo-list__item-button-update">
                            <input type="button" value="削除" class="todo-list__item-button-delete">
                        </div>
                    </div>
                    <div class="todo-item">
                        <p class="todo-item__name">test2</p>
                        <div class="todo-item__button">
                            <input type="button" value="更新" class="todo-list__item-button-update">
                            <input type="button" value="削除" class="todo-list__item-button-delete">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
