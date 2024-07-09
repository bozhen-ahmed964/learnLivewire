<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Home extends Component
{



    public function delete(User $user){
        $user->delete();
    }





    public function render()
    {
        $users = User::all();
        return view('livewire.home', [
            'users' => $users,
        ]);
    }



}
