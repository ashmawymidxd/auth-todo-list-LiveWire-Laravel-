<?php

namespace App\Http\Livewire\Auth;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Register extends Component
{
    use WithPagination;

    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $registration_status = false;
    public $updated_status = false;
    public $users = [];

    public function render()
    {
        $this->users = User::get();
        return view('livewire.auth.register',[
            'users' => $this->users,
        ]);
    }

    public function register()
    {
        $this->validate([
            'name' => 'required|min:4',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|same:password_confirmation',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        $this->registration_status = true;

        // auth()->login($user);

        // return redirect()->to('/dashboard');
    }

}
