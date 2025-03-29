<style>
    .conversation-side-bar{
        width:25vw;
        height:100vh;
        /* background-color: aquamarine; */
        display: flex;
        flex-direction: column;
        align-items: start;
        justify-content: start;
        overflow-y: auto;
    }
    .conversation-side-bar .title-region{
        width:25vw;
        /* background-color: blueviolet; */
        display: flex;
        flex-direction: row;
        justify-content: start;
        padding-left: 2vw;
    }

</style>


<div class="conversation-side-bar">

    <div class="title-region">
        <h1>
            Bem vindo {{$auth_user->name}}
        </h1>
    </div>
    @foreach($users as $usuario)
        <livewire:conversation-icon :user="$usuario"/>
    @endforeach

</div>
