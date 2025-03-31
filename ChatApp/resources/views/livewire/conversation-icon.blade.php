<style>
    .conversation-icon{
        width:25vw;
        height:10vh;
        /* background-color: blue; */

        display:flex;
        flex-direction: row;
        align-items: center;
        justify-content: start;
        /* border: solid 1px black; */
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .conversation-icon:hover{
        border: solid 1px black;
        border-radius: 12px;
        cursor: pointer;
    }

    .conversation-icon .img-space{
        width:6vw;
        display:flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;

    }

    .conversation .name-space{
        width:19vw;
        overflow-x: auto;
        word-wrap: break-word;
        /* overflow-wrap: break-word; */
    }



</style>

<div class="conversation-icon">
    <div class="img-space">
        <img src="{{ asset('img/account-circle.svg')}}" alt="">
    </div>
    <div class="name-space">
        {{-- {{dd($user)}} --}}
        <h4>{{$user->name}} - Id: {{$user->id}}</h4>
        <h4>{{$user->email}}</h4>
    </div>
</div>
