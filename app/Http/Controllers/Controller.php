<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getFirst(){
        return 'this is First action';
    }
    public function getSecond(){
        return 'this is Second action';
    }
    public function postThird(){
        return 'this is Third action';
    }

    public function show()
    {
        $users = DB::select('select * from users');
        foreach ($users as $user) {
            echo $user->name;
        }
    }

    public function getProduct($item){
        $product = DB::table('products')->where('name', $item)->first();
        return view('insert')->withProduct($product);
        // return var_dump($product);
    }
    public function insertProduct(){
        $product = DB::table('products')->insert(['name'=>$_POST['name'],'price'=>$_POST['price'], 'information'=>$_POST['information']]);
        return redirect('home');
        // return 'fdsfsdfsdf';
    }
    public function updateProduct($item){
        $product = DB::table('products')->where('name', $item)
        ->update(['name'=>$_POST['name'],'price'=>$_POST['price'], 'information'=>$_POST['information']]);
        return redirect('home');
    }

    public function deleteProduct($item){
        $product = DB::table('products')->where('name', $item)
        ->delete();
        return redirect('home');
    }
}
