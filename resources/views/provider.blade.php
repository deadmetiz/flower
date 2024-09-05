<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
$rt = route('provider_add-page');
$cm = route('company');
    ?>

@extends('layout')
@section('page-content')
    <main>
        <div class="provider-info">
        <span class="name">Добро пожаловать, {{Auth::user()->Почта}}!</span>
            <?php
                if(DB::table('Поставщик')->where('id_поставщика', Auth::id())->first() == NULL){
                    echo "<span class='info'>Для ведения поставок внесите <a href='$cm' class='data'>данные о компании</a>!</span>";
                }
                else{
                    $info = DB::table('Поставщик')->where('id_поставщика', Auth::id())->first();
                    $postavki = DB::table('Поставки')->where('id_поставщика', Auth::id())->get();

                    echo"
                    <div class='data-info'>
        <a href='$rt'><button class='btn1'>Внести поставку</button></a>
            <table>
                <thead>
                <tr>
                    <th>№</th>
                    <th>Поставка</th>
                    <th>Дата поставки</th>
                </tr>
                </thead>
                <tbody>";
                    foreach($postavki as $postavka){
                        echo"
                        <tr>
                    <td>$postavka->id_поставки</td>
                    <td>$postavka->id_товара</td>
                    <td>$postavka->Дата</td>
                </tr>
                        ";
                    }
                    echo"
                </tbody>
            </table>
        </div>
                    ";
                }
                ?>

@endsection
