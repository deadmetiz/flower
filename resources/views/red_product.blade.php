<?php
use Illuminate\Support\Facades\DB;
$id = $_GET['id'];
$name = DB::table('Ассортимент')->where('id_товара', $id)->value('Название');
$idkt = DB::table('Ассортимент')->where('id_товара', $id)->value('id_категории');
$price = DB::table('Ассортимент')->where('id_товара', $id)->value('Цена');
$oldprice = DB::table('Ассортимент')->where('id_товара', $id)->value('Старая_цена');
$categories = DB::table('Категории')->get();
    ?>

@extends('layout')
@section('page-content')

    <div class="add">
        <img class="image" src="/public/img/aaa.png">
        <div class="reduct">
            <form action="{{route('red_product')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input name="id" type="hidden" value="{{$id}}">
                <input name="Название" type="text" placeholder="Название товара" value="{{$name}}" required>
                <select name="id_категории">
                    <?php
                        foreach($categories as $category){
                            if($category->id_категории == $idkt){
                                echo "<option value='$category->id_категории' selected>$category->Название</option>";
                            }
                            else{
                                echo "<option value='$category->id_категории'>$category->Название</option>";
                            }
                        }
                        ?>
                </select>
                <input name="Старая_цена" type="number" value="{{$oldprice}}" placeholder="Старая Цена">
                <input name="Цена" type="number" placeholder="Цена" value="{{$price}}" required>
                <button class="submit-btn">Поменять</button>
            </form>
        </div>
        <img class="image" src="/public/img/bbb.png">
    </div>
@endsection
