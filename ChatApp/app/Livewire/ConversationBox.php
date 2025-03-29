<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Conversation;
use App\Models\User;
use Auth;

class ConversationBox extends Component
{
    public $receiverId;

    // public function loadConversation() {
    //     if($this->receiverId == "0"){
    //         return view('livewire.conversation-box',[
    //             "conversation" => "",
    //         ]);
    //     }
    //     $result = Conversation::where('receiver_id',Auth::user()->id)->where('sender_id',$this->receiverId)->orWhere('receiver_id',$this->receiverId)->where('sender_id',Auth::user()->id)->first();
    //     $result == null ? "null" : $result;
    //     return $result;
    // }


    public function render()
    {
        // $conversation = $this->loadConversation();
        // if($conversation == null || $conversation == ""){
        //     return "não foi possível achar a conversa";
        // }

        // return view('livewire.conversation-box',[
        //     "conversation" => $conversation,
        // ]);

        return view('livewire.conversation-box');
    }
}
