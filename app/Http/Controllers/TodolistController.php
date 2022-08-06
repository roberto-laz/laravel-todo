<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;

class TodolistController extends Controller
{

    public function index()
    {
        // pagination 10 items
        $todolists = Todolist::paginate(10);
        return view('index', compact('todolists'));
    }


    public function create()
    {
        return view('create');
    }


    public function store(Request $request)
    {
        // validation
        $data = $request->validate([
            'content' => 'required|max:20'
        ]);

        Todolist::create($data);
        return back();
    }



    public function show(Todolist $todolist)
    {
        //
    }


    public function edit($id)
    {
       $todolist = Todolist::find($id); 
       return view('edit', compact('todolist'));
    }


    public function update(Request $request, $id)
    {
        $content = $request->input('content');
        Todolist::find($id)->update(compact('content')); 
        $todolists = Todolist::all();
        return redirect(route('todolists.index',compact('todolists')));
    }


    public function destroy($id)
    {
        Todolist::destroy($id);
        return redirect()->back();
    }
}
