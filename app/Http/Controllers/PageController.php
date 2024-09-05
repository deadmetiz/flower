<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }


    public function login()
    {
        return view('login');
    }

    public function wishlist()
    {
        if(Auth::user()) {
            return view('wishlist');
        }
        else{
            return view('login');
        }
    }

    public function catalog()
    {
        return view('catalog');
    }

    public function cart()
    {
        if(Auth::user()) {
            return view('cart');
        }
        else{
            return view('login');
        }
    }

    public function my_profile()
    {
        if(Auth::user()) {
            if(Auth::user()->Роль == 'Админ'){
                return view('stat');
            }
            elseif(Auth::user()->Роль == 'Поставщик'){
                return view('provider');
            }
            else{
            return view('my_profile');}
        }
        else{
            return view('login');
        }
    }

    public function add_order()
    {
        return view('add_order');
    }

    public function add_product()
    {
        if(Auth::user()) {
            return view('add_product');
        }
        else{
            return view('login');
        }
    }
    public function add_category()
    {
        if(Auth::user()) {
            return view('add_category');
        }
        else{
            return view('login');
        }
    }

    public function red_product()
    {
        return view('red_product');
    }
    public function red_category()
    {
        return view('red_category');
    }

    public function logout(Request $request)
    {
        Session::flush();
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/');
    }

    public function order(Request $request){
        if(Auth::user()) {
            return view('order');
        }
        else{
            return view('login');
        }
    }

    public function stat(Request $request){
        return view('stat');
    }
    public function provider(){
    if(Auth::user()->Роль == 'Поставщик'){
        return view('provider');
    }
    else{
        return view('login');
    }
    }
    public function company(){
        return view('company');
    }
    public function news(){
        return view('news');
    }

    public function post_add(){
        return view('post_add');
    }

    public function post_reduct(){
        return view('post_reduct');
    }

    public function provider_add(){
        return view('provider_add');
    }
}
