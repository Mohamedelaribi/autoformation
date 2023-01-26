<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class ArticleMang extends Controller
{
    public function index(){
        return view('index');
    }
    public function getProduct(){
        $products = Article::find(1);
        return $products->model;
    }
}



// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Permission;
// class ArticleMang extends Controller
// {
//     public function index(){
//         return view('index');
//     }
//     public function getProduct(){
//         $products = Permission::with('profile')->where('id',1)->get();
//         // return $products->role->where('id',1)->get();
//         // dd($products->profil);
//         foreach($products as $product){
//                 echo $product->profile;
//                 // foreach($product as $role){
//                 //     echo $role;
//                 // }
//         }

//     }
// }
