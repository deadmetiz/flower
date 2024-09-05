<?php
use Illuminate\Support\Facades\DB;
$carts = DB::table('Корзина')->where('id_пользователя', (\Illuminate\Support\Facades\Auth::id()))->get();
$totalprice = 0;
$totalprices = 0;
$count = 0;
$array = array();

    ?>

@extends('layout')
@section('page-content')
    <div class="order">
        <div class="order-left">
            <h1 class="order__block-delivery">Корзина</h1>
            <?php
                foreach($carts as $cart){
                    $count += 1;
                    $flower = DB::table('Ассортимент')->where('id_товара', $cart->id_товара)->first();
                    $totalprice += $flower->Цена;
                    $totalprices += $flower->Старая_цена;
                    $array[$flower->id_товара] = 1;
                    $skid = $flower->Старая_цена - $flower->Цена;
                echo
                "
                <div id='$cart->id_товара' class='cart__item'>
        <div class='cart__item-image'>
            <a href='' ><img class='img' src='/public/img/$flower->id_товара.png' alt='$flower->Название'></a>
        </div>
        <div class='cart__item-info'>
            <div class='cart__item-top'>
                <div class='cart__item-left'>
                    <div class='cart__item-title'>
                        <a class='none' href='' >$flower->Название</a>
                    </div>
                    </div>
                <div class='cart__item-right'>
                    <div class='cart__item-prices'>
                        <div id='$cart->id_товара?normal' class='cart__item-price'>
                        $flower->Цена

                        </div>
                        <div id='$cart->id_товара?old' class='cart__item-sale'>
                        $flower->Старая_цена

                        </div>
                    </div> <!---->
                </div>
            </div>
            <div class='cart__item-top'>
                <div class='cart__item-left'>

                </div>
                <div class='cart__item-right'>
                    <div class='cart__item-discounts'>
                        <div class='cart__item-discount'>
                            <div class='cart__item-discount_title'>Скидка - </div>

                            <div class='cart__item-discount_value'>$skid</div>
                        </div> <!---->
                    </div>
                </div>
            </div>
            <div class='cart__item-bottom'>
                <div class='cart__item-actions'>
                    <div class='counter'>
                        <div onclick='minus($cart->id_товара)' class='counter__minus'>
                            <a><img class='size' src='/public/img/minus.png'></a>
                        </div>
                        <div id='$cart->id_товара?count' class='counter__value'>
                            1
                        </div>
                        <div onclick='plus($cart->id_товара)' class='counter__plus'>
                            <a><img class='size' src='/public/img/plus.png'></a>
                        </div>
                    </div>
                    <div id='$cart->id_товара?o' class='cart__item-total'>
                    $flower->Цена
                    </div>
                </div>
                <div class='cart__item-buttons cart__item-buttons--desktop'>
                    <div class='cart__item-button grey--button'>
                        <div onclick='delbag($cart->id_товара)'><img class='size' src='/public/img/rubbish.png'></div>
                        <div onclick='addtofav($cart->id_товара)'><img class='size' src='/public/img/favorites.png'></div>
                    </div>
                </div>
            </div>
            </div>
        </div> <!---->

                ";}
            ?>

            <!---->
    </div>
        @if($count)
    <div id="right" class="order-right">
        <div class="order__block">
            <h1 class="order__block-delivery">Доставка</h1>
            <div class="order_block-top">
                <div class="order__block-title">По адресу</div>
                <input id="address" class="addres" type="text" placeholder="Введите адрес"/>
            </div>
            <div class="order__block-top">
                <div class="order__block-title">Оплата производится наличными или картой курьеру</div>
            </div>
            <div class="order__block-top">
                <div class="order__block-title">Дата доставки:28.05.2024 с 12:00 до 14:00</div>
            </div>
        </div>
        <div class="order__actions-sum">
            <div class="order__actions-sum_label">
                <div id="sumtv">
                    {{$count}}
                </div>
                <div id="sumtvtxt">
                <?php
                    if($count == 1){
                        echo " товар";
                    }
                    elseif($count > 1 and $count < 5){
                        echo " товара";
                    }
                    else{
                        echo " товаров";
                    }
                ?></div>
            </div>
            <div id="alltotalbez" class="order__actions-sum_value">{{$totalprices}}</div>
        </div>
        <div class="order__actions-discount">
            <div class="order__actions-discount_item">
                <div class="order__actions-discount_label">Cкидка</div>
                <div id="sale" class="order__actions-discount_value">
                    {{$totalprices - $totalprice}} — сумма скидки
                </div>
            </div>
        </div>
        <div class="order__actions-total">
            <div class="order__actions-total_label">Итого</div>
            <div id="alltotal" class="order__actions-total_value">{{$totalprice}}</div>
        </div>
        <div class="order__actions-submit">
            <button onclick="createorder()" type="button" class="ui-button ui-button-dark ui-button-wide">
                <div class="ui-ripple">
                    <div id="but" class="ui-ripple ui-button-content">Оформить заказ</div>
                </div>
            </button>
        </div>
    </div>@else
            @endif
    </div>
    <?php
        $arr = json_encode($array, JSON_UNESCAPED_UNICODE);
    ?>
    <script>
        let arr = JSON.parse('<?php echo $arr?>');
        console.log(arr);
    </script>
    <script src="/public/jquery-3.6.4.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script src="/public/work.js"></script>
    <script>




    </script>
@endsection
