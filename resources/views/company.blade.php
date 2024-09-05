@extends('layout')
@section('page-content')
    <div class="blue-fon">
    <div class="company">
    <form class="form" action="{{route('company_add')}}" method="post" enctype="multipart/form-data">
        @csrf
        <h3>Заполните данные о компании</h3>
        <input name="Название" placeholder="Название компании" required>
        <input name="Телефон" placeholder="Телефон" required>
        <input name="Адрес" placeholder="Адрес" required>
        <button class="btn1">Отправить</button>
    </form>
    </div>
    </div>
@endsection
