<?php

?>
@extends('layout')
@section('page-content')
    <div class="add">
        <img class="image" src="/public/img/aaa.png">
        <div class="reduct">
            <form action="{{route('post_add')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input name="Заголовок" type="text" placeholder="Заголовок">
                <input name="Текст" type="text" placeholder="Текст">
                <input name="image" type="file">
                <button class="submit-btn">Добавить</button>
            </form>
        </div>
        <img class="image" src="/public/img/bbb.png">
    </div>
@endsection
