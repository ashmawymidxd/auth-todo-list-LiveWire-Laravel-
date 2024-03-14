<?php

namespace App\Http\Livewire\TodoList;
use App\Models\Todo;
use Livewire\WithPagination;

use Livewire\Component;

class TodoList extends Component
{
    use WithPagination;

    public $name;
    public $search;
    // public $todoLists;
    protected $todoLists;
    public $add_status = false;
    public $todoEditId;
    public $todoEditName;

    public function render()
    {
        $this->todoLists = Todo::latest()->where('name','like',"%{$this->search}%")->paginate(5);
        return view('livewire.todo-list.todo-list',['todoLists' => $this->todoLists]);
    }

    public function create(){
        $this->validate([
            'name' => 'required'
        ]);

        $todo = new Todo();
        $todo->name = $this->name;
        $todo->save();

        $this->name = '';
        $this->add_status = true;
    }

    public function toggleCompleted($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->completed = $todo->completed == 1 ? 0 : 1;
        $todo->save();
    }

    public function delete($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();
    }

    public function edit($id)
    {
        $todo = Todo::findOrFail($id);
        $this->todoEditId = $todo->id;
        $this->todoEditName = $todo->name;
    }

    public function cancelEdit()
    {
        $this->todoEditId = null;
        $this->todoEditName = null;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required'
        ]);

        $todo = Todo::findOrFail($this->todoEditId);
        $todo->name = $this->todoEditName;
        $todo->save();

        $this->todoEditId = null;
        $this->todoEditName = null;
    }
}
