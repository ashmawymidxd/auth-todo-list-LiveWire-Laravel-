<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Counter extends Component
{
    public $count = 0;
    public $users = [];
    public $name = 'ahmed';
    public $load = false;
    public $status = false;

    public function increment()
    {
        $this->count++;
    }

    public function render()
    {
        $this->users = User::all();
        return view('livewire.counter', [
            'users' => $this->users,
        ]);
    }

    public function resetName()
    {
        $this->name = 'adel';
    }

    public function RefreshChilder()
    {
        $this->status = true;
    }
}
