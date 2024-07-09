<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Contact extends Component
{


    public $user_name = '';
    public $user_email = '';
    public $user_password = '';

    public function save()
    {


        dd('hello');

        $this->validate(
            [
                'user_name' => 'required | string | max:255',
                'user_email' => 'required | string | max:255',
                'user_password' => 'required | string | max:255',
            ]
        );

         User::create([
            'user_name' => $this->user_name,
            'user_email' => $this->user_email,
            'user_password' => $this->user_password,
         ]);
         $this->rest();
         return redirect()->back();
    }


    public function render()
    {
        return view('livewire.contact');
    }
}
