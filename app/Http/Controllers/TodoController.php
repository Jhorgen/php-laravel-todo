<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    //
    public function index(){
        $todos = Todo::latest()->paginate(10);
        return view('todo.index', compact('todos'))
        ->with('i', (request()->input('page', 1) -1) * 5);
    }

    public function create(){
        return view('todos.create');
    }

    public function store(Request $request){
        request()->validate([
            'todo' => 'required',
        ]);
        Todo::create($request->all())
        return redirect()->route('todos.index')
        ->with('success', 'Task created successfully');
    }

    public function destroy($id){
        Todo::destroy($id);
        return return redirect()->route('todos.index')
        ->with('success', 'Task deleted');
    }
}
