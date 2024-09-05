<?php
use Illuminate\Support\Facades\DB;
$id = $_GET['id'];
$name = DB::table('Категории')->where('id_категории', $id)->value('Название');

?>
@extends('layout')
@section('page-content')
    <div class="add">
        <img class="image" src="/public/img/aaa.png">
        <div class="reduct">
            <h1>Редактирование</h1>
            <form action="{{route('red_category')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input name="id" type="hidden" value="{{$id}}">
                <input name="Название" type="text" placeholder="Название категории" value="{{$name}}">
                <button class="submit-btn">Изменить</button>
            </form>
        </div>
        <img class="image" src="/public/img/bbb.png">
    </div>
@endsection
