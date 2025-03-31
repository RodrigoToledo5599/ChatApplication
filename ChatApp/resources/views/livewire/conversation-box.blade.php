<style>
    .conversation-screen{
    height:100vh; 
    width:70vw;
    display:flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-around;
}

.conversation-screen .conversation{
    width: 68vw;
    height: 80vh;
    border:solid 1px black;
    /* background-color: blue;   */
    border-radius: 16px;
    padding-top: 2vh;
    padding-bottom: 2vh;
    padding-left: 2vw;
    padding-right: 2vw;
}

.conversation-screen .campo-de-mensagem{
    width: 68vw;
    height: 20vh;
    
    display:flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-around;
}

.conversation-screen .campo-de-mensagem .mensagem{
    display:flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-around;
    
}

.conversation-screen .campo-de-mensagem .mensagem input{
    width: 53vw;
    height: 5vh;
    
}

.conversation-screen .campo-de-mensagem .enviar-mensagem{
    display:flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-around;

    width: 6vw;
    height: 9vh;
    border-radius: 16px;
}

.conversation-screen .campo-de-mensagem .enviar-mensagem button{
    background: none; 
    border: 0;
    padding: 0;
    font: inherit; 
    cursor: pointer; 
    outline: none;
}

.conversation-screen .campo-de-mensagem .enviar-mensagem button:hover{
    /* transition:2s;  */
    width:70px;
    height:70px;
}

</style>







<div class="conversation-screen">
    <div class="conversation">
        @if($receiverId != 0)
            @foreach($conversationMessages as  $mensagem)
                <p>{{$mensagem->body}}</p>
            @endforeach
        @endif
        
    </div>

    <div class="campo-de-mensagem">
        <div class="mensagem">
            <input type="text" name="message" id="message">
        </div>
        <div class="enviar-mensagem">
            <button><img src="{{ asset('img/paper-plane.svg')}}" alt=""></button>
        </div>

    </div>

</div>
