<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TodoController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('todos.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'image' => 'required|max:2000|image',
            'title' => 'required|min:5',
            'description' => 'required|min:5',
            'category_id' => 'required|integer'
        ]);

        $filename = time() . '_' . $request->image->getClientOriginalName();
        $request->image->storeAs('/images', $filename);

        Todo::create([
            'image' => $filename,
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('todo.index');
    }
    public function index()
    {
        $todos =Todo::paginate(3);
        return view('todos.index', compact('todos'));
    }
    public function show(todo $todo)
    {
        $todos =Todo::all();
        return view('todos.show', compact('todo'));
    }
    public function completed(todo $todo)
    {
        $todo->update([
            'status'=>1,
        ]);
        return redirect()->route('todo.index');
    }
    public function edit(Todo $todo)
    {
        $categories = Category::all();
        return view('todos.edit', compact('todo','categories'));
    }
    public function update(Request $request , todo $todo)
    {
        $request->validate([
            'image' => 'nullable|max:2000|image',
            'title' => 'required|min:5',
            'description' => 'required|min:5',
        ]);
        if($request->hasFile('image')){
            Storage::delete('/images/'.$todo->image);
            $filename = time() . '_' . $request->image->getClientOriginalName();
            $request->image->storeAs('/images', $filename);
        }
        $todo->update([
            'image'=>$request->hasFile('image')?$filename:$todo->image,
            'title'=>$request->title,
            'description'=>$request->description,
        ]);
        return redirect()->route('todo.show', ['todo' => $todo->id]);
    }
    public function destroy(todo $todo)
    {
        Storage::delete('/images/'.$todo->image);
        $todo->delete();
        return redirect()->route('todo.index');
    }
}
