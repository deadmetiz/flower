<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller{
    public function add_product(Request $request)
    {
        $idkt = $request->get('id_категории');
        $name = $request->get('Название');
        $price = $request->get('Цена');
        $oldprice = $request->get('Старая_цена');
        $id = DB::table('Ассортимент')->insertGetId(['id_категории'=>$idkt, 'Название'=>$name,'Цена'=>$price, 'Старая_цена'=>$oldprice]);
        $uploaddir = "../public/img/" . $id . ".png";
        DB::table('Статистика')->insert(['id_товара'=>$id, 'Количество_покупок'=>0, 'Частота_заказов'=>0]);
        move_uploaded_file($_FILES['image']['tmp_name'], $uploaddir);
        return view('catalog');
    }

    public function add_category(Request $request)
    {
        $name = $request->get('Название');
        DB::table('Категории')->insert(['Название'=>$name]);
        return view('catalog');
    }

    public function del_product(Request $request)
    {
        $name = $request->get('Название');
        DB::table('Ассортимент')->where('Название', $name)->delete();
        return view('catalog');
    }

    public function del_category(Request $request)
    {
        $name = $request->get('Название');
        DB::table('Категории')->where('Название', $name)->delete();
        return view('catalog');
    }

    public function red_product(Request $request)
    {
        $id = $request->get('id');
        $name = $request->get('Название');
        $idkt = $request->get('id_категории');
        $price = $request->get('Цена');
        $oldprice = $request->get('Старая_цена');
        DB::table('Ассортимент')->where('id_товара', $id)->update(['Название'=>$name, 'id_категории'=>$idkt, 'Цена'=>$price, 'Старая_цена'=>$oldprice]);
        return view('catalog');
    }

    public function red_category(Request $request)
    {
        $id = $request->get('id');
        $name = $request->get('Название');
        DB::table('Категории')->where('id_категории', $id)->update(['Название'=>$name]);
        return view('catalog');
    }

    public function curcategory()
    {
        $id = $_POST['id'];
        $name = DB::table('Категории')->where('id_категории', $id)->value('Название');
        echo $name;
    }

    public function post_add(Request $request)
    {
        $desc = $request->get('Заголовок');
        $text = $request->get('Текст');
        $id = DB::table('Посты')->insertGetId(['Заголовок'=>$desc, 'Содержание'=>$text]);
        $uploaddir = "../public/img/posts/" . $id . ".png";
        move_uploaded_file($_FILES['image']['tmp_name'], $uploaddir);
        return redirect('news');
    }gi

    public function post_del(Request $request)
    {
        $id = $request->get('id_поста');
        DB::table('Посты')->where('id_поста', $id)->delete();
        return redirect('news');
    }

    public function post_reduct(Request $request)
    {
        $id = $request->get('id');
        $desc = $request->get('Заголовок');
        $text = $request->get('Текст');
        DB::table('Посты')->where('id_поста', $id)->update(['Заголовок'=>$desc, 'Содержание'=>$text]);
        return redirect('news');
    }

    public function company(Request $request)
    {
        $name = $request->get('Название');
        $tel = $request->get('Телефон');
        $adres = $request->get('Адрес');
        DB::table('Поставщик')->insertOrIgnore(['id_поставщика'=>Auth::id()]);
        DB::table('Поставщик')->where('id_поставщика', Auth::id())->update(['Название'=>$name,'Телефон'=>$tel,'Адрес'=>$adres]);
        return redirect('provider');
    }

    public function provider_add(Request $request)
    {
        $idt = $request->get('id_товара');
        $id = Auth::id();
        $date = $request->get('Дата');
        DB::table('Поставки')->insert(['id_поставщика'=>$id,'id_товара'=>$idt,'Дата'=>$date]);
        return redirect('provider');
    }
}
