<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
class UserController extends Controller{
    public function add_order(Request $request)
    {
        $tojs = Array();
        $tojs['Дата'] = $request->get('Дата');
        $tojs['Наименование'] = $request->get('Наименование');
        $tojs['Количество'] = $request->get('Количество');
        $tojs['Стоимость'] = $request->get('Стоимость');
        $tojs['Адрес'] = $request->get('Адрес');


        $userid = $request->get('iduser');

        $tojs = json_encode($tojs, JSON_UNESCAPED_UNICODE);
        DB::table('Заказы')->insert(['id_пользователя'=>$userid, 'info'=>$tojs]);
        return view('add_order');
    }

    public function log()
    {
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $email = $_POST['email'];
        $change = substr(str_shuffle($permitted_chars), 0, 6);
        echo 'what';
        if(DB::table('Пользователи')->where('Почта', $email)->value('Почта') != 0){
            DB::table('Пользователи')->where('Почта', $email)->update(['password' => $change]);
            mail("$email", "Код для входа", "Здравствуйте!\n\n Код: $change", 'From: poznavaikabox@mail.ru');

        }
        else{
            DB::table('Пользователи')->insert(['Почта'=>$email, 'password'=>$change, 'Роль'=>"Пользователь"]);
            mail("$email", "Код для входа", "Здравствуйте!\n\n Код: $change", 'From: poznavaikabox@mail.ru');
            echo 'what';

        }
    }

    public function log2()
    {
        $email = $_POST['email'];
        $code = $_POST['code'];
        if(DB::table('Пользователи')->where('Почта', $email)->value('password') == $code){
            Auth::loginusingId(DB::table('Пользователи')->where('Почта', $email)->value('id'), True);
            DB::table('Пользователи')->where('id', Auth::id())->update(['id_пользователя'=>Auth::id()]);
            return redirect('/');
        }
        else{
            return redirect('/');
        }
    }

    public function add_favorite()
    {
        $to = $_POST['to'];
        $favorite = DB::table('Избранное')->where('id_пользователя',Auth::id())->where('id_товара', $to)->get();
        if(count($favorite) === 0){
            DB::table('Избранное')->insert(['id_пользователя'=>Auth::id(), 'id_товара'=>$to]);
            echo "successful";
        }
        else{
            DB::table('Избранное')->where('id_пользователя',Auth::id())->where('id_товара', $to)->delete();
        }
    }

    public function add_bag()
    {
        $to = $_POST['to'];
        $count = $_POST['count'];
        $bag = DB::table('Корзина')->where('id_пользователя', Auth::id())->where( 'id_товара', $to)->value('Количество');

        if($bag === NULL){
            echo"here";
            DB::table('Корзина')->insert(['id_пользователя'=>Auth::id(), 'id_товара'=>$to, 'Количество'=>$count]);
            echo "successful";
        }
        else{
            echo"here2";

            //DB::table('Корзина')->where('id_пользователя', Auth::id())->where('id_товара', $to)->update(['Количество'=>$count]);
            echo "successful";
        }
    }
    public function del_bag()
    {
        $to = $_POST['to'];
        DB::table('Корзина')->where('id_пользователя', Auth::id())->where( 'id_товара', $to)->delete();
        echo "successful";
    }

    public function create_order()
    {
        $arr = $_POST['to'];
        $address = $_POST['address'];
        $arr = json_decode($arr, true);
        $keys = array_keys($arr);
        if(count($keys) > 0) {
            $id = DB::table('Заказы')->insertGetId(['id_пользователя'=>Auth::id(), 'Адрес'=>$address]);
            for ($i = 0; $i < count($keys); $i++) {
                $key = $keys[$i];
                $price = DB::table('Ассортимент')->where('id_товара', $key)->value('Цена') * $arr[$key];
                DB::table('Эл_заказы')->insert(['id_заказа'=>$id, 'id_товара'=>$key, 'Количество'=>$arr[$key], 'Цена'=>$price]);
            }
        }
    }

    public function order()
    {
        $id = $_POST['id'];
        DB::table('Заказы')->where('id_заказа', $id)->delete();
        DB::table('Эл_заказы')->where('id_заказа', $id)->delete();
        echo "ok";
    }

    public function delallfav()
    {
        DB::table('Избранное')->where('id_пользователя', Auth::id())->delete();
        return view('wishlist');
    }
}
