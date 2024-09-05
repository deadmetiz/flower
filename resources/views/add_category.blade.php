@extends('layout')
@section('page-content')
    <div class="add">
        <img class="image" src="/public/img/aaa.png">
        <div class="reduct">
            <form action="{{route('add_category')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input name="Название" type="text" placeholder="Название категории">
                <button class="submit-btn">Добавить</button>
            </form>
        </div>
        <img class="image" src="/public/img/bbb.png">
    </div>
@endsection
