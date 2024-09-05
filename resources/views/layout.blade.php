<!DOCTYPE html>
<html lang="en">
<head>
    @section('head')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}"/>
    <link rel="stylesheet" href="public\css\general.css">
    <link rel="stylesheet" href="public\css\style.css">
    <title>Flowers shop</title>
    @show
</head>
<body>
<main>
    <x-header class="header"></x-header>
    @yield('page-content')
</main>
<x-footer class="footer"></x-footer>

</body>
</html>
