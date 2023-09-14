<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    // hiển thị danh sách todo
    public function index(){
        $todos = Todo::where('user_id', Auth::id())->get();
        return view('todos.index', compact('todos'));
    }

    // form tạo mới 1 todo 
    public function create(){
        return view('todos.create');
    }

    // lưu dl vừa tạo vào csdl 
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
        $data['due_date'] = $request->due_date;
        $data['due_time'] = $request->due_time;

        Todo::create($data);

        $request->session()->flash('success', 'Todo created successfully!');

        return redirect()->route('todos.index');
    }

    // form sửa 
    public function edit($id){
        $todo = Todo::where('id', $id)->first();
        return view('todos.edit', compact('todo'));
    }

    // lưu thông tin vừa sửa vào csdl 
    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'state' => 'required',
        ]);

        $todo = Todo::find($id);

        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->state = $request->state;
        $todo->due_date = $request->due_date;
        $todo->due_time = $request->due_time;
        
        $todo->save();

        $request->session()->flash('success', 'Todo updated successfully!');

        return redirect()->route('todos.index');
    }

    // xóa 1 todo 
    public function delete($id){
        $todo = Todo::where('id', $id)->first();
        if($todo) {
            $todo->delete();
            return redirect()->route('todos.index')->with('success', 'Todo deleted successfully');
        } else {
            return redirect()->route('todos.index')->with('error', 'Todo deleted failed!');
        }
    }

}
