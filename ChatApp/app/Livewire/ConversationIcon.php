<?php

namespace App\Livewire;

use Livewire\Component;

class ConversationIcon extends Component
{
    public $user;
    function __construct(){
        $this->user;
    }
    public function render()
    {
        return view('livewire.conversation-icon',[
            'user' => $this->user
        ]);
    }
}
