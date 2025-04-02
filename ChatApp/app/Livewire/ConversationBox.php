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
    public $conversationId;
    public $message;

    public function mount($receiverId=1, $conversationMessages=[], $conversationId=0)
    {
        $this->receiverId = $receiverId;
    }

    public function loadConversationMessages($conversationNewId): void{
        $this->conversationId = $conversationNewId;
        $this->conversationMessages = Message::where('conversation_id',$this->conversationId)->get();
        if(!isset($this->conversationMessages[0])){
            $this->conversationMessages = [];
        }
    }

    

    public function render()
    {
        // $this->message = "ijwoiwijowqoiqww";
        if($this->receiverId == 0){
            return view('livewire.conversation-box',[
                "receiverId" => 0,
                "message" => "selecione a conversa no menu ao lado",
            ]);
        }
        $this->loadConversationMessages(1);
        return view('livewire.conversation-box',[
            "receiverId" => $this->receiverId,
            "message" => "Nenhuma Mensagem ainda",
            "conversationMessages" => $this->conversationMessages,
        ]);
        
        

    }
}
