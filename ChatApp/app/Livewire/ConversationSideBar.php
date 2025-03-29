<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Auth;

class ConversationSideBar extends Component
{
    public function render()
    {
        $auth_user = Auth::user();
        $users = User::where('id', '!=', Auth::user()->id)->get();
        return view('livewire.conversation-side-bar',[
            'users' => $users,
            'auth_user' => $auth_user,
        ]);
    }
}
