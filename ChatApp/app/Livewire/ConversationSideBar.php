<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Conversation;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Auth;

class ConversationSideBar extends Component
{
    public $users;
    public $conversations;

    public function mount($conversations = [], $users= []){
        $this->conversations = $conversations;
        $this->users = $users;
    }

    public function loadConversations(){
        $this->conversations = Conversation::where('receiver_id',Auth::user()->id)->orWhere('sender_id',Auth::user()->id)->get();
        foreach($this->conversations as $conversation){
            if($conversation->receiver_id == Auth::user()->id){
                array_push($this->users, User::where('id',$conversation->sender_id)->first());
            }
            if($conversation->sender_id == Auth::user()->id){
                array_push($this->users, User::where('id',$conversation->receiver_id)->first());
            }
        }
    }


    public function loadConversationForTheConversationBoxComponent($conversationId){
        
    }


    public function render()
    {
        $auth_user = Auth::user();
        $this->loadConversations();
        $users = User::where('id', '!=', Auth::user()->id)->get();
        
        return view('livewire.conversation-side-bar',[
            'auth_user' => $auth_user,
            'user_names' => $users,
        ]);
    }
}
