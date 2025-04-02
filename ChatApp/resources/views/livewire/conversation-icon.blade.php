
<div class="conversation-icon d-flex flex-row align-items-center justify-content-start" 
    style="width:25vw; height:10vh;"
    onmouseover="this.style.border='solid 2px black'; this.style.borderRadius='10px'; this.style.cursor='pointer'; "
    onmouseout="this.style.border='0'"
    >
    <div class="img-space d-flex flex-row align-items-center justify-content-center " style="width:6vw;">
        <img src="{{ asset('img/account-circle.svg')}}" alt="">
    </div>
    <div class="name-space w-19" style="overflow-x: auto; word-wrap: break-word;">
        <h4>{{$user->name}} - Id: {{$user->id}}</h4>
        <h4>{{$user->email}}</h4>
    </div>
</div>
