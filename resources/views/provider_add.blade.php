@extends('layout')
@section('page-content')
    <div class="add">
        <img class="image" src="/public/img/aaa.png">
        <div class="reduct">
            <form class="aaaaa" action="{{route('provider_add')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input name="id_товара" type="text" placeholder="Товар">
                <input name="Дата" type="text" placeholder="Дата поставки">
                <button class="submit-btn1">Добавить</button>
            </form>
        </div>
        <img class="image" src="/public/img/bbb.png">
    </div>
@endsection
