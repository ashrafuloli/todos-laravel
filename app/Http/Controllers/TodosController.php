<?php

namespace App\Http\Controllers;

use App\Todo;

class TodosController extends Controller
{
    public function index()
    {
        /**
         * fetch all todos from database
         * display them in the todos. index page
         */

        return view('todos.index')->with('todos', Todo::all());
    }

    public function show($todoId)
    {
        return view('todos.show')->with('todo', Todo::find($todoId));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|min:5|max:25',
            'description' => 'required',
        ]);

        $data = request()->all();
        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;

        $todo->save();

        return redirect('\todos');
    }

    public function edit($todoId)
    {
        $todo = Todo::find($todoId);

        return view('todos.edit')->with('todo', $todo);
    }

    public function update($todoId)
    {
        $this->validate(request(), [
            'name' => 'required|min:5|max:25',
            'description' => 'required',
        ]);

        $data = request()->all();

        $todo = Todo::find($todoId);
        $todo->name = $data['name'];
        $todo->description = $data['description'];

        $todo->save();

        return redirect('/todos');

    }

    public function destroy($todoId)
    {
        $todo = Todo::find($todoId);
        $todo->delete();

        return redirect('/todos');
    }
}
