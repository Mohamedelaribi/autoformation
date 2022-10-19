<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }


    public function stor(){
        return 'welcome to stor';
    }
}
