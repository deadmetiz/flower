<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
$flowers = DB::table('Ассортимент')->get();
$routep = route('add_product');
$routec = route('add_category');
$delp = route('del_product');
$delc = route('del_category');
$redp = route('red_product-page');
$redc = route('red_category-page');
$csrf = csrf_token();
?>
@extends('layout')
@section('page-content')
    <div class="favorites__title">
        <span class="name">Добро пожаловать, {{Auth::user()->Почта}}!</span>
        <span class="wishlist">Статистика</span>
        <div class="menu-btn">
        <button class="btn1">Обновить статистику</button>
    </div>
    </div>
    <div class="wishlist_container">
        <div class="grid_wishlist">
            <?php
            foreach($flowers as $flower) {
                $stat = DB::table('Статистика')->where('id_товара', $flower->id_товара)->first();
                echo "<div class='product-item'>";
                echo "<img class='photo' src='public/img/$flower->id_товара.png'>";
                echo "<div class='product-list'>";
                echo "<h3>$flower->Название</h3>";
                echo "<span class='price'>Количество покупок: $stat->Количество_покупок</span>";
                echo "<span class='price'>Частота заказов: $stat->Частота_заказов</span>";
                echo "</div>";
                echo "</div>";
            }
            ?>

        </div>
    </div>
    <script src="/public/jquery-3.6.4.js"></script>
    <script src="/public/work.js"></script>
@endsection
