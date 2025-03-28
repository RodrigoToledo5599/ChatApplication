<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
// use Auth;

class ConversationSideBar extends Component
{
    public function render()
    {
        $users = User::get();
        return view('livewire.conversation-side-bar',[
            'users' => $users,
        ]);
    }
}
