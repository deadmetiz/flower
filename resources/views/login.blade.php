@extends('layout')
@section('page-content')
    <div class="fff">
    <div class="form-structor">
    <div class="signup">
        <h1 class="marg"> Войдите в личный кабинет или зарегистрируйтесь</h1>
        <div class="" id="number">
            <span class="font-size">Напишите свою почту, и вам придет сообщение с кодом для входа</span>
            <input id="email" class="input marg1" type="tel" placeholder='Введите почту'/>
            <button id="open" class="submit-btn">Получить СМС с кодом</button>
        </div>
        <div class="displayy marg" id="input">
            <span class="font-size">Введите код из сообщения</span>
            <input id="code" class="input marg1" placeholder="Введите код"/>
            <button id="log" class="submit-btn">Войти</button>
        </div>
    </div>
    </div>
    </div>
    <script src="/public/jquery-3.6.4.js"></script>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            let email = "";
            document.getElementById('open').addEventListener("click", open);
            document.getElementById('log').addEventListener("click", login);
            function open(){
                let a = document.getElementById("input");
                let b = document.getElementById("number");
                email = document.getElementById("email").value;
                $.ajax({
                    url: "log",
                    type: 'POST',
                    data: {
                        email: email,
                    },
                    success: function(data){
                        console.log(data);
                    }
                })
                a.style.display = "block";
                b.style.display = "none";

            }
            function login(){
                code = document.getElementById("code").value;
                $.ajax({
                    url: "log2",
                    type: 'POST',
                    data: {
                        email: email,
                        code: code,
                    },
                    success: function(data){
                        console.log(data);
                        window.location.href=("/")
                    }
                })
            }
        </script>
@endsection
