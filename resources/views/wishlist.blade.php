<?php
use Illuminate\Support\Facades\DB;
$wishes = DB::table('Избранное')->where('id_пользователя', (\Illuminate\Support\Facades\Auth::id()))->get();
$array = array();
foreach($wishes as $wish){
    $array[] = $wish->id_товара;
}

$flowers = DB::table('Ассортимент')->whereIn('id_товара', $array)->get();

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
    <span class="wishlist">Избранное</span>
        <form action="{{route('delallfav')}}" method="post" enctype="multipart/form-data">
            @csrf
            <button><a class="favorites__clear">Очистить всё</a></button>

        </form>
    </div>
    <div class="wishlist_container">
        <div class="grid_wishlist">
            <?php
            foreach($flowers as $flower) {
                echo "<div class='product-item'>";
                echo "<img class='photo' src='public/img/$flower->id_товара.png'>";
                echo "<div class='product-list'>";
                echo "<h3>$flower->Название</h3>";
                echo "<span class='price'>$flower->Цена ₽</span>";
                echo "<div class='menu-btn'>";
                if (\Illuminate\Support\Facades\Auth::user()) {
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
                echo "
                        <button onclick='addtofav($flower->id_товара)' class='knopka'><img class='rubbish' src='public/img/rubbish.png'></button>

                        <button onclick='addtobag($flower->id_товара)' class='button'>В корзину</button>
                    </div>";
                echo "</div>";
                echo "</div>";
            }
                ?>

        </div>
    </div>
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
