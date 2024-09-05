<?php
use Illuminate\Support\Facades\DB;
$id = $_GET['id'];
$info = DB::table('Посты')->where('id_поста', $id)->first();

?>

@extends('layout')
@section('page-content')

    <div class="add">
        <img class="image" src="/public/img/aaa.png">
        <div class="reduct">
            <form action="{{route('post_reduct')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input name="id" type="hidden" value="{{$id}}">
                <input name="Заголовок" type="text" placeholder="Заголовок" value="{{$info->Заголовок}}" required>
                <input name="Текст" type="text" value="{{$info->Содержание}}" placeholder="Текст">
                <button class="submit-btn">Поменять</button>
            </form>
        </div>
        <img class="image" src="/public/img/bbb.png">
    </div>
@endsection
