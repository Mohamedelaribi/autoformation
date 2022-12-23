<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TodoManager extends Controller
{

    public function index()
    {
        $getTodo = Todo::all();
        return view('todo', compact('getTodo'));
    }

    public function create()
    {
    }


    public function store(Request $request)
    {
        if(Auth::check()){
            $addTodo = new Todo();
            $addTodo->name = $request->name;
            $addTodo->save();
            return redirect('/todo');
        }
        else{
            return redirect('/login');
        }
    }


    public function show($id)
    {
        
    }

    public function edit($id)
    {
        
    }


    public function update(Request $request, $id)
    {
        
    }


    public function destroy($id)
    {
        
    }
}
