<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::all();
        return view('todo.index')->with(['todos'=> $todos]);
    }

    public function show($id)
    {
        $todo = Todo::find($id);
        return view('todo.show')->with(['id'=> $id, 'todo' => $todo]);
    }

    public function create(){
        return view('todo.create');
    }

    public function upload(Request $request){
        $request->validate([
           'title' => 'required|max:15'
        ]);
       $todo = $request->title;
       Todo::create(['title' => $todo]);
       return redirect('index')->with('success', "Todo '$todo' created successfully!");
    }

    public function edit($id){
        $todo = Todo::find($id);
        return view('todo.edit')->with(['id'=> $id, 'todo' => $todo]);
    }

    public function update(Request $request){
        $request->validate([
            'title' => 'required|max:15'
        ]);
        $updateTodo = Todo::find($request->id);
        $updateTodo->update(['title'=> $request->title]);
        return redirect('index')->with('success', "Todo updated successfully!");
    }

    public function completed($id){
        $todo = Todo::find($id);
        if ($todo->completed){
            $todo->update(['completed'=> false]);
            return redirect()->back()->with('success', "Todo is not completed!");
        }else{
            $todo->update(['completed' => true]);
            return redirect()->back()->with('success', "Todo is completed!");
        }
    }

    public function delete($id){
        $todo = Todo::find($id);
        $todo->delete();
        return redirect('index')->with('success', "Todo is deleted!");
    }
}
