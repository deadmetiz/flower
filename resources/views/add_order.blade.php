@extends('layout')
@section('page-content')
<form action="{{route('add_order')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input id="iduser" name="iduser" placeholder="id_пользователя" required>
    <input id="name" name="Наименование" placeholder="Цветок" required>
    <input id="count" name="Количество" placeholder="Количество" required>
    <input id="date" name="Дата" placeholder="Дата" required>
    <input id="price" name="Стоимость" placeholder="Стоимость" required>
    <input id="adress" name="Адрес" placeholder="Адрес" required>
    <button>Отправить</button>
</form>
@endsection
