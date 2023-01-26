<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article_article;
class Article_articleC extends Controller
{
    public function index(){
        $products = Article_article::where('article_id','1')->get();
        return $products->article;
    }
}
