<?php
use Illuminate\Support\Facades\DB;
$categories = DB::table('Категории')->get();
    ?>
@extends('layout')
@section('page-content')
<div class="add">
        <img class="image" src="/public/img/aaa.png">
        <div class="reduct">
            <form action="{{route('add_product')}}" method="post" enctype="multipart/form-data">
                @csrf
                <select name="id_категории">
                    <?php
                    foreach($categories as $category){
                        echo "<option value='$category->id_категории'>$category->Название</option>";
                    }
                    ?>
                </select>
            <input name="Название" type="text" placeholder="Название товара">
            <input name="Цена" type="number" placeholder="Цена">
                <input name="Старая_цена" type="number" placeholder="Старая Цена">
            <input name="image" type="file">
            <button class="submit-btn">Добавить</button>
            </form>
        </div>
        <img class="image" src="/public/img/bbb.png">
</div>
@endsection
