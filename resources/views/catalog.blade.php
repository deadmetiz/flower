<?php
use Illuminate\Support\Facades\DB;
$categories = DB::table('Категории')->get();
$routep = route('add_product');
$routec = route('add_category');
$routelog = route('login');
$delp = route('del_product');
$delc = route('del_category');

$redp = route('red_product-page');
$redc = route('red_category-page');
$csrf = csrf_token();

    ?>

@extends('layout')
@section('page-content')
    <nav class="catalog__title">
        <ul class="catalog__list">
            <?php
                foreach($categories as $category){
                    echo "<li><a class='catalog' href=''>$category->Название</a></li>";
                    if(\Illuminate\Support\Facades\Auth::user()) {
                        if(\Illuminate\Support\Facades\Auth::user()->Роль == 'Админ'){
                            echo "<a href='$redc?id=$category->id_категории'><img class='rubbish1' src='public/img/reduct.png'></a>";
                            echo "
                        <form action='$delc' method='post' enctype='multipart/form-data'>

                        <input type='hidden' name='_token' value='$csrf'/>
                        <input type='hidden' name='Название' value='$category->Название'>
                        <button><img class='rubbish' src='public/img/rubbish.png'></button>
                        </form>
                        ";
                        }
                    }
                }
                ?>
            <?php
            if(\Illuminate\Support\Facades\Auth::user()) {
                if(\Illuminate\Support\Facades\Auth::user()->Роль == 'Админ'){
                    echo "<li><a class='catalog' href='$routec'><img class='rubbish' src='/public/img/plus.png'></a></li>";
                }
            }
            ?>
        </ul>
    </nav>
    <?php
        foreach($categories as $category){
            $flowers = DB::table('Ассортимент')->where('id_категории', $category->id_категории)->get();
            echo "<h3 class='list'>$category->Название</h3>";
            echo "<div class='wishlist_container'>";
            echo "<div class='grid_wishlist'>";
            foreach($flowers as $flower){
                echo "<div class='product-item'>";
                echo "<img class='photo' src='public/img/$flower->id_товара.png'>";
                echo "<div class='product-list'>";
                echo "<h3>$flower->Название</h3>";
                if ($flower->Старая_цена == $flower->Цена){
                    echo "<span class='price'>$flower->Цена ₽</span>";
                } else{
                    echo "<s class='price1'>$flower->Старая_цена ₽</s>";
                    echo "<span class='price'>$flower->Цена ₽</span>";
                }

                echo "<div class='menu-btn'>";
                if(\Illuminate\Support\Facades\Auth::user()) {
                    if (\Illuminate\Support\Facades\Auth::user()->Роль == 'Админ') {
                        echo "
                        <form action='$delp' method='post' enctype='multipart/form-data'>

                        <input type='hidden' name='_token' value='$csrf'/>
                        <input type='hidden' name='Название' value='$flower->Название'>
                        <button><img class='rubbish' src='public/img/rubbish.png'></button>
                        </form>
                        <a href='$redp?id=$flower->id_товара'><img class='rubbish1' src='public/img/reduct.png'></a>
                        ";
                    }
                }
                if(\Illuminate\Support\Facades\Auth::user()){
                    echo "
                <button onclick='addtofav($flower->id_товара)' class='knopka'><img class='rubbish' src='public/img/like.png'></button>
                 <button onclick='addtobag($flower->id_товара)' class='button'>В корзину</button>";}
                else{
                    echo "
                    <a href='$routelog' class='knopka'><img class='rubbish' src='public/img/like.png'></a>
                    <a href='$routelog' class='button'> В корзину</a>
                    ";
                }
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            if(\Illuminate\Support\Facades\Auth::user()) {
                if (\Illuminate\Support\Facades\Auth::user()->Роль == 'Админ') {
                    echo "<div class='center'>
            <a class='catalog' href='$routep'><img class='plus' src='/public/img/plus.png'></a>
            </div>";
                }
            }
            echo "</div>";
            echo "</div>";


        }
        ?>
    <script src="/public/jquery-3.6.4.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script src="/public/work.js"></script>

@endsection
