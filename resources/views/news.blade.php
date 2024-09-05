<?php
use Illuminate\Support\Facades\DB;
$csrf = csrf_token();
$deln = route('post_del');
$red = route('post_reduct-page');
    ?>
@extends('layout')
@section('page-content')
    @if(\Illuminate\Support\Facades\Auth::user())
    @if(\Illuminate\Support\Facades\Auth::user()->Роль == 'Админ')
    <div class="knopa">
        <a href="{{route('post_add-page')}}">
        <button class="btn-post">Добавить пост</button>
        </a>
    </div>
    @endif
    @endif
    <div class="post-background">
        <?php
            $posts = DB::table('Посты')->get();
            foreach($posts as $post){
                echo "<div class='post-container'>";
                echo "<div class='post-name'>";
                if(\Illuminate\Support\Facades\Auth::user()) {
                    if(\Illuminate\Support\Facades\Auth::user()->Роль == 'Админ'){
                        echo "
                        <form action='$deln' method='post' enctype='multipart/form-data'>
                        <input type='hidden' name='_token' value='$csrf'/>
                        <input type='hidden' name='id_поста' value='$post->id_поста'>
                        <button><img class='rubbish' src='public/img/rubbish.png'></button>
                        </form>
                        ";
                        echo "<a href='$red?id=$post->id_поста'><img class='rubbish1' src='/public/img/reduct.png'></a>";
                    }
                }
                echo "<span>$post->Заголовок</span>";
                echo "</div>";
                echo "
                <div class='news'>
                <img class='post-photo' src='/public/img/posts/$post->id_поста.png'>
                <p>$post->Содержание</p>
                </div>
                </div>
                ";
            }
            ?>


@endsection
