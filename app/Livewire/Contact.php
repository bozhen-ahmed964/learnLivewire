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

        $this->validate(
            [
                'user_name' => 'required | string | max:255 | unique:users,name',
                'user_email' => 'required | string | max:255',
                'user_password' => 'required | string | max:255',
            ]
        );


         User::create([
            'name' => $this->user_name,
            'email' => $this->user_email,
            'password' => $this->user_password,
         ]);


         return redirect()->back();

    }


    public function render()
    {
        $users = User::all();
        return view('livewire.contact' , [
            'users' => $users,
        ]);
    }
}
