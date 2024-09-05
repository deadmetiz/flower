<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
$orders = DB::table('Заказы')->where('id_пользователя', Auth::id())->get();
$route = route('order-page');
?>
@extends('layout')
@section('page-content')
<main>
    <span class="name">Добро пожаловать, {{Auth::user()->Почта}}!</span>
    <div>
        <span class="wishlist">Ваши покупки</span>
        <div class="wishlist_container">
                <?php
                    foreach($orders as $order){
                        echo
                        "<a href='$route?id=$order->id_заказа'>
                        <div class='product-item'>

                    <div class='product-list'>
                        <h3>Номер заказа: $order->id_заказа</h3>

                        <span class='price'>Дата покупки:</span>
                        <span class='price'>$order->Дата_заказа</span>
                    </div>
                </div>
                        </a>";
                    }
                    ?>
        </div>
    </div>
</main>
@endsection
