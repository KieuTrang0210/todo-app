<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::where('user_id', Auth::id())->get();
        return view('todos.index', compact('todos'));
    }

    public function create(){
        return view('todos.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'state' => 'required',
        ]);

        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['state'] =  $request->state;
        $data['user_id'] = Auth::id();
        
        Todo::create($data);

        $request->session()->flash('success', 'Todo created successfully!');

        return redirect()->route('todos.index');
    }
}
