<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Conversation;
use App\Models\Message;
use App\Models\User;
use Auth;

class ConversationBox extends Component
{
    public $receiverId;
    public $conversationMessages;

    public function mount($receiverId=1, $conversationMessages=[])
    {
        $this->receiverId = $receiverId;
    }

    public function loadConversation() {
        // dd(Auth::user()->id);
        $result = Conversation::where('receiver_id',Auth::user()->id)->where('sender_id',$this->receiverId)->orWhere('receiver_id',$this->receiverId)->where('sender_id',Auth::user()->id)->first();
        $result == null ? "null" : $result;
        return $result;
    }

    public function loadConversationMessages($conversationId): void{
        $this->conversationMessages = DB::table('messages')->where('conversation_id',$conversationId)->get();
        if(!isset($this->conversationMessages[0])){
            $this->conversationMessages = [];
        }
    }


    public function render()
    {
        if($this->receiverId == 0){
            return view('livewire.conversation-box',[
                "receiverId" => 0,
                "message" => "selecione a conversa no menu ao lado",
            ]);
        }
        $conversation = $this->loadConversation();
        $this->loadConversationMessages($conversation->id);
        // dd($this->conversationMessages == []);
    
        return view('livewire.conversation-box',[
            "receiverId" => $this->receiverId,
            "message" => "Nenhuma Mensagem ainda",
            "conversationMessages" => $this->conversationMessages,
        ]);
        
        

    }
}
