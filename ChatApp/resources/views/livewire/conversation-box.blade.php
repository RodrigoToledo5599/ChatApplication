
<div class="conversation-screen d-flex flex-column align-items-center justify-content-around vh-100 w-70">
    <div class="conversationborder " style="width: 68vw; height: 80vh; border:solid 1px black; border-radius: 16px; padding-top: 2vh; padding-bottom: 2vh; padding-left: 2vw; padding-right: 2vw;">
        @if($receiverId != 0)
            @if($conversationMessages == [])
                <p>{{$message}}</p>
            @else
                @foreach($conversationMessages as $mensagem)
                    <p>{{$mensagem->body}}</p>
                @endforeach
            @endif
        @endif
    </div>
    <div class="campo-de-mensagem d-flex flex-row align-items-center justify-content-around vh-20 w-68" style="">
        <div class="mensagem d-flex flex-row align-items-center justify-content-around">
            <input type="text" name="message" id="message" style="width: 53vw; height: 5vh;">
        </div>
        <div class="enviar-mensagem d-flex flex-row align-items-center justify-content-around vh-9 w-6" style="">
            <button style="background: none; border: 0; padding: 0; font: inherit; cursor: pointer; outline: none;">
                <img src="{{ asset('img/paper-plane.svg')}}" alt="">
            </button>
        </div>
    </div>
</div>
