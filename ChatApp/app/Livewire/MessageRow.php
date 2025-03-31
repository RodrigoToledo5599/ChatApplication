<?php

namespace App\Livewire;


use Auth;
use Illuminate\Support\Facades\DB;

use Livewire\Component;
use App\Models\User;
use App\Models\Conversation;


class MessageRow extends Component
{
    public function render()
    {
        return view('livewire.message-row');
    }
}
