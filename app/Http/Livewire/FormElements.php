<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormElements extends Component
{
    public $showEmail = false;
    public $message = 'Hello World!';
    public $color = 'red';
    public $size = 'lg';
    public $swag = ['sticker'];
    public function render()
    {
        return view('livewire.form-elements');
    }
}
