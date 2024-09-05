@extends('layout')
@section('page-content')
    <div class="add">
        <img class="image" src="/public/img/aaa.png">
        <div class="reduct">
            <input type="text" placeholder="Название товара" required>
            <input type="text" placeholder="Описание товара" required>
            <input type="number" placeholder="Цена" required>
            <button class="submit-btn">Изменить</button>
        </div>
        <img class="image" src="/public/img/bbb.png">
    </div>
@endsection
