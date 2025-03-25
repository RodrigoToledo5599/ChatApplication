<style>
    :root{
        /* -- */
    }

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
    border-radius: 16px;
}

.conversation-screen .campo-de-mensagem{
    width: 68vw;
    height: 10vh;
    
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
    border: none; 
    padding: 0;
    font: inherit; 
    cursor: pointer; 
    outline: none;
}
</style>







<div class="conversation-screen">
    <div class="conversation">

    </div>

    <div class="campo-de-mensagem">
        <div class="mensagem">
            <input type="text" name="message" id="message">
        </div>
        <div class="enviar-mensagem">
            <button><img src="{{ asset('img/send-msg-arrow.svg')}}" alt=""></button>
        </div>

    </div>

</div>
