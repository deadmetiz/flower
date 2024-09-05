<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
$id = $_GET['id'];
$orders = DB::table('Эл_заказы')->where('id_заказа', $id)->get();
$total = 0;
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
                    $flower = $order->id_товара;
                    $name = DB::table('Ассортимент')->where('id_товара', $flower)->value('Название');
                    $total += $order->Цена;
                    echo
                    "
                        <div class='product-item'>

                    <div class='product-list'>
                        <h3>Название: $name</h3>
                        <span class='price'>Количество: $order->Количество</span>
                        <span class='price'>Цена: $order->Цена</span>
                    </div>
                </div>
                        ";
                }
                echo
                "
                        <div class='product-item'>

                    <div class='product-list'>
                        <h3>Итоговая стоимость:</h3>
                        <h3>$total</h3>
                    </div>
                </div>
                        ";
                echo
                "
                        <a><div onclick='delorder($id)' class='product-item'>

                    <div class='product-list'>
                        <button class='btn1'>Отменить заказ</button>

                    </div>
                </div></a>
                        ";
                ?>
            </div>
        </div>
    </main>
    <script src="/public/jquery-3.6.4.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        function delorder(id)
        {
            $.ajax({
                url: "order",
                type: 'POST',
                data: {
                    id: id,
                },
                success: function(data){
                    console.log(data);
                    window.location.href=("/my_profile")
                }
            })
        }
    </script>
@endsection
