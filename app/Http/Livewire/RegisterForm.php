<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RegisterForm extends Component
{
    public $name;

    /**
     * Initializing components
     *
     * @return void
     */
    public function mount()
    {
        $this->name = '';
        //
    }

    public function render()
    {
        return view('livewire.register-form');
    }
}
