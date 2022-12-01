<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    
    public function index()
    {
       
        $todos = Todo::all();

        return view('todo', compact('todos'));
    }

   

     public function store(Request $request)
     {
        $todos = new Todo;
        $todos->name = $request->input('name');
        $todos->save();
        return redirect('todo');
        
     }

    public function edit(Request $request)
    {
        $todos = Todo::find($request->id);

        return view('todo', compact('todos'));
    }

     public function update(Request $request)
     {
        $todos = Todo::find($request->id);
        $todos->name = $request->input('name');
        $todos->save();
        return redirect('todo');

     }

    public function destroy($id)
    {
        $todos = Todo::find($id);
        $todos->delete();
        return redirect('todo');
    }
    

   
   

}
